<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            'nis'=>"2113334",
            'nama'=>"ghaitsa",
            'alamat'=>"kedungurang",
            'ttl'=>"2006-06-03",
            'nomerhp'=>"085742919295",
        ]);
    }
}
