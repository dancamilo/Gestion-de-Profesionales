@extends('layouts.app')
@section('content')
<div class="ms-5">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Empresas</h2><hr>
                <div class="row mt-5">
                    <div class="col-sm-2 text-dark p-0">
                        <p class="ms-2 me-1">Ordenar por: </p>
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
                <a href="{{route('companies.create')}}" class="ms-n5"><i class="fa-solid fa-circle-plus ms-n5"></i></a>
            </div>
        </div>
    </div>
    <div class="d-flex">
        @foreach($contacts as $contact)
        <a href="{{route('companies.show', $contact->id)}}" class="">
        <div class="mt-5">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                <div class="ms-0 border-left2 d-flex position-relative">
                            <div class="p-4">
                                <h3>{{$contact->company->name}}</h3>
                                <h5>{{$contact->company->address}}</h5>
                                <h5>Rut: {{$contact->company->RUT}}</h5>
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
                                    <h3>{{$contact->name}}</h3>
                                    <h5>{{$contact->area}}</h5>
                                    <a href="#">{{$contact->email}}</a>
                            </div>
                            <div>
                                <img class="rounded-circle mt-4 h-50" src="{{asset('img/User1.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
            </div>
    </a>
    @endforeach 
</div>
@endsection