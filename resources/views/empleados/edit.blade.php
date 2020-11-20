@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/empleados/'.$empleado->id) }}" method="post" enctype="">
    {{csrf_field()}}

    {{method_field('PATCH')}}

    <label for="codigo">{{'Código'}}</label>
    <input type="text" name="codigo" id="codigo" value="{{$empleado->codigo}}">
    </br>
    <label for="nombre">{{'Nombre'}}</label>
    <input type="alfabet" name="nombre" id="nombre" value="{{$empleado->nombre}}">
    </br>
    <label for="salarioDolares">{{'Salario Dolares'}}</label>
    <input type="number" name="salarioDolares" id="salarioDolares" value="{{$empleado->salarioDolares}}" min="1">
    </br>
    <label for="salarioPesos">{{'Salario Pesos'}}</label>
    <input type="number" name="salarioPesos" id="salarioPesos" value="{{$empleado->salarioPesos}}" min="1">
    </br>
    <label for="correo">{{'Correo'}}</label>
    <input type="email" name="correo" id="correo" value="{{$empleado->correo}}" placeholder="your@email.com">
    </br>
    <input type="submit" value="Actualizar">
    <a href="{{url('empleados')}}">Regresar</a>
</form>
</div>
@endsection
