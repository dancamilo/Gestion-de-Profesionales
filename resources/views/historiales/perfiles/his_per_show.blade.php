@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Perfil 1</h2><hr>
                <div class="row mt-5">
                    <div class="col-sm-2 text-dark p-0">
                        <p class="ms-2 me-1">Ordernar por: </p>
                    </div>
                    <div class="col-sm-7 p-0">
                        <select class="form-select bg-white">
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex mt-5">
        <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 w-50">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50">
                    <h3 class="text-danger">Nombre</h3>
                    <h5>Curso 1</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <img class="rounded-circle mt-4 ms-5 h-70" src="{{asset('img/User1.jpg')}}" alt="">
                </div>
            </div>
            <hr class="my-2">
        </div>
        <div class="collapsible-div2 ms-3 position-relative text-dark rounded-0 p-4 pb-0 w-50">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50">
                    <h3>Nombre</h3>
                    <h5>Curso 2</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <img class="rounded-circle mt-4 ms-5 h-70" src="{{asset('img/User2.jpg')}}" alt="">
                </div>
            </div>
            <hr class="my-2">
        </div>
    </div>
    <div class="d-flex mt-4">
        <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 w-50">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50">
                    <h3 class="text-danger">Nombre</h3>
                    <h5>Curso 3</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <img class="rounded-circle mt-4 ms-5 h-70" src="{{asset('img/User3.jpg')}}" alt="">
                </div>
            </div>
            <hr class="my-2">
        </div>
        <div class="collapsible-div2 ms-3 position-relative text-dark rounded-0 p-4 pb-0 w-50">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50">
                    <h3>Nombre</h3>
                    <h5>Curso 4</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <img class="rounded-circle mt-4 ms-5 h-70" src="{{asset('img/User4.jpg')}}" alt="">
                </div>
            </div>
            <hr class="my-2">
        </div>
    </div>
</div>
@endsection