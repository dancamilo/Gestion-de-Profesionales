@extends('layouts.app')
@section('content')
<div class="ms-3">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Acceso usuarios</h2><hr>
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
        <div class="row add3">
            <div class="col-sm-12 col-md-6 mt-n5 ms-5 p-0 pt-2">
                <a href="#" class="ms-5"><i class="fa-solid fa-user-plus mt-1 ms-5"></i></a>
            </div>
        </div>
    </div>
    <div class="d-flex mt-5">
        <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 w-50">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50 me-5">
                    <h3>Nombre</h3>
                    <h5>Cargo</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <a href="#" class="ms-5 ps-4"><i class="fa-solid fa-minus text-primary ms-5"></i></a>
                </div>
            </div>
            <hr class="my-2">
        </div>
        <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 w-50 ms-4">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50 me-5">
                    <h3>Nombre</h3>
                    <h5>Cargo</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <a href="#" class="ms-5 ps-4"><i class="fa-solid fa-minus text-primary ms-5"></i></a>
                </div>
            </div>
            <hr class="my-2">
        </div>
    </div>
    <div class="d-flex mt-4">
        <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 w-50">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50 me-5">
                    <h3>Nombre</h3>
                    <h5>Cargo</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <a href="#" class="ms-5 ps-4"><i class="fa-solid fa-minus text-primary ms-5"></i></a>
                </div>
            </div>
            <hr class="my-2">
        </div>
        <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 w-50 ms-4">
            <div class="ms-0 border-left2 d-flex position-relative">
                <div class="p-4 w-50 me-5">
                    <h3>Nombre</h3>
                    <h5>Cargo</h5>
                    <a href="#">nombre@uniempresarial.edu.co</a>   
                </div>
                <div class="ms-5 ps-5">
                    <a href="#" class="ms-5 ps-4"><i class="fa-solid fa-minus text-primary ms-5"></i></a>
                </div>
            </div>
            <hr class="my-2">
        </div>
    </div>
</div>     
@endsection