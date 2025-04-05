<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
    //    $this->middleware('permission:create-payment|edit-payment|delete-payment', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-payment', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-payment', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-payment', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('payment.index', [
            'payment' => Payment::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request): RedirectResponse
    {
        Payment::create($request->all());
        return redirect()->route('payment.index')
                ->withSuccess('New payment is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment): View
    {
        return view('products.show', [
            'payment' => $payment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment): View
    {
        return view('payment.edit', [
            'payment' => $payment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment): RedirectResponse
    {
        $payment->update($request->all());
        return redirect()->back()
                ->withSuccess('payment is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment): RedirectResponse
    {
        $payment->delete();
        return redirect()->route('payment.index')
                ->withSuccess('payment is deleted successfully.');
    }
}