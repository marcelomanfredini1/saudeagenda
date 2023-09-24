<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;

class AppointmentsController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        // dd($appointments['id']);
        // $teste  = $appointments->appointment_datetime = date('d/m/Y H:i:s', strtotime($appointments->appointment_datetime));


        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.create', compact('doctors', 'patients'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'required|integer',
            'patient_id' => 'required|integer',
            'appointment_datetime' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('appointments.create')
                ->withErrors($validator)
                ->withInput();
        }

        Appointment::create($request->all());

        return redirect()->route('appointments.index')->with('success', 'Consulta cadastrada com sucesso.');
    }

    public function show(Appointment $appointment)
    {
        //dd($appointment->id);
        // $doctorName = Doctor::where('id', $appointment->doctor_id)->first();
        // //dd($doctorName);
        // $patientName = Patient::where('id', $appointment->patient_id)->first();
    return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.edit', compact('appointment', 'doctors', 'patients'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'required|integer',
            'patient_id' => 'required|integer',
            'appointment_datetime' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('appointments.edit', $appointment->id)
                ->withErrors($validator)
                ->withInput();
        }

        $appointment->update($request->all());

        return redirect()->route('appointments.index')->with('success', 'Consulta atualizada com sucesso.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Consulta excluída com sucesso.');
    }
}
