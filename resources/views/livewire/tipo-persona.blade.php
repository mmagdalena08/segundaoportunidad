<div>
    {{-- <div>
        <form action="">
           <input type="text" wire:model="buscar">
           <a href="{{url('jugador-pdf'.$buscar)}}">reporte de jugador</a>
     </div> --}}
    <table >
        <thead  >
            <tr  >
                <td>
                   nombre 
                </td>
                <td>
                    apellido
                 </td>
                 <td>
                    cedula
                 </td>
                 <td>
                   tipo de persona
                 </td>
                 
            </tr>
        </thead>
        <tbody>
            @foreach ($jas $item)
                <tr>
                    <td>
                        {{$item->nombre}}
                    </td>
                    <td>
                        {{$item->apellido}}
                    </td>
                    <td>
                        {{$item->cedula}}
                    </td>
                    <td>
                        {{$item->tipo_persona}}
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>