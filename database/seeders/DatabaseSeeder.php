<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            KhoasTableSeeder::class,
            NganhsTableSeeder::class,
            MonhocsTableSeeder::class, 
            MonhocnganhsTableSeeder::class,
            SinhviensTableSeeder::class,
            GiangviensTableSeeder::class,
            NhanviensTableSeeder::class,
            KyhocsTableSeeder::class,
            LophocphansTableSeeder::class,
            LichthisTableSeeder::class,
            DanhsachsinhviensTableSeeder::class,
            LichthisinhviensTableSeeder::class,
        ]);
    }
}
