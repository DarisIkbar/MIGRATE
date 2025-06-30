<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            
                'nama' => 'B',
                'nim' => '23104410120',
                'jurusan' => 'Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            //select
            $mahasiswa = DB::table('mahasiswa')->get();

            //update
            DB::table('mahasiswa')->where('id', 1)->update(['jurusan' => 'teknik komputer']);
            
            //delete
            DB::table('mahasiswa')->where('id', 2)->delete();

    }
}
