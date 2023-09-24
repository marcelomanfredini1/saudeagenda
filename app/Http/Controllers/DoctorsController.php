<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors,email',
            'phone' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('doctors.create')
                ->withErrors($validator)
                ->withInput();
        }

        Doctor::create($request->all());

        return redirect()->route('doctors.index')->with('success', 'Médico cadastrado com sucesso.');
    }

    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors,email,' . $doctor->id,
            'phone' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('doctors.edit', $doctor->id)
                ->withErrors($validator)
                ->withInput();
        }

        $doctor->update($request->all());

        return redirect()->route('doctors.index')->with('success', 'Médico atualizado com sucesso.');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Médico excluído com sucesso.');
    }
}
