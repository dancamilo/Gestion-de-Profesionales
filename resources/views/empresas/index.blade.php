@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Empresas</h2><hr>
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
        <div class="row ad">
            <div class="col-sm-12 col-md-6 add2 p-0">
                <a href="#" class="ms-n5"><i class="fa-solid fa-circle-plus ms-n5"></i></a>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="mt-5">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                <div class="ms-0 border-left2 d-flex position-relative">
                            <div class="p-4">
                                <h3>Empresa 1</h3>
                                <h5>Dirección</h5>
                                <h5>Rut:12345678</h5>
                            </div>
                            <div>
                                <img class="rounded-circle mt-4 h-50" src="{{asset('img/Empresa1.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 mt-n2">
                        <div class="ms-0 border-left2 d-flex position-relative">
                            <div class="p-4">
                                <h3>Contacto empresa</h3>
                                <h5>Cargo</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>   
                            </div>
                            <div>
                                <img class="rounded-circle mt-4 h-50" src="{{asset('img/User1.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
            </div>
            <div class="mt-5 ms-5">
                <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                    <div class="ms-0 border-left2 d-flex position-relative">
                        <div class="p-4">
                            <h3>Empresa 2</h3>
                            <h5>Dirección</h5>
                            <h5>Rut:12345678</h5>
                        </div>
                        <div>
                            <img class="rounded-circle mt-4 h-50" src="{{asset('img/Empresa1.jpg')}}" alt="">
                        </div>
                    </div>
                    <hr class="my-2">
                </div>
                <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 mt-n2">
                    <div class="ms-0 border-left2 d-flex position-relative">
                        <div class="p-4">
                            <h3>Contacto empresa</h3>
                            <h5>Cargo</h5>
                            <a href="#">nombre@uniempresarial.edu.co</a>   
                        </div>
                        <div>
                            <img class="rounded-circle mt-4 h-50" src="{{asset('img/User2.jpg')}}" alt="">
                        </div>
                    </div>
                    <hr class="my-2">
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="mt-5">
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left2 d-flex position-relative">
                            <div class="p-4">
                                <h3>Empresa 3</h3>
                                <h5>Dirección</h5>
                                <h5>Rut:12345678</h5>
                            </div>
                            <div>
                                <img class="rounded-circle mt-4 h-50" src="{{asset('img/Empresa1.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 mt-n2">
                        <div class="ms-0 border-left2 d-flex position-relative">
                            <div class="p-4">
                                <h3>Contacto empresa</h3>
                                <h5>Cargo</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>   
                            </div>
                            <div>
                                <img class="rounded-circle mt-4 h-50" src="{{asset('img/User3.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
            </div>
            <div class="mt-5 ms-5">
                <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                    <div class="ms-0 border-left2 d-flex position-relative">
                        <div class="p-4">
                            <h3>Empresa 4</h3>
                            <h5>Dirección</h5>
                            <h5>Rut:12345678</h5>
                        </div>
                        <div>
                            <img class="rounded-circle mt-4 h-50" src="{{asset('img/Empresa4.jpg')}}" alt="">
                        </div>
                    </div>
                    <hr class="my-2">
                </div>
                <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 mt-n2">
                    <div class="ms-0 border-left2 d-flex position-relative">
                        <div class="p-4">
                            <h3>Contacto empresa</h3>
                            <h5>Cargo</h5>
                            <a href="#">nombre@uniempresarial.edu.co</a>   
                        </div>
                        <div>
                            <img class="rounded-circle mt-4 h-50" src="{{asset('img/User2.jpg')}}" alt="">
                        </div>
                    </div>
                    <hr class="my-2">
                </div>
            </div>
        </div>
</div>
@endsection