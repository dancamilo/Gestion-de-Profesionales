@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="titulo-div mb-4">
        <div class="d-flex titulo">
            <a href="#"><i class="fa-solid fa-square-caret-left me-3"></i></a>
            <h2>Historial certificados</h2><br>
        </div>
        <hr width="30%">
    </div>
    <div class="d-flex w-100 m-auto">
        <select class="historial form-select bg-white text-dark me-5">
            <option selected value="0">Seleccione un profesional</option>
            <option></option>
            <option></option>
            <option></option>
        </select>
        <input type="date" name="date" id="date" class="historial p-2">
    </div>
</div>
<div>
    <div class="p-4 d-flex">
        <h3>02/03/2023</h3>
    </div>
</div>
@endsection