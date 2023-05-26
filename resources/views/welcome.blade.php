@extends('layouts.app')
@section('content')
<div class="container m-0 w-100">
    <style>
        #module1{
            background-image: url({{asset('img/imgcursos.png')}});
        }
        #module2{
            background-image: url({{asset('img/imgprofesional.png')}});
        }
        #module3{
            background: #262626;
        }
        #module4, #module9{
            background: #0E1F87;
        }
        #module5{
            background-image: url({{asset('img/imgaccesousuarios.png')}});
        }

        #module6{
            background-image: url({{asset('img/imgempresas.png')}});
        }
        #module7{
            background-image: url({{asset('img/imgcertificados.png')}});
        }
        #module8{
            background-image: url({{asset('img/imghistorial.png')}});
        }
        .form-control-range{width: 100%}

        .col-4{width: 32.5%}
    </style>
    <div class="row mt-4 row-home w-100v">
        <div class="col-4 mx-4" id="module1">
            <p class="display-6 mb-5">Cursos</p>
            <a name="" id="" class="btn btn-home2 btn-primary float-end mt-5" href="{{route('cursos.index')}}" role="button">Ir a Cursos<i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="col-4 mx-4" id="module2">
            <p class="display-6 mb-5">Profesionales</p>
            <a name="" id="" class="btn btn-home btn-primary align-self-end float-end mt-5" href="{{route('profesionales.index')}}" role="button">Ir a Profesionales<i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="col-4 mx-4 text-white" id="module3">
            <p class="display-6 mb-4">Procesos de cursos</p>
            <div class="progress mb-4">
                <div class="progress-bar" style="width:30%">Curso 1</div>
            </div>
            <div class="progress mb-4">
                <div class="progress-bar bg-orange" style="width:60%">Curso 2</div>
            </div>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" style="width:80%">Curso 3</div>
            </div>
        </div>
    </div>
    <div class="row mt-4 row-home w-100v">
            <div class="col-4 mx-4 text-white text-center" id="module4">
                <p class="display-5">Gestiona tus contactos empresariales</p>
            </div>
            <div class="col-4 mx-4" id="module5">
                <p class="display-6 mb-5">Acceso de usuarios</p>
                <a name="" id="" class="btn btn-home2 btn-primary float-end mt-5" href="#" role="button">Ir a Usuarios<i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-4 mx-4 " id="module6">
                <p class="display-6 mb-5">Empresas</p>
                <a name="" id="" class="btn btn-home btn-primary float-end mt-5" href="#" role="button">Ir a Empresas<i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="row mt-4 row-home w-100v">
            <div class="col-4 mx-4 " id="module7">
                <p class="display-6 mb-5">Certificados</p>
                <a name="" id="" class="btn btn-home2 btn-primary float-end mt-5" href="#" role="button">Ir a Certificados<i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-4 mx-4" id="module8">
                <p class="display-6 mb-5">Historial</p>
                <a name="" id="" class="btn btn-home btn-primary float-end mt-5" href="#" role="button">Ir a Historial<i class="fa-solid fa-arrow-right"></i></a>
            </div>
            
            <div class="col-4 mx-4 text-white text-center" id="module9">
                <p class="display-5 ">Almacena<br>tus datos</p>
            </div>
          </div>
        </div>
@endsection