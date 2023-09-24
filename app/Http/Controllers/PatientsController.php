<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:patients|email',
            'phone' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('patients.create')
                ->withErrors($validator)
                ->withInput();
        }

        $patient = new Patient([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Paciente cadastrado com sucesso.');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            //'email' => 'required|string|max:255, email,' . $patient->email,
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('patients')->ignore($patient->id),
            ],
            'phone' => 'required|string|max:255',
        ]);

        //dd($validator));
        if ($validator->fails()) {
            //d($validator->errors());
            return redirect()
                ->route('patients.edit', $patient->id)
                ->withErrors($validator)
                ->withInput();
        }

        $patient->name = $request->input('name');
        $patient->email = $request->input('email');
        $patient->phone = $request->input('phone');

        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Paciente atualizado com sucesso.');
    }

    public function destroy(Patient $patient)
    {

        $patient->delete();

        return redirect()->route('patients.index')->with('success', 'Paciente excluído com sucesso.');
    }
}
