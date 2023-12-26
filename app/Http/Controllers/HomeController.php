<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('component.dashboard');
    }



    public function created_trip()
    {
        return view('component.createdTrip');
    }

    public function profile()
    {
        return view('component.profile');
    }
    public function contact()
    {
        return view('component.contact');
    }
    public function about()
    {
        return view('component.about');
    }

    public function showProfile()
{
    $user = User::all(); // Get the currently authenticated user

    // If you have a Trip model and the user has a related trip
    //$trip = $user->trip;

    // Pass the variables to the view
    return view('component.profile', ['user' => $user]);
}



}
