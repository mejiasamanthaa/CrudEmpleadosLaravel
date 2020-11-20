@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{url('empleados/create')}}" class="btn btn-success">Agregar Empleado </a>
</br>
</br>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>SalarioDolares</th>
            <th>SalarioPesos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->codigo}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->salarioDolares}}</td>
            <td>{{$empleado->salarioPesos}}</td>
            <td>{{$empleado->correo}}</td>
            <td>
             <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado->id.'/edit') }}" >Editar</a>
             
            <form method="post" action="{{ url('/empleados/'.$empleado->id) }}" style="display:inline">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm ('¿Estas seguro que deseas eliminar?')">Eliminar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
