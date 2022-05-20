<?php

namespace Database\Seeders;

use App\Models\Tema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tema::create(['name' => 'Tips']);
        Tema::create(['name' => 'Impuestos']);
        Tema::create(['name' => 'Cocina']);
        Tema::create(['name' => 'Mecanica']);
        Tema::create(['name' => 'Finanzas']);
        Tema::create(['name' => 'Hogar']);
    }
}
