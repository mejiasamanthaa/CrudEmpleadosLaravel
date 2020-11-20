@extends('layouts.app')

@section('content')

<div class="container">

Sección para crear empleados

<form action="{{url('/empleados')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include ('empleados.form',['Modo'=>'crear'])

</form>
</div>
@endsection
