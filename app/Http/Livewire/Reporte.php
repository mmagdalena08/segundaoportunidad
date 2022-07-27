<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\paciente;
use App\Models\sintoma;
use App\Models\medico;
use App\Models\tipo_persona;
use PDF;
use Illuminate\Support\Facades\DB;

class Reporte extends Component
{
    protected $queryString = ['buscar'];
    public $buscar;

    public function listpaciente($buscar)
    {
       
         $je=DB::table('paciente')
        ->join('sintoma','paciente.id_sintoma','=','sintoma.id')
        ->select('paciente.*','sintoma.tipo_sintoma as tp')
        -> where( 'sintoma.tipo_sintoma',$buscar )->get();

        return PDF::loadView('livewire.paciente', compact('je'))
        ->stream('archivo.pdf');
    }

   
    public function listdatos()
    {
       
         $j=DB::table('paciente')
        ->join('sintoma','paciente.id_sintoma','=','sintoma.id')
        ->select('paciente.*','sintoma.tipo_sintoma as tp')
        ->get();

        $j=DB::table('medico')
        ->join('paciente','medico.id_paciente','=','paciente.id')
        ->select('medico.*')
        ->get();

        return PDF::loadView('livewire.medico', compact('j'))
        ->stream('archivo.pdf');
    }

    
    public function render()
    {
        return view('livewire.reporte');
    }
    
}
