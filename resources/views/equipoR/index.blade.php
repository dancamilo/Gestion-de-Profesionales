@extends('layouts.app')
@section('content')
<style>
    #module1{
        background-image: url({{asset('img/imgcursos.png')}});
    }

    #module2{
        background-image: url({{asset('img/imgprofesional.png')}});
    }
    #module3{
        background-image: url({{asset('img/imgcursos.png')}});
    }

    #module4{
        background-image: url({{asset('img/imgprofesional.png')}});
    }
    .form-control-range{width: 100%}

    .row-home, .col-4{
        height: 30vh;
    }
    .col-4{width: 32.5%}
</style>
        <div class="row mt-5 row-home">
            <div class="col-4 mx-1" id="module1">
                <p class="display-6 mb-5">Historial cursos</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">ver</a>
            </div>
            <div class="col-4 mx-1" id="module2">
                <p class="display-6 mb-5">Historial profesionales</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">ver</a>
            </div>
            <div class="col-4 mx-1 bg-dark text-white ">
                <p class="display-6">Historial acceso</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">ver</a>
            </div>
          </div>
          <div class="row mt-5 row-home">>
            <div class="col-4 mx-1 bg-dark text-white" >
                <p class="display-6 mb-5">Historial empresas</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">ver</a>
            </div>
            <div class="col-4 mx-1" id="module3">
                <p class="display-6 mb-5">certificados</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">ver</a>
            </div>
            <div class="col-4 mx-1" id="module3">
                <p class="display-6 mb-5">Volver al inicio</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">Inicio</a>
            </div>
            
          </div>
@endsection