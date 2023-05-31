@extends('layouts.app')
@section('content')
<div class="content">
    <div class="mt-5">
        <h2 class="text-center text-danger">Profesionales</h2>
        <div class="col-sm-12 col-md-11 ms-5 pe-2">
            <div class="col-md-6 mt-5">
                <h4 class="">Ordernar por: </h4>
                    <select class="form-select bg-white">
                        <option></option>
                    </select>
            </div>
        <div class="text-end">
            <a href="#" class=" fs-1"><i class="fa-solid fa-circle-plus"></i></a>
        </div>
        </div>
    </div>
    <div class="d-flex mt-5 col-sm-12 col-md-11 ms-5 pe-2">
    <div class="col-md-5 mx-5">
            <div class="mt-5">
                <button type="button" class="collapsible-button text-start px-4 ms-0" data-bs-toggle="collapse" data-bs-target="#demo">
                    Perfil 1<i class="fa-solid fa-chevron-down"></i>
                </button>
                <div id="#" class="collapse">
                    <div class="collapsible-div position-relative text-dark">
                        <div class="d-flex position-relative">
                            <div class="ms-2 mt-5">
                                <h3>Nombre</h3>
                                <h5>Curso 1</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
    
            
    </div>
</div>
</div>
@endsection