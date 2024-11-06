<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LichthisinhviensTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lichthisinhviens')->insert([
            ['maLHP' => 'LHP01', 'maSV' => 'SV01', 'maPT' => 'PT01'],
            ['maLHP' => 'LHP02', 'maSV' => 'SV02', 'maPT' => 'PT02'],
            ['maLHP' => 'LHP03', 'maSV' => 'SV03', 'maPT' => 'PT03'],
            ['maLHP' => 'LHP04', 'maSV' => 'SV04', 'maPT' => 'PT04'],
            ['maLHP' => 'LHP05', 'maSV' => 'SV05', 'maPT' => 'PT05'],
            ['maLHP' => 'LHP06', 'maSV' => 'SV06', 'maPT' => 'PT06'],
            ['maLHP' => 'LHP07', 'maSV' => 'SV07', 'maPT' => 'PT07'],
            ['maLHP' => 'LHP08', 'maSV' => 'SV08', 'maPT' => 'PT08'],
            ['maLHP' => 'LHP09', 'maSV' => 'SV09', 'maPT' => 'PT09'],
            ['maLHP' => 'LHP10', 'maSV' => 'SV10', 'maPT' => 'PT10'],
        ]);
    }
}
