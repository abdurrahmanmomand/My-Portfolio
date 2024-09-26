<?php

namespace Database\Seeders;
use App\Models\Education;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Education::create([
            "degree"=>"bs computerscience",
      "start_date"=>"2018/03/01",
      "end_date"=>"2022/01/01",
      "institute"=>"sarhad university , peshawer",
      "about"=>" prictical work three years",
      "user_id" => 1,
        ]);
         Education::create([
            "degree"=>"diploma of information technology",
      "start_date"=>"2018/03/01",
      "end_date"=>"2019/01/01",
      "institute"=>"levelup skills academy , pabbi",
      "about"=>" prictical work one year",
      "user_id" => 1,
        ]);
    }
}
