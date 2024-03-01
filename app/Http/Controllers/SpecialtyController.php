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

    private function performvalidation(Request $request)
    {
        $rules = ['name' => 'required|min:3', 'description' => 'required'];
        $this->validate($request, $rules);
    }
    public function store(Request $request)
    {

        $this->performvalidation($request);
        $specialty = new Specialty;
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();
        $notification = 'The specialty has been registered succesfully';
        return redirect('/specialties')->with(compact('notification'));
    }

    public function edit(Specialty $specialty)
    {

        return view('specialties.edit', compact('specialty'));
    }
    public function update(Request $request, Specialty $specialty)
    {
        $this->performvalidation($request);


        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        $notification = 'The specialty has been edited succesfully';
        return redirect('/specialties')->with(compact('notification'));
    }

    public function destroy(Specialty $specialty)
    {
        $deletedname = $specialty->name;
        $specialty->delete();
        $deleted = 'The specialty ' . $deletedname . ' has been deleted succesfully';
        return redirect('/specialties')->with(compact('deleted'));
    }
}
