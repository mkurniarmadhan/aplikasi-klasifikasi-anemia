<?php

use App\Http\Controllers\PasienController;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', fn () =>  redirect('dashboard'));

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $pasiens = Pasien::all();
        $totalPasien = Pasien::count();
        $totalPasien2 = Pasien::where('status', '1')->count();
        $totalPasien3 = Pasien::where('status', '0')->count();
        return view('dasboard', compact('pasiens', 'totalPasien', 'totalPasien2', 'totalPasien3'));
    })->name('dashboard');
    Route::get('tambah-pasien', function () {
        return view('tambah-pasien');
    })->name('tambah-pasien');

    Route::post('tambah-pasien', [PasienController::class, 'simpanData'])->name('simpan-data');
});




Route::get('login', fn () => view('login'))->name('login');
Route::post('login', function (Request $request) {
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'username' => 'Login Tidak sesuai.',
    ])->onlyInput('username');
})->name('aksiLogin');


Route::post('keluar', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('keluar');
