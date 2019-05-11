@extends('layouts.app')

@section('title', 'Mostrar Datos')

@section('body')
 
 @foreach($mascotas as $mascota)

<div class="container" style="margin-top: 50px;">

<div class="row">
<div class="col">
	<a href="Mascotas/{{$mascota->id}}"><button class="btn-primary">Ver datos mascota con id {{$mascota->id}}</button></a>
</div>
<div class="col">
<form method="POST" action="Mascotas/{{$mascota->id}}">
 @csrf
@method('DELETE')
 <button type="submit" class="btn-danger">Eliminar mascota con id {{$mascota->id}}</button>
</form>
</div>
</div>

</div>
@endforeach

@endsection 
