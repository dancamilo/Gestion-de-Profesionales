@extends('layouts.app')
@section('content')

<div class="container mx-5">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Profesionales</h2><hr>
                <div class="row">
                    <div class="col-sm-2 text-dark p-0">
                        <p class="">Ordernar por: </p>
                    </div>
                    <div class="col-sm-7 p-0">
                        <select class="form-select bg-white">
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <i class="fa-solid fa-square-plus text-primary col-sm-2"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex mt-5">
    <div class="collapsible overflow-hidden ms-4 ps-2 me-5">
        <input type="checkbox" id="collapsible-demand rounded-0 mb-2">
        <label for="collapsible-demand rounded-0 mb-2" >Perfil 1<i class="fa-solid fa-chevron-down"></i></label>
        <div class="collapsible-text text-dark rounded-0 p-4 pb-0">
            <div class=" w-100 h-100 ms-0 border-left d-flex">
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
            <div class=" w-100 h-100 ms-0 mt-2 border-left d-flex">
                <div class="p-4">
                    <h3>Nombre</h3>
                    <h5>Curso 4</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>  
                </div>
                <div>
                    <img class=" img2 rounded-circle" src="{{asset('img/User2.jpg')}}" alt="">
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="collapsible overflow-hidden ms-4 ps-2 me-5">
        <input type="checkbox" id="collapsible-demand rounded-0 mb-2 p2">
        <label for="collapsible-demand rounded-0 mb-2 p2" >Perfil 2<i class="fa-solid fa-chevron-down"></i></label>
        <div class="collapsible-text text-dark rounded-0 p-4 pb-0">
            <div class=" w-100 h-100 ms-0 border-left d-flex">
                <div class="p-4">
                    <h3>Nombre</h3>
                    <h5>Curso 7</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>  
                </div>
                <div>
                    <img class="rounded-circle" src="{{asset('img/User3.jpg')}}" alt="">
                </div>
            </div>
            <hr class=".hr">
            <div class=" w-100 h-100 ms-0 mt-2 border-left d-flex">
                <div class="p-4">
                    <h3>Nombre</h3>
                    <h5>Curso 3</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>  
                </div>
                <div>
                    <img class=" img2 rounded-circle" src="{{asset('img/User4.jpg')}}" alt="">
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<div class="d-flex">
    <div class="collapsible overflow-hidden ms-4 ps-2 me-5">
        <input type="checkbox" id="collapsible-demand rounded-0 mb-2">
        <label for="collapsible-demand rounded-0 mb-2" >Perfil 3<i class="fa-solid fa-chevron-down"></i></label>
        <div class="collapsible-text text-dark rounded-0 p-4 pb-0">
            <div class=" w-100 h-100 ms-0 border-left d-flex">
                <div class="p-4">
                    <h3>Nombre</h3>
                    <h5>Curso 3</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>  
                </div>
                <div>
                    <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                </div>
            </div>
            <hr class=".hr">
        </div>
    </div>
    <div class="collapsible overflow-hidden ms-4 ps-2 me-5">
        <input type="checkbox" id="collapsible-demand rounded-0 mb-2">
        <label for="collapsible-demand rounded-0 mb-2" >Perfil 4<i class="fa-solid fa-chevron-down"></i></label>
        <div class="collapsible-text text-dark rounded-0 p-4 pb-0">
            <div class=" w-100 h-100 ms-0 border-left d-flex">
                <div class="p-4">
                    <h3>Nombre</h3>
                    <h5>Curso 2</h5>
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
@endsection