<?php

namespace App\Http\Controllers;

use App\Models\guzzleSwipper;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuzzleAndSwiperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function swiperDisplays(){
        // $guzzleSwippers = guzzleSwipper::all();
        // return view('guzzleSwiper.index', compact('guzzleSwippers'));
        return Inertia::render("Newproducts");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(guzzleSwipper $guzzleSwipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guzzleSwipper $guzzleSwipper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guzzleSwipper $guzzleSwipper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guzzleSwipper $guzzleSwipper)
    {
        //
    }
}
