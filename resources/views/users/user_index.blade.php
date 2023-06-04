@extends('layouts.app')
@section('content')
<div class="content">
    <div class="mt-5">
        <h2 class="text-center text-danger mt-5">Acceso usuarios</h2>
        <div class="col-sm-12 col-md-11 ms-3 ">
            <div class="col-md-3 mt-5">
                <h4 class="">Ordernar por: </h4>
                    <select class="form-select bg-white">
                        <option></option>
                    </select>
</div>
        <div class="text-end">
            <a href="#" class=""><i class="fa-solid fa-user-plus"></i></a>
        </div>
 </div>
    </div>

<div class="d-flex mt-5 col-sm-12 col-md-11 ms-3 mx-3">
    <div class="collapsible-div position-relative text-dark col-md-3 rounded-2 border border-segundary shadow-lg p-3 mx-3">
        <div class="">
            <h3>Nombre</h3>
            <h5>Cargo</h5>
            <a href="#">nombre@uniempresarial.edu.co</a>
</div>
</div>
</div>
@endsection
