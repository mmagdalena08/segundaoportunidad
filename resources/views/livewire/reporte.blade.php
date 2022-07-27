<div>
    <div>
        <form action="">
           <input type="text" wire:model="buscar">
           <button><a href="{{url('paciente-pdf'.$buscar)}}">buscar paciente por sintomas </a></button>
     </div>
     <br>
     <br>
     <div>
           
           <button><a href="{{url('datos_paciente-pdf')}}">mostrar datos de pacientes </a></button>
     </div>
</div>
