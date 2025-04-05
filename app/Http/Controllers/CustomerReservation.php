<?php

namespace App\Http\Controllers;
use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\Reservation;
use App\Models\Waitlist;
use Illuminate\Support\Facades\Auth;
use App\Models\Table;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerReservation extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
    //    $this->middleware('auth');
    //    $this->middleware('permission:create-reservation|edit-reservation|delete-reservation', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-reservation', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-reservation', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-reservation', ['only' => ['destroy']]);
     }
     public function index(Request $request)
     {


         $message = "";
         return view('welcome',['message' =>$message]);
     }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View
    { try {
        //Reservation::create($request->all());
         if (Auth::user()) {

         $guestupdate = Table::where('reserved', '=', 0)->first();
         $request->input('firstname');
          $request->input('lastname');
         $request->input('preferredfood');
         $request->input('date');
         $request->input('time');
         $request->input('phone');
         $request->input('noofpersons');
         $request->input('payment');
         if($guestupdate!==null) {

            $guestupdate->fill([

                'reserved'=> '1',


              ])->save();
              Reservation::create( [
                'firstname' => $request->firstname,
                  'lastname'=> $request->lastname,
                  'email'=>$request->user()->email ,
                  'noofperson'=> $request->noofpersons,
                  'date'=>$request->date,
                  'time'=>$request->time,
                  'phone'=>$request->phone,
                  'withfoodornot'=>$request->preferredfood,
                  'paymenttype'=>$request->payment]
                )->save();
                $message = "Thank you! you successful  done";
                return view('welcome',[ 'message'=>$message]);
            }
            else{
                Waitlist::create( [
                    'firstname' => $request->firstname,
                      'lastname'=> $request->lastname,
                      'email'=>$request->user()->email ,
                      'noofperson'=> $request->noofpersons,
                      'date'=>$request->date,
                      'time'=>$request->time,
                      'phone'=>$request->phone,
                      'withfoodornot'=>$request->preferredfood,
                      'paymenttype'=>$request->payment]
                    )->save();
                $message = "Sorry! your order on waitlist";
                return view('welcome',[ 'message'=>$message]);

            }

        }
        else{
        $message = "";
        return view('login',);
    }}

catch (Exception $exceptions) {
    return view('login',);
}


}}