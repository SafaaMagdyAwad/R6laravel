<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'=>'Test User',
            'email'=>'test@example.com',
            'password'=>bcrypt('123'),
        ]);

        $this->call([
            ClassSeeder::class,
            
        ]);

        //modelName::factory(number)->create();      لو كان في واحد تاني انا عملله create بنفسي 
    }
}
