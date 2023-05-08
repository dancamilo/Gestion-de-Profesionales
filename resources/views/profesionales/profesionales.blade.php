@extends('layouts.app')
@section('content')

<div class="container mx-5">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Profesionales</h2><hr>
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
        <div class="row">
            <div class="col-sm-12 col-md-6 add p-0">
                <a href="#"><i class="fa-solid fa-square-plus"></i></a>
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
                <div id="demo" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 4</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User2.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="button" class="collapsible-button text-start px-4 py-3 me-5" data-bs-toggle="collapse" data-bs-target="#demo2">
                    Perfil 3<i class="fa-solid fa-chevron-down"></i>
                </button>
                <div id="demo2" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0 me-5">
                        <div class="ms-0 me-5 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 4</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User2.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-5">
                <button type="button" class="collapsible-button text-start px-4 py-3 me-5" data-bs-toggle="collapse" data-bs-target="#demo3">
                    Perfil 2<i class="fa-solid fa-chevron-down"></i>
                </button>
                <div id="demo3" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 5</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User3.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>
                <div id="demo3" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 7</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User5.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="button" class="collapsible-button text-start px-4 py-3 ms-0" data-bs-toggle="collapse" data-bs-target="#demo4">
                    Perfil 4<i class="fa-solid fa-chevron-down"></i>
                </button>
                <div id="demo4" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 8</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>  
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User6.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection