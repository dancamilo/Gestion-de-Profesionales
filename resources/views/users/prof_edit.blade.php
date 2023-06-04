@extends('layouts.app')
@section('content')
<div class="container">
<div class="d-flex col-md-12 col-sm-12 mt-5 mb-5">
    <div class="create-card col-md-4 mb-5">
        <h4 class="pt-3 text-center">Información personal</h4>
        <div class="text-center  d-flex me-5 ps-3">
            <div class="img-card d-grid text-center me-4">
                <img src="{{asset('img/Imagen.PNG')}}" alt="">
                <div id="">
                    <input type="file" name="" id="">
                </div>
            </div>
            <div class="col-md-9 mt-5">
                  <input type="text" class="form-control mb-5" name="name" id="" aria-describedby="helpId" placeholder="Nombre">
            </div>
        </div>
        <div class="d-flex col-md-11 mt-3">
            <div class="col-md-3 ps-3">
            <select class="" name="" id="">
                <option selected value="">C.C</option>
                <option></option>
            </select>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Documento de identidad">
            </div>
        </div>
        <h4 class="pt-3 text-center">Información de contacto</h4>
        <div class="col-md-11 d-flex mt-3 ms-3 text-center">
            <div class="col-md-6">
                <input type="text" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Teléfono fijo">
            </div>
                <div class="col-md-6 ms-1">
                <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Número de celular">
            </div>
        </div>
            <div class="col-md-11 ms-3">
                <input type="email" class="form-control my-3" name="lastname" id="" aria-describedby="helpId" placeholder="Correo personal">
            </div>
            <div class="col-md-11 ms-3">
        <input type="email" class="form-control my-3" name="lastname" id="" aria-describedby="helpId" placeholder="Correo profesional">
            </div>
    </div>
    <div class="create-card col-md-4 mb-5">
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
        <div class="text-center mb-5">
            <a name="" id="" class=" px-5 btn btn-primary" href="#" role="button">Añadir</a>
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
        <div class="text-center mb-3">
            <a name="" id="" class=" px-5 btn btn-primary" href="#" role="button">Añadir</a>
        </div>
    </div>
    <div class="create-card col-md-4 mb-5">
        <h4>Rol a desempeñar</h4>
        <select class="w-100 ps-2 py-2 me-2 text-left" name="" id="">
            <option selected value="">Área especializada</option>
        </select>
        <input type="text" class="form-control mt-3" name="lastname" id="" aria-describedby="helpId" placeholder="Cursos a realizar">
        <input type="text" class="form-control mt-3" name="lastname" id="" aria-describedby="helpId" placeholder="Cursos a realizar">
        <input type="text" class="form-control my-3" name="lastname" id="" aria-describedby="helpId" placeholder="Cursos a realizar">
        <div class="text-center mb-3">
            <a name="" id="" class=" px-5 btn btn-primary" href="#" role="button">Añadir</a>
        </div>
        <hr width="80%">
        <h4 class="pt-3">Horario disponible</h4>
        <div class="">
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="me-5">
                        <input type="radio" class="me-2" name="" id="" autocomplete="off"> Lunes
                    </label>
                    <label class="">
                        <input type="radio" class="me-2 ms-4" name="" id="" autocomplete="off"> Viernes
                    </label>
                </div>
            </div>
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="me-4">
                        <input type="radio" class="me-2" name="" id="" autocomplete="off"> Martes
                    </label>
                    <label class="ms-3">
                        <input type="radio" class="me-2 ms-4" name="" id="" autocomplete="off"> Sábado
                    </label>
                </div>
            </div>
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="">
                        <input type="radio" class="me-2" name="" id="" autocomplete="off">  Miércoles
                    </label>
                    <label class="ms-5">
                        <input type="radio" class="me-2 ms-n1" name="" id="" autocomplete="off"> Domingo
                    </label>
                </div>
            </div>
            <div class="w-100">
                <div class="btn-group" data-bs-toggle="buttons">
                    <label class="">
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
</div>
@endsection
