<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
        [ 'id' => 1 , 'name'  => 'Motor Yamaha', 'price' => 10000000, 'tahun' => '2021', 'km' => '10000 KM', 'img' => '/asset/yamaha.WEBP'],
        [ 'id' => 2 , 'name'  => 'Motor Beat', 'price' => 12000000, 'tahun' => '2024', 'km' => '3000 KM', 'img' => '/asset/beat.AVIF'],
        [ 'id' => 3 , 'name'  => 'Motor Scoopy', 'price' => 11000000, 'tahun' => '2020', 'km' => '4000 KM', 'img' => '/asset/scoopy.AVIF'],
        [ 'id' => 4 , 'name'  => 'Motor Kawasaki', 'price' => 19000000, 'tahun' => '2022', 'km' => '5000 KM', 'img' => '/asset/kawasaki.jpg'],
        [ 'id' => 5 , 'name'  => 'Motor Yamaha', 'price' => 12900000, 'tahun' => '2023', 'km' => '7000 KM', 'img' => '/asset/yamaha.WEBP'],
        [ 'id' => 6 , 'name'  => 'Motor Ducati', 'price' => 12900000, 'tahun' => '2023', 'km' => '8000 KM', 'img' => '/asset/ducati.WEBP'],
        [ 'id' => 7 , 'name'  => 'Motor Aerox', 'price' => 12900000, 'tahun' => '2023', 'km' => '12000 KM', 'img' => '/asset/aerox.WEBP'],
        [ 'id' => 8 , 'name'  => 'Motor Vespa', 'price' => 12900000, 'tahun' => '2023', 'km' => '7500 KM', 'img' => '/asset/vespa.WEBP'],
        ];
            
        return view("welcome", compact ('motor'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
