@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-11 col-md-6">
            <div class="mt-5">
                <h2>Profesionales</h2><hr>
                <div class="row mt-5">
                    <div class="col-sm-2 text-dark p-0">
                        <p class="ms-2 me-1">Ordernar por: </p>
                    </div>
                    <div class="col-sm-7 p-0">
                        <select class="form-select bg-white">
                            <option></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ad">
            <div class="col-sm-113 col-md-6 add p-0">
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div>
            <div class="mt-5">
                <button type="button" class="collapsible-button text-start px-4 py-3 ms-0" data-bs-toggle="collapse" data-bs-target="#demo">
                    Perfil 1<i class="fa-solid fa-chevron-down"></i>
                </button>
                <div id="demo" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 1</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>
        
                
        </div>
    </div>
</div>
@endsection