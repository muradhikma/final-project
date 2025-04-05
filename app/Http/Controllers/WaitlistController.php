<?php

namespace App\Http\Controllers;

use App\Models\Waitlist;
use App\Http\Requests\StoreWaitlistRequest;
use App\Http\Requests\UpdateWaitlistRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class WaitlistController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
    //    $this->middleware('permission:create-waitlist|edit-waitlist|delete-waitlist', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-waitlist', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-waitlist', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-waitlist', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('waitlist.index', [
            'waitlist' => Waitlist::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('waitlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWaitlistRequest $request): RedirectResponse
    {
        Waitlist::create($request->all());
        return redirect()->route('waitlist.index')
                ->withSuccess('New waitlist is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Waitlist $waitlist): View
    {
        return view('waitlist.show', [
            'waitlist' => $waitlist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Waitlist $waitlist): View
    {
        return view('waitlist.edit', [
            'waitlist' => $waitlist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWaitlistRequest $request, Waitlist $waitlist): RedirectResponse
    {
        $waitlist->update($request->all());
        return redirect()->back()
                ->withSuccess('waitlist is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waitlist $waitlist): RedirectResponse
    {
        $waitlist->delete();
        return redirect()->route('waitlist.index')
                ->withSuccess('waitlist is deleted successfully.');
    }
}