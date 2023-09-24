<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'appointment_datetime',
        // Outros campos do agendamento
    ];

    // Relacionamento com o médico
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    // Relacionamento com o paciente
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
