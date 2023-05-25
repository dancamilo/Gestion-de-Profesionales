@extends('layouts.app')
@section('content')
<div class=" container">
    <div class="ms-n5 row p-0">
        <div class="ms-n5 col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Historial cursos</h2><hr class="hr mb-4">
                <div class="row">
                    <div class="col-sm-2 text-dark">
                        <p class="w-100v">Ordernar por:</p>
                    </div>
                    <div class="col-sm-7">
                        <select class="form-select bg-white">
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
                    <div class="mt-5 my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Nombre</h3>
                                <h5>Profesional encargado</h5>
                                <h6>Duración: 02/02/2023 - 02/04/2023</h6>
                            </div>
                        </div>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Detalles</a>
                    </div>
            </div>
            
        </div>
    </div>
</div>
@endsection