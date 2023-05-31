@extends('layouts.app')
@section('content')
<div class="container">
<div class="d-flex col-md-12 mt-5 mb-5">
    <div class="create-card col-md-4 col-sm-12">
        <h3 class="pt-3 text-center">Información personal</h3>
        <div class="text-center">
            <div class="img-card">
                <img class="" src="{{asset('img/User1.jpg')}}" alt="">
            </div>
        </div>
        <div class="">
            <h5 class="mt-3 mb-4">Documento:</h5>
            <h5>Nombre:</h5>
        </div>
        <h5 class="pt-4">Descripción:</h5>
        <p class="text-justify mb-4"></p>
        <h4 class="pt-3 text-center">Información de contacto</h4>
        <div class="">
            <h5>tel</h5>
            <h5>cel</h5>
        </div>
        <h5 class="">correo personal</h5>
        <h5 class="">institucional</h5>
    </div>
    <div class=" col-md-4 p-4">
        <h3 class="text-center">Información académica</h3>
        <div class="">
            <h5 class="">Título</h5>
            <h5 class="">Institución</h5>
            <hr>
        </div>
        <h3 class="pt-3 mt-5 text-center">Información profesional</h3>
        <div class="">
            <h5 class="w-25 me-5">Cargo</h5>
            <h5 class="me-5">Empresa</h5>
            <h5 class="w-25 me-5">Tiempo</h5>
            <hr>
        </div>
    </div>
    <div class="create-card col-md-4 p-4">
        <h3 class="text-center">Rol a desempeñar</h3>
        <h5 class="">Área especializada</h5>
        <h5 class="">Curso 1</h5>
        <hr>
        <h3 class="text-center">Horario disponible</h3>
        <div class="">
            <h5 class="">dias</h5>
        </div>
        <div class="d-flex ">
            <h5 class="me-5">Inicio 8:00am</h5>
            <h5 class="me-5">Fin 12:00am</h5>
        </div>
        <div class="text-center mb-3">
            <a name="" id="" class="px-5 btn btn-primary mt-5" href="#" role="button">Editar</a>
        </div>
    </div>
</div>
</div>
@endsection