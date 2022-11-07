<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leaders')->insert([
            'name' => 'Drs. SUKARMAN',
            'department' => 'KEPALA SEKOLAH',
            'nip' => '196505251992031014',
        ]);

        DB::table('leaders')->insert([
            'name' => 'ARFIAH RINI, S.Sos',
            'department' => 'KEPALA TENAGA ADMINISTRASI SEKOLAH',
            'nip' => '197301062007012008',
        ]);
    }
}
