@extends('layouts.app')
@section('content')
<h2 class="mt-5 mb-2 mx-5">Añadir curso</h2>
<hr class='mx-5' width="20%" />	
<div class="d-flex mt-2 mb-5">
    <div class="create-card2 mt-2 ms-5">
        <form action="{{route('cursos.store')}}"  class="w-70" method="POST">
        @csrf
            <h3 class="mt-3 ms-4">Nombre del curso:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="text" class="text-cursos" name="nombre" >
            </div>
            <h3 class="mt-5 ms-4">Área especializada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_areas" id="" class="text-cursos text-center py-1">
                <option value="" selected> Seleccione un área</option>
                    @foreach($profiles as $profil)
                    <option value="{{$profile->id}}" selected>{{$profile->perfil}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Profesional encargado:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_profesionals" id="" class="text-cursos text-center py-1">
                    <option value="" selected> Seleccione un profesional</option>
                    @foreach($profesionals as $profesional)
                    <option value="{{$profesional->id}}" selected>{{$profesional->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Empresa relacionada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_companies" id="" class="text-cursos text-center py-1">
                <option value="" selected> Seleccione un profesional</option>
                    @foreach($companies as $company)
                    <option value="{{$company->id}}" selected>{{$company->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Fechas:</h3>
            <div class="ms-4 mt-3 my-5 d-flex">
                <div class="d-grid">
                    <label for="date-start" class="text-dark pb-1">Fecha inicio</label>
                    <input type="date" name="fecha_inicial" class="w-40 text-center py-1">
                </div>
                <div class="d-grid ms-3">
                    <label for="date-start" class="text-dark pb-1">Fecha final</label>
                    <input type="date" name="fecha_final" class="w-40 text-center py-1">
                </div>
            </div>
    </div>  
    <div class="create-card2 p-0 mt-2 ms-5">
        @csrf
            <h3 class="mt-3 ms-4">Duración en horas:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="number" class="text-cursos" name="duracion">
            </div>
            <h3 class="mt-4 ms-4">Descripción:</h3>	
            <input type="text-area" class="text-cursos h-25 px-2 ms-4 mt-3 " name="descripcion">
            <h3 class="mt-4 ms-4">Observaciones:</h3>	
            <input type="text-area" class="text-cursos h-25 px-2 ms-4 mt-3 " name="observaciones">
            <div class="text-center mt-3 me-n3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection