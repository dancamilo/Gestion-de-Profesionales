@extends('layouts.app')
@section('content')
    <h2 class="mt-5 mb-2 mx-5">Proceso curso 1</h2>
    <hr class='mx-5' width="20%" />	
    <div class="d-flex mt-2 mb-5">
        <div class="w-50 me-5">
            <h3 class="mt-4 mx-5">Descripción:</h3>	
            <div class="process-card mx-5 p-3 pb-2">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="d-flex w-100">
                <div class="process-card2 d-flex mt-4 ms-5 w-50 p-3">
                    <div class="border-left2 p-2 ps-3">
                        <h4 class="">Este curso <br> ha sido <br> realizado 4 veces</h4>
                    </div>
                    <div class="w-25 mt-5 ms-5 pt-4">
                        <a href="#">Ver historial</a>
                    </div>
                </div>
                <div class="process-card3 w-25 mt-4 mx-5">
                    <p><strong>Fecha inicial:</strong></p>
                    <p>20/04/2023</p><br>
                    <p><strong>Fecha final:</strong></p>
                    <p>20/08/2023</p>
                </div>
            </div>
            <h3 class="mt-4 mx-5">Observaciones:</h3>
            <div class="process-card mx-5 p-3 pb-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
        <div class="w-50 ms-5">
            <div class=" mb-4 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4 pt-3">
                        <h3>Profesional encargado</h3>
                        <h5>Área especializada</h5>
                        <a href="#">nombre@uniempresarial.edu.co</a>  
                    </div>
                    <div>
                        <img class="rounded-circle mt-2" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="my-4 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4 pt-3">
                        <h3>Empresa 1</h3>
                        <h5>Dirección</h5>
                        <a href="#">Rut:123456789</a>  
                    </div>
                    <div>
                        <img class="rounded-circle mt-2" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4 pt-3">
                        <h3>Contacto empresa</h3>
                        <h5>Área especializada</h5>
                        <a href="#">nombre@uniempresarial.edu.co</a>  
                    </div>
                    <div>
                        <img class="rounded-circle mt-2" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <a name="" id="" class="btn ficha mt-4" href="#" role="button">Generar ficha técnica</a>
        </div>      
    </div>
@endsection