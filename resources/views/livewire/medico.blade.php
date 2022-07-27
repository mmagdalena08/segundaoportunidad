<div>
    
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
                   tipo de sintoma
                 </td>
                 <td>
                    nombre del medico
                  </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($j as $item)
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
                        {{$item->tp}}
                    </td>
                    <td>
                        {{$item->nombre}} {{$item->apellido}}
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
