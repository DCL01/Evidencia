Mostrar lista empleados

<a href="{{url('empleado/create')}}">Agregar  super heroe<a/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre Real</th>
            <th>Nombre super</th>
            <th>Foto</th>
            <th>Informacion</th>
            <th>Acciones</th>
            
        </tr>
    </thead>


    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->NombreReal }}</td>
            <td>{{ $empleado->NombreSuper }}</td>
            <td>
                <img src="{{asset('storage').'/'.$empleado->FOTO}}" with="100" akt="">
                
            
            </td>

            <td>{{ $empleado->Informacion }}</td>
            <td>
            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
            Editar
            </a>    
             |   
            
            <form action="{{url('/empleado/'.$empleado->id ) }}" method="post">
            @csrf 
            {{ method_field('DELETE')}}
            <input type="submit" onclick="return confirm ('Quieres borrar?')" value="Borrar">

            </form>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>