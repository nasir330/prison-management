<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use App\Models\Staffs;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StafsController extends Controller
{
    public function index()
    {
        
        $stafs = User::whereNot('id',1)->paginate(10);       
        return view('pages.stafs.index',['stafs' => $stafs]);
    }
    //add staf create form
    public function create()
    {    
        $userTypes = UserType::whereNot('id',1)->paginate(10);    
        return view('pages.stafs.create',['userTypes'=> $userTypes]);
    }
    //Store staf data and user info
    public function store(Request $request)
    {
       // Generate a random password
        $autoPassword = Str::random(8);
        // Save the user's photo
        $photo = $request->file('photo');
        $photo_name = $photo->getClientOriginalName();
        $photo_storage = $photo->storeAs("public/uploads", $photo_name);
        $photo_path = 'storage/uploads/'.$photo_name;
        // Create the user
        $user = User::create([
            'user_type' => $request->user_type,
            'name' => $request->first_name. ' '.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($autoPassword),
            'photo' => $photo_path,
        ]);
          // Create the staff
        $staff = Staffs::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'job_role' => $request->job_role,
            'gender' => $request->gender,
            'join_date' => $request->join_date,
        ]);
        
        // Send the login details to the user's email
        Mail::send('notification.newuser', ['user' => $user, 'password' => $autoPassword], function($message) use ($user) {
            $message->to($user->email)->subject('Your account has been created successfully');
        });
        
        // Flash a success message and redirect back
        session()->flash('success', 'Staff created successfully..!!');
        return redirect()->back();
    }
}