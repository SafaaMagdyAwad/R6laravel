<?php

namespace Database\Seeders;

use App\Models\Classe;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Classe::factory()->create([
            'className'=>'demo class',
            'capacity'=>"10",
            'price'=>'112.23',
            'isFulled'=>Carbon::now(),
            'timeFrom'=> Carbon::now()->addHours(4),
        ]);
    }
}
