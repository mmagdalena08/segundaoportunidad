<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_persona extends Model
{
    use HasFactory;
    protected $table= 'tipo_persona';
    public $timestamps =false;
    public $fillable = ['tipo_persona','id_paciente','id_medico'];
}
