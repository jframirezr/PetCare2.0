@extends('layouts.app')

@section('title', 'Registro De Mascota')

@section('head')
    <!--importamos el frame de bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('body')

<div class="container" style="width: 18rem; margin-top: 20px">
 <img src="{{ asset('imagenes/images.jpg') }}" class="card-img-top" alt="">
</div>

<form method="POST" action="/Mascotas">
	@csrf
  <div class="row container" style="margin-top: 50px; margin-left: 50px">
    <div class="col">
      <input type="text" name="Nombre" class="form-control" placeholder="Nombre de la mascota">
    </div>
    <div class="col">
      <input type="text" name="Raza" class="form-control" placeholder="Raza">
    </div>
    </div>
    <div class="row container" style="margin-left: 50px; margin-top: 20px">
    <div class="col">
      <input type="text" name="Peso" class="form-control" placeholder="Peso en kilogramos">
    </div>
    <div class="col">
      <input type="text" name="Edad" class="form-control" placeholder="Edad en meses">
    </div>
    </div>
     <button style="margin-top: 20px; margin-left: 80px;"type="submit" class="btn-primary">Guardar</button>
    </form>

@endsection