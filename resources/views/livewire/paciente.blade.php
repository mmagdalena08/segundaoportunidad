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
                 
            </tr>
        </thead>
        <tbody>
            @foreach ($je as $item)
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
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>