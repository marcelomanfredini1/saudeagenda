<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        // Outros campos do paciente
    ];

    // Relacionamento com os agendamentos
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
