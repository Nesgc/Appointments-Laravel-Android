<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{

    public function index()
    {
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }

    public function create()
    {
        return view('specialties.create');
    }

    public function store(Request $request)
    {
        $rules = ['name' => 'required|min:3', 'description' => 'required'];
        $this->validate($request, $rules);

        $specialty = new Specialty;
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        return redirect('/specialties');
    }

    public function edit(Specialty $specialty)
    {

        return view('specialties.edit', compact('specialty'));
    }
    public function update(Request $request, Specialty $specialty)
    {
        $rules = ['name' => 'required|min:3', 'description' => 'required'];
        $this->validate($request, $rules);

        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        return redirect('/specialties');
    }

    public function destroy(Specialty $specialty)
    {
        $specialty->delete();
        return redirect('/specialties');
    }
}
