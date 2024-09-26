<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section = Section::first();
        $user = User::first();
        Skill::create([
          'title'=> 'html',
        'parcentage'=>80,
        'numbers'=>80,
        'color'=>'bg-success',
        'user_id'=>$user->id,
        'section_id'=>$section->id,
        'created_at'=>now(),
        'updated_at'=>now(),
        ]);
    }
}
