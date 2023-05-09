@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6 add p-0">
                        <a href="#" class="back"><i class="fa-solid fa-square-plus"></i></a>
                    </div>
                </div>
                <h2>Historial certificados</h2><hr>
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
    </div>
</div>
@endsection