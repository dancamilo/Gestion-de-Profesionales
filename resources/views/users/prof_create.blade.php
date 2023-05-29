@extends('layouts.app')
@section('content')
<div class="d-flex w-100v mt-3">
    <div class="create-card w-25 me-4 p-4">
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
        <h4 class="pt-3">Documento de identidad</h4>
        <div class="d-flex my-3">
            <select class="w-25 me-2 text-center" name="" id="">
                <option selected value="">C.C</option>
            </select>
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Documento de identidad">
        </div>
        <hr width="80%">
        <h4 class="pt-3">Información de contacto</h4>
        <div class="d-flex my-3">
                <input type="text" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Teléfono fijo">
                <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Número de celular">
        </div>
        <input type="email" class="form-control my-3" name="lastname" id="" aria-describedby="helpId" placeholder="Correo personal">
        <input type="email" class="form-control my-3" name="lastname" id="" aria-describedby="helpId" placeholder="Correo profesional">
    </div>
    <div class="w-25 me-2 p-4 align-items-center justify-content-center text-left">
        <h4 class="">Información académica</h4>
        <div class="d-flex my-3">
                  <input type="text" class="form-control w-50 me-2" name="name" id="" aria-describedby="helpId" placeholder="Título">
                  <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Institución">
        </div>
        <div class="d-flex mb-3">
            <input type="text" class="form-control w-50 me-2" name="name" id="" aria-describedby="helpId" placeholder="Título">
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Institución">
        </div>
        <div class="d-flex mb-3">
            <input type="text" class="form-control w-50 me-2" name="name" id="" aria-describedby="helpId" placeholder="Título">
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Institución">
        </div>
        <div class="d-flex mb-3">
            <input type="text" class="form-control w-50 me-2" name="name" id="" aria-describedby="helpId" placeholder="Título">
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Institución">
        </div>
        <div class="d-flex mb-3">
            <input type="text" class="form-control w-50 me-2" name="name" id="" aria-describedby="helpId" placeholder="Título">
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Institución">
        </div>
        <hr class="mt-1" width="80%">
        <h4 class="pt-3">Información profesional</h4>
        <div class="d-flex my-3">
                  <input type="text" class="form-control w-25 me-2" name="name" id="" aria-describedby="helpId" placeholder="Cargo">
                  <input type="text" class="form-control w-50" name="lastname" id="" aria-describedby="helpId" placeholder="Empresa">
                  <input type="text" class="form-control w-25 ms-2" name="name" id="" aria-describedby="helpId" placeholder="Tiempo">
        </div>
        <div class="d-flex my-3">
            <input type="text" class="form-control w-25 me-2" name="name" id="" aria-describedby="helpId" placeholder="Cargo">
            <input type="text" class="form-control w-50" name="lastname" id="" aria-describedby="helpId" placeholder="Empresa">
            <input type="text" class="form-control w-25 ms-2" name="name" id="" aria-describedby="helpId" placeholder="Tiempo">
        </div>
        <div class="d-flex my-3">
            <input type="text" class="form-control w-25 me-2" name="name" id="" aria-describedby="helpId" placeholder="Cargo">
            <input type="text" class="form-control w-50" name="lastname" id="" aria-describedby="helpId" placeholder="Empresa">
            <input type="text" class="form-control w-25 ms-2" name="name" id="" aria-describedby="helpId" placeholder="Tiempo">
        </div>
        <div class="d-flex my-3">
            <input type="text" class="form-control w-25 me-2" name="name" id="" aria-describedby="helpId" placeholder="Cargo">
            <input type="text" class="form-control w-50" name="lastname" id="" aria-describedby="helpId" placeholder="Empresa">
            <input type="text" class="form-control w-25 ms-2" name="name" id="" aria-describedby="helpId" placeholder="Tiempo">
        </div>
        <div class="d-flex my-3">
            <input type="text" class="form-control w-25 me-2" name="name" id="" aria-describedby="helpId" placeholder="Cargo">
            <input type="text" class="form-control w-50" name="lastname" id="" aria-describedby="helpId" placeholder="Empresa">
            <input type="text" class="form-control w-25 ms-2" name="name" id="" aria-describedby="helpId" placeholder="Tiempo">
        </div>
    </div>
    <div class="create-card w-25 me-4 p-4">
        <h4>Rol a desempeñar</h4>
        <select class="w-100 ps-2 py-2 me-2 text-left" name="" id="">
            <option selected value="">Área especializada</option>
        </select>
        <select class="w-100 ps-2 py-2 me-2 mt-3 text-left" name="" id="">
            <option selected value="">Perfil</option>
        </select>
        <select class="w-100 ps-2 py-2 me-2 mt-3 text-left" name="" id="">
            <option selected value="">Curso a Realizar</option>
        </select>
        <select class="w-100 ps-2 py-2 me-2 mt-3 text-left" name="" id="">
            <option selected value="">Curso a Realizar</option>
        </select>
        <select class="w-100 ps-2 py-2 me-2 mt-3 text-left" name="" id="">
            <option selected value="">Curso a Realizar</option>
        </select>
        <hr width="80%">
        <h4 class="pt-3">Horario disponible</h4>
        <div class="">
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="me-5 radio">
                        <input type="radio" class="me-2" name="" id="" autocomplete="off"> Lunes
                    </label>
                    <label class="radio">
                        <input type="radio" class="me-2 ms-4 " name="" id="" autocomplete="off"> Viernes
                    </label>
                </div>
            </div>
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="me-4 radio">
                        <input type="radio" class="me-2 " name="" id="" autocomplete="off"> Martes
                    </label>
                    <label class="ms-3 radio">
                        <input type="radio" class="me-2 ms-4 " name="" id="" autocomplete="off"> Sábado
                    </label>
                </div>
            </div>
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="radio">
                        <input type="radio" class="me-2 " name="" id="" autocomplete="off">  Miércoles
                    </label>
                    <label class="ms-4 radio">
                        <input type="radio" class="me-2 ms-3 " name="" id="" autocomplete="off"> Domingo
                    </label>
                </div>
            </div>
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="radio">
                        <input type="radio" class="me-2" name="" id="" autocomplete="off">  Jueves
                    </label>
                </div>
            </div>
        </div>
        <div class="d-flex my-3">
                <input type="text" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Hora inicio">
                <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Hora final">
        </div>
        <div class="text-center mb-3">
            <a name="" id="" class=" px-5 btn btn-primary" href="#" role="button">Continuar</a>
        </div>
    </div>
</div>
@endsection