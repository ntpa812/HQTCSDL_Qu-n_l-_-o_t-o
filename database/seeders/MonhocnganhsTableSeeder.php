<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MonhocnganhsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $monhocIds = DB::table('monhocs')->pluck('maMH')->toArray(); 
        $nganhIds = DB::table('nganhs')->pluck('maNganh')->toArray(); 

        foreach ($monhocIds as $maMH) {
            foreach (range(1, 3) as $index) { 
                DB::table('monhocnganhs')->insertOrIgnore([
                    'maMH' => $maMH,
                    'maNganh' => $faker->randomElement($nganhIds),
                ]);
            }
        }
    }
}
