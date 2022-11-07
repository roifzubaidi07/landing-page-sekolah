<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeries')->insert([
            'gambar' => 'gambar/default.jpg',
            'deskripsi' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ab sed ex error mollitia magnam exercitationem praesentium harum minima. Nisi nemo, quia illo voluptatum dolorum expedita repellat quisquam commodi sapiente.',
        ]);
        DB::table('galeries')->insert([
            'gambar' => 'gambar/default.jpg',
            'deskripsi' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ab sed ex error mollitia magnam exercitationem praesentium harum minima.',
        ]);
    }
}
