@extends('layouts.app')
@section('content')
<h2 class="mt-5 mb-2 mx-5">Añadir curso</h2>
<hr class='mx-5' width="20%" />	
<div class="d-flex mt-2 mb-5">
    <div class="create-card2 mt-2 ms-5">
        <form action="{{route('courses.store')}}"  class="w-70" method="POST">
        @csrf
            <h3 class="mt-3 ms-4">Nombre del curso:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="text" class="text-cursos" name="name">
            </div>
            <h3 class="mt-5 ms-4">Área especializada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_areas" id="" class="text-cursos text-center py-1">
                <option selected> Seleccione un área</option>
                    @foreach($areas as $area)
                    <option value="{{$area->id}}">{{$area->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Profesional encargado:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_profesionals" id="" class="text-cursos text-center py-1">
                    <option selected> Seleccione un profesional</option>
                    @foreach($profesionals as $profesional)
                    <option value="{{$profesional->id}}">{{$profesional->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Empresa relacionada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="id_companies" id="" class="text-cursos text-center py-1">
                    <option selected> Seleccione una empresa</option>
                    @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Fechas:</h3>
            <div class="ms-4 mt-3 my-5 d-flex">
                <div class="d-grid">
                    <label for="date-start" class="text-dark pb-1">Fecha inicio</label>
                    <input type="date" name="startDate" class="w-40 text-center py-1">
                </div>
                <div class="d-grid ms-3">
                    <label for="date-start" class="text-dark pb-1">Fecha final</label>
                    <input type="date" name="endDate" class="w-40 text-center py-1">
                </div>
            </div>
    </div>  
    <div class="create-card2 p-0 mt-2 ms-5">
        @csrf
            <h3 class="mt-3 ms-4">Duración en horas:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="number" class="text-cursos" name="term">
            </div>
            <h3 class="mt-4 ms-4">Descripción:</h3>	
            <input type="text-area" class="text-cursos h-25 px-2 ms-4 mt-3 " name="details">
            <h3 class="mt-4 ms-4">Observaciones:</h3>	
            <input type="text-area" class="text-cursos h-25 px-2 ms-4 mt-3 " name="observations">
            <div class="text-center mt-3 me-n3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection