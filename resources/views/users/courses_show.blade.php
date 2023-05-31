@extends('layouts.app')
@section('content')

    <h2 class="mt-5 mb-2 mx-5">{{$course->name}}</h2>
    <hr class='mx-5' width="20%" />	
    <div class="d-flex mt-2 mb-5">
        <div class="w-50 me-5">
            <h3 class="mt-4 mx-5">Descripción:</h3>	
            <div class="process-card mx-5 p-3 pb-2">
                <p class="text-justify">{{$course->details}}</p>
            </div>
            <div class="d-flex w-100">
                <div class="process-card2 d-flex mt-4 ms-5 w-50 p-3">
                    <div class="border-left2 p-2 pt-3 ps-3">
                        <h3 class="">La duración de este<br> curso es de {{$course->term}} horas</h3>
                    </div>
                </div>
                <div class="process-card3 w-25 mt-4 mx-5">
                    <p><strong>Fecha inicial:</strong></p>
                    <p>{{$course->startDate}}</p><br>
                    <p><strong>Fecha final:</strong></p>
                    <p>{{$course->endDate}}</p>
                </div>
            </div>
            <h3 class="mt-4 mx-5">Observaciones:</h3>
            <div class="process-card mx-5 p-3 pb-2">
                <p>{{$course->observations}} </p>
            </div>
        </div>
        <div class="w-50 ms-5">
            <div class=" mb-4 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4 pt-3 show-create">
                        <h3>{{$profesional->name}}</h3>
                        <h5>{{$profesional->heading}}</h5>
                        <a href="#">{{$profesional->email}}</a>  
                    </div>
                    <div>
                        <img class="rounded-circle mt-2" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="my-4 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4 pt-3 show-create">
                        <h3>{{$company->name}}</h3>
                        <h5>{{$company->address}}</h5>
                        <a href="#"></a>  
                    </div>
                    <div>
                        <img class="rounded-circle mt-2" src="{{asset('img/User1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                <div class=" border-left2 d-flex position-relative">
                    <div class="p-4 pt-3 show-create">
                        <h3>{{$company->telephone}}</h3>
                        <h5>{{$area->name}}</h5>
                        <a href="#">{{$company->email}}</a>  
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