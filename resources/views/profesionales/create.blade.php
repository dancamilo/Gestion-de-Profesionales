@extends('layouts.app')
@section('content')
<div class="d-flex w-100 mt-3">
    <div class="create-card p-4">
        <h3>Añadir profesional</h3>
        <hr width="80%">
        <h4 class="pt-3">Información personal</h4>
        <div class="d-flex mt-3">
            <div class="img-card d-grid me-4">
                <img src="{{asset('img/Imagen.PNG')}}" alt="">
                <div id="select-img">
                    <input type="file" name="" id="select-img">
                </div>
            </div>
            <div class="">
                  <input type="text" class="form-control mb-5" name="name" id="" aria-describedby="helpId" placeholder="Nombres">
                  <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Apellidos">
            </div>
        </div>
        
    </div>
</div>
@endsection