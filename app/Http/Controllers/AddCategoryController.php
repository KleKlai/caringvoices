<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addcategory = AddCategory::latest()->get();

        return view('welcome', compact('addcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'body'   => 'required',
            'name'      => 'nullable'
        ]);

        $addcategory = AddCategory::create($request->all());

        return redirect()->route('summary', $addcategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddCategory  $addcategory
     * @return \Illuminate\Http\Response
     */
    public function show(AddCategory $addcategory)
    {
        return view('summary', compact('addcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddCategory  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(AddCategory $addcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddCategory $addcategor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddCategory  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddCategory $addcategory)
    {
        //
    }
}
