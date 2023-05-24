@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Perfiles</h2><hr>
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
        <div class="mt-5 me-5">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                <div class="ms-0 border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3 class="mt-2">Perfil 1</h3>
                        <h5 class="mt-3">Área especializada</h5>
                    </div>
                    <div class="ms-5 mt-4 w-25">
                        <a href="#"><i class="fa-solid fa-pen ms-4 me-4"></i></a>
                        <a href="#"><i class="fa-solid fa-folder text-danger"></i></a>
                    </div>
                </div>
                <hr class="my-2">
            </div>
        </div>
        <div class="mt-5">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                <div class="ms-0 border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3 class="mt-2">Perfil 2</h3>
                        <h5 class="mt-3">Área especializada</h5>
                    </div>
                    <div class="ms-5 mt-4 w-25">
                        <a href="#"><i class="fa-solid fa-pen ms-4 me-4"></i></a>
                        <a href="#"><i class="fa-solid fa-folder text-danger"></i></a>
                    </div>
                </div>
                <hr class="my-2">
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="mt-3 me-5">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                <div class="ms-0 border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3 class="mt-2">Perfil 3</h3>
                        <h5 class="mt-3">Área especializada</h5>
                    </div>
                    <div class="ms-5 mt-4 w-25">
                        <a href="#"><i class="fa-solid fa-pen ms-4 me-4"></i></a>
                        <a href="#"><i class="fa-solid fa-folder text-danger"></i></a>
                    </div>
                </div>
                <hr class="my-2">
            </div>
        </div>
        <div class="mt-3">
            <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0">
                <div class="ms-0 border-left2 d-flex position-relative">
                    <div class="p-4">
                        <h3 class="mt-2">Perfil 4</h3>
                        <h5 class="mt-3">Área especializada</h5>
                    </div>
                    <div class="ms-5 mt-4 w-25">
                        <a href="#"><i class="fa-solid fa-pen ms-4 me-4"></i></a>
                        <a href="#"><i class="fa-solid fa-folder text-danger"></i></a>
                    </div>
                </div>
                <hr class="my-2">
            </div>
        </div>
    </div>
</div>
@endsection