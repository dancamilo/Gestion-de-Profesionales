@extends('layouts.app')
@section('content')
<h2 class="mt-5 mb-2 mx-5">Editar curso</h2>
    <hr class='mx-5' width="20%" />	
    <form class="d-flex mt-2 mb-5"action="{{route('courses.update',$courses->id)}}" method="POST" novalidate>
        @csrf @method('PUT')
        <div class="create-card2 mt-2 ms-5">
            <h3 class="mt-3 ms-4">Nombre del curso:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="text" name="name" class="text-cursos" value="{{$courses->name}}">
            </div>
            <h3 class="mt-5 ms-4">Área especializada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_areas" id="" class="text-cursos text-center py-1">
                    <option value="{{$courses->id_areas}}" selected>Seleccione un área</option>
                    @foreach($areas as $nombre)
                    <option value="{{$nombre->id}}">{{$nombre->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Profesional encargado:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_profesionals" id="" class="text-cursos text-center py-1">
                    <option value="{{$courses->id_profesionals}}" selected> Seleccione un profesional</option>
                   @foreach($profesional as $nombre)
                    <option value="{{$nombre->id}}">{{$nombre->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Empresa relacionada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="" id="" class="text-cursos text-center py-1">
                    <option value="{{$courses->companies->name}}" selected> Seleccione la empresa</option>
                   @foreach($companies as $nombre)
                    <option value="{{$nombre->id}}">{{$nombre->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Fechas:</h3>
            <div class="ms-4 mt-3 my-5 d-flex">
                <div class="d-grid">
                    <label for="date-start" class="text-dark pb-1">Fecha inicio</label>
                    <input type="date" name="startDate" class="w-40 text-center py-1" value="{{$courses->startDate}}">
                </div>
                <div class="d-grid ms-3">
                    <label for="date-start" class="text-dark pb-1">Fecha final</label>
                    <input type="date" name="endDate" class="w-40 text-center py-1"  value="{{$courses->endDate}}">
                </div>
            </div>
        </div>
        <div class="create-card2 p-0 mt-2 ms-5">
            <h3 class="mt-3 ms-4">Duración en horas:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="number" name="term" class="text-cursos" value="{{$courses->term}}">
            </div>
            <h3 class="mt-4 ms-4">Descripción:</h3>	
            <input type="text-area" name="details" class="text-cursos h-25 px-2 ms-4 mt-3 " value="{{$courses->details}}">
            <h3 class="mt-4 ms-4">Observaciones:</h3>	
            <input type="text-area" name="observations" class="text-cursos h-25 px-2 ms-4 mt-3 " value="{{$courses->observations}}">
            <div class="text-center mt-3 me-n3">
                <button name="" id="" class=" px-5 btn btn-primary" href="#" type="submit ">Guardar</button>
            </div>
        </div>      
    </form>
@endsection