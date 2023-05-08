@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <h2>Generar certificado</h2><hr>
            <div class="col-sm-2 text-dark">
                <p>Cursos completados: </p>
            </div>
        </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
            <div class="card text-white bg-light mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 1</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                            <label class="form-check-label" for="radio1"></label>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="mt-5">
            <div class="card text-white bg-light mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 2</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                            <label class="form-check-label" for="radio1"></label>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="mt-5">
            <div class="card text-white bg-light mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 3</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                            <label class="form-check-label" for="radio1"></label>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ">
                <div class="container mx-3 bg-gray text-white p-5 mt-5  ">
                    
                </div>
            </div>   
         
    </div>
    
</div>        

@endsection