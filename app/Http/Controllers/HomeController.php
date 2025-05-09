<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{
    public function index()
    { 
        #$rooms=Room::all();
        return view('home');
    }
    public function aboutus()
    {
        return view('aboutus');
    }

    public function huts()
    {
        return view('huts');
    }
    
    public function contactus(){
        return view('contactus');
    }
}
