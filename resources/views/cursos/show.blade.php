@extends('layouts.app')
@section('content')
    <h2 class="mt-5 mx-5">Proceso curso 1</h2>	
    <div class="d-flex">
        <div class="w-50">
            <hr class='mx-5' width="40%" />
            <h3 class="mt-4 mx-5">Descripción:</h3>	
            <div class="process-card mx-5 p-3 pb-2">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="d-flex">
                <div class="process-card2 mt-4">
                    <h4>El curso ha sido <br> realizado 4 veces</h4>
                    <a class="" href="#">Ver historial</a>
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
        <div class="w-50">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3>Profesional..encargado</h3>
                        <h5>Área especializada</h5>
                        <a href="#">nombre@uniempresarial.edu.co</a>  
                    </div>
                    <div class="div-img">
                        <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-4 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3>Empresa 1</h3>
                        <h5>Dirección</h5>
                        <a href="#">Rut:123456789</a>  
                    </div>
                    <div class="div-img">
                        <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-4 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3>Contacto.empresa</h3>
                        <h5>Área especializada</h5>
                        <a href="#">nombre@uniempresarial.edu.co</a>  
                    </div>
                    <div class="div-img">
                        <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <a name="" id="" class="btn ficha mt-4" href="#" role="button">Generar ficha técnica</a>
        </div>      
    </div>
@endsection