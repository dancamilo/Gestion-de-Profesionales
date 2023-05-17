@extends('layouts.app')
@section('content')
<div class="d-flex">
    <i class="fa-solid fa-square-caret-left"></i>
    <h2 class="mt-5 mx-5">Historial acceso de usuarios</h2>	
</div>
<hr class="m-5 mt-0"  width="40%" />
<div class="d-flex w-100 px-5 filtro">
        <select class="form-select form-select-lg bg-white text-dark text-center" name="" id="">
            <option selected>Seleccione un usuario</option>
            <option value="">Profesional  1</option>
            <option value="">Profesional  2</option>
            <option value="">Profesional  3</option>
        </select>
        <input type="date" name="date" id="" class="text-center">
</div>
<div class="d-flex w-100 mt-5 justify-content-center m-auto px-5 mb-5">
    <div class="border-left2 py-2 px-5 text-dark his-user-card">
        <h3 class="pb-3"><strong>02 de Marzo de 2023</strong></h3>
        <h4 class="green">Usuario 1</h4>
        <p class="mb-1">Hora de ingreso: 2:30 pm</p>
        <p class="pb-3">Hora de salida:   3:17 pm</p>
        <h4 class="red">Usuario 2</h4>
        <p class="mb-1">Hora de ingreso: 12:20 am</p>
        <p class="pb-3">Hora de salida:   3:48 pm</p>
        <h4 class="green">Usuario 3</h4>
        <p class="mb-1">Hora de ingreso: 8:30 am</p>
        <p>Hora de salida:   10:29 am</p>
    </div>
    <div class="border-left2 py-2 px-5 text-dark his-user-card">
        <h3 class="pb-3"><strong>03 de Marzo de 2023</strong></h3>
        <h4 class="red">Usuario 1</h4>
        <p class="mb-1">Hora de ingreso: 4:55 pm</p>
        <p class="pb-3">Hora de salida:   5:02 pm</p>
        <h4 class="red">Usuario 2</h4>
        <p class="mb-1">Hora de ingreso: 1:36 pm</p>
        <p class="pb-3">Hora de salida:   1:38 pm</p>
        <h4 class="green">Usuario 3</h4>
        <p class="mb-1">Hora de ingreso: 9:10 am</p>
        <p>Hora de salida:   10:50 am</p>
    </div>
    <div class="border-left2 py-2 px-5 text-dark">
        <h3 class="pb-3"><strong>04 de Marzo de 2023</strong></h3>
        <h4 class="green">Usuario 1</h4>
        <p class="mb-1">Hora de ingreso: 10:35 am</p>
        <p class="pb-3">Hora de salida:   6:03 pm</p>
        <h4 class="green">Usuario 2</h4>
        <p class="mb-1">Hora de ingreso: 1:50 pm</p>
        <p class="pb-3">Hora de salida:   4:22 pm</p>
        <h4 class="green">Usuario 3</h4>
        <p class="mb-1">Hora de ingreso: 5:30 pm</p>
        <p>Hora de salida:   5:32 pm</p>
    </div>
    
</div>
@endsection