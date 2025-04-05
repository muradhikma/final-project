<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

use Carbon\Carbon;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $startDate = '2022-01-01';
        $endDate = '2024-04-19';
        //$booking = Booking::all();
        $currentTime = Carbon::now();

        $message="";
        //         }
        return view('welcome',['message' =>$message]);
    }
}