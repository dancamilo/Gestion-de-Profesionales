@extends('layouts.app')
@section('content')
<h2 class="mt-5 mb-2 mx-5">Editar curso</h2>
    <hr class='mx-5' width="20%" />	
    <form class="d-flex mt-2 mb-5"action="{{route('courses.update',$courses->id)}}" method="POST" novalidate>
        @csrf @method('PUT')
        <div class="create-card2 mt-2 ms-5">
            <h3 class="mt-3 ms-4">Nombre del curso:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="text" name="nombre" class="text-cursos" value="{{$courses->nombre}}">
            </div>
            <h3 class="mt-5 ms-4">Área especializada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="" id="" class="text-cursos text-center py-1">
                    <option value="{{$courses->id_areas}}" selected>{{$courses->id_areas}}</option>
                    {{-- @foreach($courses as $nombre)
                    <option value="{{$nombre->id}}">{{$nombre->nombre}}</option>
                    @endforeach --}}
                </select>
            </div>
            <h3 class="mt-5 ms-4">Profesional encargado:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="" id="" class="text-cursos text-center py-1">
                    <option value="{{$courses->profesional->nombre}}" selected> Seleccione un profesional</option>
                   @foreach($profesional as $nombre)
                    <option value="{{$nombre->id}}">{{$nombre->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Empresa relacionada:</h3>
            <div class="ms-4 mt-3 w-100">
                <select name="" id="" class="text-cursos text-center py-1">
                    <option value="{{$courses->company->nombre}}" selected> Seleccione la empresa</option>
                   @foreach($companies as $nombre)
                    <option value="{{$nombre->id}}">{{$nombre->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <h3 class="mt-5 ms-4">Fechas:</h3>
            <div class="ms-4 mt-3 my-5 d-flex">
                <div class="d-grid">
                    <label for="date-start" class="text-dark pb-1">Fecha inicio</label>
                    <input type="date" name="fecha_inicial" class="w-40 text-center py-1" value="{{$courses->fecha_inicial}}">
                </div>
                <div class="d-grid ms-3">
                    <label for="date-start" class="text-dark pb-1">Fecha final</label>
                    <input type="date" name="fecha_final" class="w-40 text-center py-1"  value="{{$courses->fecha_final}}">
                </div>
            </div>
        </div>
        <div class="create-card2 p-0 mt-2 ms-5">
            <h3 class="mt-3 ms-4">Duración en horas:</h3>
            <div class="ms-4 mt-3 w-100">
                <input type="number" name="duracion" class="text-cursos" value="{{$courses->duracion}}">
            </div>
            <h3 class="mt-4 ms-4">Descripción:</h3>	
            <input type="text-area" name="descripcion" class="text-cursos h-25 px-2 ms-4 mt-3 " value="{{$courses->descripcion}}">
            <h3 class="mt-4 ms-4">Observaciones:</h3>	
            <input type="text-area" name="observaciones" class="text-cursos h-25 px-2 ms-4 mt-3 " value="{{$courses->observaciones}}">
            <div class="text-center mt-3 me-n3">
                <button name="" id="" class=" px-5 btn btn-primary" href="#" type="submit ">Guardar</button>
            </div>
        </div>      
    </form>
@endsection