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
        $this->call([
            SectionSeeder::class
        ]);
        $this->call([
            EducationSeeder::class
        ]);
        User::factory()->create([
            'name' => 'Khan',
            'email' => 'khan@gmail.com',
            'password'=>'khankhan'
        ]);
    }
}
