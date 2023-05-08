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
                <p class="display-6 mb-5">cursos</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">Button</a>
            </div>
            <div class="col-4 mx-1" id="module2">
                <p class="display-6 mb-5">cursos</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">Button</a>
            </div>
            <div class="col-4 mx-1 bg-dark text-white ">
                <p class="display-6">Procesos de cursos</p>
                <form>
                    <div class="form-group ">
                      <label for="formControlRange">curso 1</label>
                      <input type="range" class="form-control-range bg-success" id="formControlRange">
                    </div>
                    <div class="form-group ">
                        <label for="formControlRange">curso 2</label>
                        <input type="range" class="form-control-range bg-success" id="formControlRange">
                      </div>
                      <div class="form-group ">
                        <label for="formControlRange">curso 3</label>
                        <input type="range" class="form-control-range bg-success" id="formControlRange">
                      </div>
                  </form>
            </div>
          </div>
          <div class="row mt-5 row-home">>
            <div class="col-4 mx-1 bg-dark text-white" >
                <p class="display-6 mb-5">Gestiona tus contactos empresariales</p>
            </div>
            <div class="col-4 mx-1" id="module3">
                <p class="display-6 mb-5">cursos</p>
                <a name="" id="" class="btn btn-primary float-end mt-5" href="#" role="button">Button</a>
            </div>
            <div class="col-4 mx-1 " id="module4">
                <p class="display-6">Procesos de cursos</p>
                
            </div>
          </div>
@endsection