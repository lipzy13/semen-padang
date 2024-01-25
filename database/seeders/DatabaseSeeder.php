<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alat;
use App\Models\Area;
use App\Models\Route;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Area::create([
            'id'=>1,
            'nama_area' => 'RM'
        ]);
        Area::create([
            'id'=>2,
            'nama_area' => 'Auto'
        ]);
        Area::create([
            'id'=>3,
            'nama_area' => 'KCM'
        ]);
        Area::create([
            'id'=>4,
            'nama_area' => 'FM'
        ]);

        Route::create([
            'id'=>1,
            'nama_route'=>'Route A1-1'
        ]);
        Route::create([
            'id'=>2,
            'nama_route'=>'Route A1-2'
        ]);
        Route::create([
            'id'=>3,
            'nama_route'=>'Route A1-3'
        ]);
        Route::create([
            'id'=>4,
            'nama_route'=>'Route A1-4'
        ]);
        Route::create([
            'id'=>5,
            'nama_route'=>'Route A1-5'
        ]);
        Alat::create([
            'id'=>1,
            'kode_alat'=>'6J1P48A1A01'
        ]);
        Alat::create([
            'id'=>2,
            'kode_alat'=>'6W1A05A01'
        ]);
        Alat::create([
            'id'=>3,
            'kode_alat'=>'6W1W33A01U41'
        ]);
        Alat::create([
            'id'=>4,
            'kode_alat'=>'6W1W34A01U41'
        ]);
    }
}
