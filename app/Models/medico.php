<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;
    protected $table= 'medico';
    public $timestamps =false;
    public $fillable = ['nombre','apellido','cedula','especialidad','edad','id_paciente'];
}
