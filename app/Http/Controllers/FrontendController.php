<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Experience;
use App\Models\Information;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        $experiences = Experience::all();
        $user = User::with("education")->first();
        $educations = $user ? $user->education : collect();
       $sections = Section::where('s_name','skills')->first();
       $protfolio = Section::where('s_name','portfolio')->first();
       $service= Section::where('s_name','services')->first();
       $testimonial= Section::where('s_name','testimonials')->first();
       $contact= Section::where('s_name','contact')->first();

       $information = Information::first();
    $resume = Section::where('s_name','resume')->first();
    $profile = Profile::first();
    $skills = Skill::all();
     $services = Service::all();
     $testimonials = Testimonial::all();

       $information = Information::first();
    return view("welcome",compact("skills","contact","protfolio","testimonial","services","service","testimonials","sections","resume","educations","experiences","categories","profile","information"));
   }
}
