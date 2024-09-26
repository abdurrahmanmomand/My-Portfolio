<?php

namespace Database\Seeders;

use App\Models\Information;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ProfielSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'profile_image'=>'image/5pDV2maUoqWDNXM8fWy7FzbHle1wlGFGNu3pagFG.jpg',
        'bg_image'=>'image/6yVoDvYjNJ7TKS5daAP1aNhFO4GCqkEHGoX74j7D.jpg',
        'fullname'=>'Abdull Rahman',
        'about'=>'Web Developer',
        'company'=>'Zerk Solution',
        'job'=>json_encode(["webdeveloper","webdessiner"]),
        'country'=>'pakistan',
        'address'=>'pabbi',
        'phone'=>'03185893516',
        'email'=>'khan@gmail.com',
        'twiter'=>'www.twitter.com',
        'facebook'=>'www.facebook.com',
        'instagram'=>'www.instagram.com',
        'linkedin'=>'www.linkedin.com',
        'user_id'=>1,
        ]);
    }
}
