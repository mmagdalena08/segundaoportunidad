<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sintoma extends Model
{
    use HasFactory;
    protected $table= 'sintoma';
    public $timestamps =false;
    public $fillable = ['tipo sintoma'];
}
