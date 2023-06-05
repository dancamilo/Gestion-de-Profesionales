@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@endsection
@section('content')
<div class="container">
        <h1 class="text-center text-danger mt-5 mb-5">Profesionales</h1>
        <!--
        <div class="d-flex col-sm-12 col-md-11">
            <div class="col-md-6 mt-5">
                <h4 class="">Ordernar por: </h4>
                <select class="form-select bg-white">
                    <option></option>
                </select>
            </div>
            <div class="text-end fs-1 mt-5">
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
            </div>
        </div>
    <div class="d-flex">
            <div class="nav-item  mt-5 mb-5">
                <a class="collapsible-button text-start px-4 py-3 ms-0" data-bs-toggle="collapse" data-bs-target="#demo">
                    Perfil<i class="fa-solid fa-chevron-down"></i></a>
                <div id="demo" class="collapse">
                    <div class="collapsible-div position-relative text-dark rounded-0 p-4 pb-0">
                        <div class="ms-0 border-left d-flex position-relative">
                            <div class="p-4">
                                <h3>Nombre</h3>
                                <h5>Curso 1</h5>
                                <a href="#">nombre@uniempresarial.edu.co</a>
                            </div>
                            <div>
                                <img class="rounded-circle" src="{{asset('img/User1.jpg')}}" alt="">
                            </div>
                        </div>
                        <hr class=".hr">
                    </div>
                </div>


        </div>
    </div>-->
</div>


@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
  
  $(document).ready(function(){
    $('#myTable').DataTable();
  });

</script>
@endsection