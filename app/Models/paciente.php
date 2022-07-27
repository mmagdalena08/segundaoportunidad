<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;
    protected $table= 'paciente';
    public $timestamps =false;
    public $fillable = ['nombre','apellido','cedula','id_sintoma'];
}
