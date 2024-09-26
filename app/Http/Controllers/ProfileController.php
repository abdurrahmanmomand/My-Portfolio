<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;

class ProfileController extends Controller
{
    public function index(){
        return view('components.profilepage');
    }




    public function changepassword(Request $request)
{

    $request->validate([
        'password' => 'required|string',
        'newpassword' => 'required|string|confirmed|min:8',
    ]);

    $user = Auth::user();

    if (Hash::check($request->password, $user->password)) {
        User::where('email',Auth::user()->email)->update([
            'password' => Hash::make($request->newpassword),
        ]);
    } else {
        return back()->withErrors(['password' => 'Current password is incorrect.']);
    }

    return back()->with('success', 'Password changed successfully.');
}






    public function store(Request $request){


        $data = [
            'fullname'=>$request->fullname,
            'about'=>$request->about,
            'company'=>$request->company,
            'job'=>$request->job,
            'country'=>$request->country,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'twiter'=>$request->twitter,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'user_id'=>Auth::user()->id
        ];

        if($request->bg_image){
            $data['bg_image'] = $request->bg_image->store('image','public');

        }

        if($request->image){
            $data['profile_image'] = $request->image->store('image','public');

        }


        $profile= Profile::updateOrCreate(
            ['user_id'=>Auth::user()->id],
            $data

    );
        return back();

    }
}

