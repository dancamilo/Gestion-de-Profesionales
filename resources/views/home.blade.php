@extends('layouts.app')

@section('content')

<!-- Aquí se pueden agregar los elementos que se quieran mostrar en la sección del contenido de la página -->

<!-- Sección para mostrar las seis imágenes -->
<section id="six-images">
  <div class="row">
    <div class="col-md-4 col-12 mb-4">
       <img class="rounded img-footer" src="{{asset('img/Imgcursos.png')}}" alt="">
    </div>
    <div class="col-md-4 col-12 mb-4">
       <img class="rounded img-footer" src="{{asset('img/Imgprofesional.png')}}" alt="">
    </div>
    <div class="col-md-4 col-12 mb-4">
       <img class="rounded img-footer" src="{{asset('img/Imgaccesousuarios.png')}}" alt="">
    </div>
    <div class="col-md-4 col-12 mb-4">
       <img class="rounded img-footer" src="{{asset('img/Imgempresas.png')}}" alt="">
    </div>
    <div class="col-md-4 col-12 mb-4">
       <img class="rounded img-footer" src="{{asset('img/Imgcertificados.png')}}" alt="">
    </div>
    <div class="col-md-4 col-12 mb-4">
       <img class="rounded img-footer" src="{{asset('img/Imghistorial.png')}}" alt="">
    </div>
  </div>
</section>

@endsection
