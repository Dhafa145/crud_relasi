<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            'jurusan' =>'RPL'
        ]);

        DB::table('jurusan')->insert([
            'jurusan' =>'MEKATRONIKA'
        ]);

        DB::table('jurusan')->insert([
            'jurusan' =>'ANIMASI'
        ]);

        DB::table('kandidat')->insert(
            [
                'nama_calon' => 'Yudi',
                'kelas' =>'12',
                'jurusan' => '1',
                'nomor_kandidat' => '1',
            ]);
        DB::table('kandidat')->insert(
            [
                'nama_calon' => 'azzam',
                'kelas' =>'12',
                'jurusan' => '2',
                'nomor_kandidat' => '2',
        ]);
        DB::table('kandidat')->insert(
            [
                'nama_calon' => 'adam',
                'kelas' =>'12',
                'jurusan' => '3',
                'nomor_kandidat' => '3',
        ]);

        }
}
