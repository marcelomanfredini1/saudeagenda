<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialty',
        'email',
        'phone',
        // Outros campos do médico
    ];

    // Relacionamento com os agendamentos
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
