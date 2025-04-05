<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Room;
// use App\Models\EventBooking;
// use App\Models\Feedback;
use App\Models\User;
use App\Models\CheckInandCheckOut;
//use App\Models\Payment;


class DashboardController extends Controller
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
    public function index(
    //     Room $room,EventBooking $eventBooking,
    // Feedback $feedback, CheckInandCheckOut $checkInandCheckOut,
    // User $user,Payment $payment
    ){
    // {     $totallroom = Room::count();
    //     $feedback = Feedback::count();
    //     $user = User::count();
    //     $checkinandcheckout = CheckInandCheckOut::count();
    //     //$checkinandcheckout = CheckInandCheckOut::count();
    //     $eventBooking = EventBooking::count();
    //     $total =  $totallroom;
    //     //'room' => Room::latest()->paginate(3);
        return view('dashboard.index-2',[]);
        // ->with(compact('total','feedback',
        // 'user' ,'checkinandcheckout','eventBooking',));
        // // return view('home',[
        //     'products' => Product::latest()->paginate(3)
        // ]);

    }
}
