<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class FoodController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
    //    $this->middleware('permission:create-food|edit-food|delete-food', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-food', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-food', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-food', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('food.index', [
            'foods' => Food::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFoodRequest $request): RedirectResponse
    {
        Food::create($request->all());
        return redirect()->route('food.index')
                ->withSuccess('New food is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food): View
    {
        return view('food.show', [
            'food' => $food
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food): View
    {
        return view('food.edit', [
            'food' => $food
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodRequest $request, Food $food): RedirectResponse
    {
        $food->update($request->all());
        return redirect()->back()
                ->withSuccess('Food is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('food.index')
                ->withSuccess('Food is deleted successfully.');
    }
}