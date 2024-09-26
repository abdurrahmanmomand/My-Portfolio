<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $user = User::first();
        if (!$user) {
            $user = User::create([
                'name' => 'Default User',
                'email' => 'defaultuser@example.com',
                'email_verified_at'=> now(),
                'password' => bcrypt('password'),
            ]);
        }

        Section::create(
            ['title'=>'skills',
             'about'=>'information',
             's_name'=>'skills',
              'user_id'=>$user->id,


              ]
        );
        Section::create(
            ['title'=>'resume',
             'about'=>'information',
             's_name'=>'resume',
              'user_id'=>$user->id,


              ]
        );
    }
}
