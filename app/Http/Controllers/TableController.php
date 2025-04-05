<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TableController extends Controller
{
    /**
     * Instantiate a new ProductController instance.
     */
    public function __construct()
    {
       $this->middleware('auth');
    //    $this->middleware('permission:create-table|edit-table|delete-table', ['only' => ['index','show']]);
    //    $this->middleware('permission:create-table', ['only' => ['create','store']]);
    //    $this->middleware('permission:edit-table', ['only' => ['edit','update']]);
    //    $this->middleware('permission:delete-table', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('table.index', [
            'table' => Table::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTableRequest $request): RedirectResponse
    {
        Table::create($request->all());
        return redirect()->route('table.index')
                ->withSuccess('New table is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table): View
    {
        return view('table.show', [
            'table' => $table
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table): View
    {
        return view('table.edit', [
            'table' => $table
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTableRequest $request, Table $table): RedirectResponse
    {
        $table->update($request->all());
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table): RedirectResponse
    {
        $table->delete();
        return redirect()->route('table.index')
                ->withSuccess('Table is deleted successfully.');
    }
}