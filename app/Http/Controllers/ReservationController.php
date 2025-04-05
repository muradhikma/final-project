<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
    //    $this->middleware('permission:create-reservation|edit-reservation|delete-reservation', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-reservation', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-reservation', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-reservation', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('reservation.index', [
            'reservation' => Reservation::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request): RedirectResponse
    {
        Reservation::create($request->all());
        return redirect()->route('reservation.index')
                ->withSuccess('New reservation is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation): View
    {
        return view('reservation.show', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation): View
    {
        return view('reservation.edit', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation): RedirectResponse
    {
        $reservation->update($request->all());
        return redirect()->back()
                ->withSuccess('reservation is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation): RedirectResponse
    {
        $reservation->delete();
        return redirect()->route('reservation.index')
                ->withSuccess('reservation is deleted successfully.');
    }
}