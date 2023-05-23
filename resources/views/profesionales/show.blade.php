@extends('layouts.app')
@section('content')
<div class="d-flex w-100v mt-3">
    <div class="create-card w-25 me-4 p-4">
        <h3>Documento: 012345678</h3>
        <hr width="80%">
        <h4 class="pt-3">Información personal</h4>
        <div class="d-flex mt-3">
            <div class="img-card d-grid me-4">
                <img class="img-card" src="{{asset('img/User1.jpg')}}" alt="">
            </div>
            <div class="">
                <h5 class="mt-3 mb-4">Nombres</h5>
                <h5>Apellidos</h5>
            </div>
        </div>
        <h5 class="pt-4">Descripción:</h5>
        <p class="text-justify mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi ipsam eum aut maiores veniam iure? Optio, tempora!</p>
        <hr width="80%">
        <h4 class="pt-3">Información de contacto</h4>
        <div class="d-flex my-3">
            <h5 class="me-5">9008001</h5>
            <h5>(+57)320 452 3148</h5>
        </div>
        <h5 class="my-4 text-decoration-underline">nombre@gmail.com</h5>
        <h5 class="my-4 text-decoration-underline">nombre@empresa.com</h5>
    </div>
    <div class="w-25 me-2 p-4 align-items-center justify-content-center text-left">
        <h4 class="">Información académica</h4>
        <div class="d-flex my-3">
            <h5 class="me-5">Título</h5>
            <h5 class="ms-4">Institución</h5>
        </div>
        <div class="d-flex mb-3">
            <h5 class="me-5">Título</h5>
            <h5 class="ms-4">Institución</h5>
        </div>
        <div class="d-flex mb-3">
            <h5 class="me-5">Título</h5>
            <h5 class="ms-4">Institución</h5>
        </div>
        <div class="d-flex mb-3">
            <h5 class="me-5">Título</h5>
            <h5 class="ms-4">Institución</h5>
        </div>
        <hr class="mt-1" width="80%">
        <h4 class="pt-3">Información profesional</h4>
        <div class="d-flex my-3">
            <h5 class="w-25 me-5">Cargo</h5>
            <h5 class="me-5">Empresa</h5>
            <h5 class="w-25 me-5">Tiempo</h5>
        </div>
        <div class="d-flex my-3">
            <h5 class="w-25 me-5">Cargo</h5>
            <h5 class="me-5">Empresa</h5>
            <h5 class="w-25 me-5">Tiempo</h5>
        </div>
        <div class="d-flex my-3">
            <h5 class="w-25 me-5">Cargo</h5>
            <h5 class="me-5">Empresa</h5>
            <h5 class="w-25 me-5">Tiempo</h5>
        </div>
        <div class="d-flex my-3">
            <h5 class="w-25 me-5">Cargo</h5>
            <h5 class="me-5">Empresa</h5>
            <h5 class="w-25 me-5">Tiempo</h5>
        </div>
    </div>
    <div class="create-card w-25 me-4 p-4">
        <h4>Rol a desempeñar</h4>
        <h5 class="text-left">Área especializada</h5>
        <h5 class="text-left mt-3">Curso 1</h5>
        <h5 class="text-left mt-3">Curso 2</h5>
        <h5 class="text-left my-3">Curso 3</h5>
        <hr width="80%">
        <h4 class="pt-3">Horario disponible</h4>
        <div class="">
            <h5 class="text-left">Lunes</h5>
            <h5 class="text-left mt-3">Martes</h5>
            <h5 class="text-left mt-3">Viernes</h5>
        </div>
        <div class="d-flex my-3">
            <h5 class="me-5">Inicio 8:00am</h5>
            <h5 class="me-5">Inicio 12:00am</h5>
        </div>
        <div class="text-center mb-3">
            <a name="" id="" class=" px-5 btn btn-primary" href="#" role="button">Editar</a>
        </div>
    </div>
</div>
@endsection