<?php

namespace App\Http\Controllers;

use App\Models\MotorBaherindo;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = MotorBaherindo::all();
        return view('motor.create', compact('motor')); // optional
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('motor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validateData = $request->validate([
        'nama_motor' => 'required|string',
        'harga_motor' => 'required|numeric',
        'km_motor' => 'required|integer',
        'tahun_motor' => 'required|integer',
        'gambar_motor' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

 if($request->hasFile('gambar_motor')) {
    $path = $request->file('gambar_motor')->store('motorbaherindo', 'public');
    $validateData['gambar_motor'] = $path; 

    }

    MotorBaherindo::create( $validateData );

    return redirect('/');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motor = MotorBaherindo::findOrFail($id);
        return view('motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motor = MotorBaherindo::findOrFail($id);
        return view('motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motor = MotorBaherindo::findOrFail($id);

        $validateData = $request->validate([
            'nama_motor' => 'required|string',
            'harga_motor' => 'required|numeric',
            'km_motor' => 'required|integer',
            'tahun_motor' => 'required|integer',
            'gambar_motor' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_motor')) {
            $path = $request->file('gambar_motor')->store('motorbaherindo', 'public');
            $validateData['gambar_motor'] = $path;
        }

        $motor->update($validateData);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motor = MotorBaherindo::findOrFail($id);
        $motor->delete();
        return redirect('/');
    }
}
