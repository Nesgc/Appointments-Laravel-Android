<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Specialty extends Controller
{
    public function index()
    {
        return view('specialties.index');
    }

    public function create()
    {
        return view('specialties.create');
    }

    public function store(Request $request)
    {
        $specialty = new Specialty;
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        return redirect('/specialties');
    }
}
