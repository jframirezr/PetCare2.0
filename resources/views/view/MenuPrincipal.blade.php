@extends('layouts.app')

@section('title', 'Registro De Mascota')

@section('head')
   

   @endsection

@section('body')

    <div class="container" style="margin-left:570px;">
    <p><h1><i>PetCare</i></h1></p>
    </div>
    <div class="container" style="width: 18rem; margin-top: 20px">
    <img src="{{ asset('imagenes/images.jpg') }}" class="card-img-top" alt="">
    </div>
    <div class="row" style="margin-top: 20px;">
  	<div class="col-2" style="margin-left: 520px;">
    <a href="Mascotas/create"><button class="btn-primary">Registrar mascota</button></a>
   	</div>
   	<div class="col-2">
    <a href="Mascotas"><button class="btn-primary">Ver datos</button></a>
   	</div>
   </div>

@endsection