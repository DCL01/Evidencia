@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{url('empleado/create')}}" class="btn btn-success">Agregar  super heroe<a/>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Foto</th>
            <th>precio</th>
            <th>cantidad</th>
            <th>Acciones</th>
            
        </tr>
    </thead>


    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Descripcion }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->FOTO}}" with="100" akt="">
                
            
            </td>

            <td>{{ $empleado->Informacion }}</td>
            <td>
            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
            Editar
            </a>    
             |   
            
            <form action="{{url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm ('Quieres borrar?')" value="Borrar">

            </form>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>
</div/>
@endsection