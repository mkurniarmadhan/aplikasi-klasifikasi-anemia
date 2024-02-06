<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Pasien::truncate();


        $csvData = fopen(base_path('database/data_anemia.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                if ($data['6'] == 'TIDAK ANEMIA') {
                    $data['6'] = 0;
                } else {
                    $data['6'] = 1;
                }


                Pasien::create([
                    'nama_pasien' => $data['0'],
                    'jenis_kelamin' =>  $data['1'],
                    'hb' =>  $data['2'],
                    'mch' =>  $data['3'],
                    'mchc' =>  $data['4'],
                    'mcv' =>  $data['5'],
                    'status' =>  $data['6'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);

        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
