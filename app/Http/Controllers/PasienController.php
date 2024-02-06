<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function simpanData(Request $request)
    {
        $request->validate([
            'nama_pasien' => ['required'],
            'jenis_kelamin' => ['required'],
            'hb' => ['required', 'numeric'],
            'mch' => ['required', 'numeric'],
            'mchc' => ['required', 'numeric'],
            'mcv' => ['required', 'numeric'],
        ]);


        Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hb' => $request->hb,
            'mch' => $request->mch,
            'mchc' => $request->mchc,
            'mcv' => $request->mcv,
            'status' => $this->isAnemiaHb($request->hb, $request->jenis_kelamin)
        ]);


        return to_route('dashboard');
    }

    // Rumus Indeks MCH (Mean Corpuscular Hemoglobin)
    private function isAnemiaMCH($mch)
    {
        if ($mch < 27) {
            return true;
        } else {
            return false;
        }
    }

    // Rumus Indeks MCV (Mean Corpuscular Volume)
    private  function isAnemiaMCV($mcv)
    {
        if ($mcv < 80) {
            return true;
        } else {
            return false;
        }
    }

    // Rumus Indeks MCHC (Mean Corpuscular Hemoglobin Concentration)
    private  function isAnemiaMCHC($mchc)
    {
        if ($mchc < 32) {
            return true;
        } else {
            return false;
        }
    }

    // Rumus Hemoglobin (Hb)
    private  function isAnemiaHb($hb, $jk)
    {
        if ($jk == 'p') {
            if ($hb < 14) {
                return true;
            } else {
                return false;
            }
        } elseif ($jk == 'l') {
            if ($hb < 12) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
