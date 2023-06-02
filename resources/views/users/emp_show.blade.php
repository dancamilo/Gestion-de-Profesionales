@extends('layouts.app')
@section('content')
    <div class="d-flex w-100v mt-3">
        <div class="create-card w-25 me-4 p-4">
            <h3>Rut: {{$contact->RUT}}</h3>
            <hr width="80%">
            <h4 class="pt-3">Información personal</h4>
            <div class="d-flex my-3">
                <div class="img-card d-grid me-4">
                    <img class="img-card" src="{{ asset('img/Empresa1.jpg') }}" alt="">
                </div>
                <div class="">
                    <h5 class="mt-3 mb-4">Empresa: {{$contact->company->nameCmp}}</h5>
                    <h5>Razón Social: {{$contact->company->bussName}}</h5>
                </div>
            </div>
            <hr width="80%">
            <div class="d-flex my-3">
                <h5 class="me-5"><b>NIT: </b>{{$contact->company->NIT}}</h5>
                <h5>Digito Verificación: {{$contact->company->check}}</h5>
            </div>
            <div class="d-flex my-3">
                <h5 class="me-5">País: {{$contact->company->country}}</h5>
                <h5>Actividad Económica: {{$contact->company->ecoActivity}}</h5>
            </div>
            <div class="d-flex my-3">
                <h5 class="me-5">Dirección: {{$contact->company->address}}</h5>
                <h5>Localidad: {{$contact->company->location}}</h5>
            </div>
            <div class="d-flex my-3">
                <h5 class="me-5">Cantidad Empleados: {{$contact->company->employees}} Empleados</h5>
                <h5 class="ms-1">Tamaño empresa: {{$contact->company->compSize}} empresa</h5>
            </div>
            <div class="d-flex my-3">
                <h5 class="me-4">Contacto: {{$contact->nameCnt}}</h5>
                <h5>Nro Doc: {{$contact->docIdentity}}</h5>
            </div>
            <h5 class="my-4">Página Web: {{$contact->company->webPage}}</h5>
        </div>
        <div class="w-25 me-2 p-4 align-items-center justify-content-center text-left">
            <h4 class="pt-3">Información de contacto</h4>
            <div class="d-flex my-3">
                <h5 class="me-4">{{$contact->nameCnt}}</h5>
                <h5 class="me-5">C.C</h5>
                <h5 class="ms-5">{{$contact->docIdentity}}</h5>
            </div>
            <div class="d-flex mb-3">
                <h5 class="me-5">Cargo: {{$contact->appointment}}</h5>
                <h5 class="ms-4 ps-1">Área especializada:</h5>
            </div>
            <div class="d-flex mb-3">
                <h5 class="me-4">{{$contact->phoneCnt}}</h5>
                <h5 class="ms-3">(+57){{$contact->cellular}}</h5>
            </div>
            <h5 class="my-3">{{$contact->emailCnt}}</h5>
            <h5 class="my-3">{{$contact->company->emailCmp}}</h5>
            <hr class="mt-1" width="80%">
            <h4 class="pt-3">Documentos requeridos</h4>
            <div class="text-center mb-3">
                <a name="" id="" class=" px-5 w-100 btn btn-primary" href="#" role="button">Descargar archivos</a>
            </div>
        </div>
        <div class="create-card w-25 me-4 p-4">
            <h4>Rol a desempeñar</h4>
            <h5 class="text-left">Área especializada</h5>
            @forelse($courses as $course)
                <h5 class="text-left mt-3">{{$course->name}}</h5>
                <h5 class="text-left mt-3">{{$course->profesional->name}}</h5>
            @empty
                <h5 class="text-left mt-3">Sin cursos</h5>
            @endforelse
            <hr width="80%">
            <h4 class="pt-3">Observaciones</h4>
            <p>{{----}}</p>
            <div class="text-center mb-3">
                <a name="" id="" class=" px-5 btn btn-primary" href="{{route('companies.edit', $contact->id)}}" role="button">Editar</a>
            </div>
        </div>
    </div>
@endsection
