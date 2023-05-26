@extends('layouts.app')
@section('content')
    <div class="m-0 container w-100v">
        <div class="row ms-5 p-0">
            <div class="col-sm-12 col-md-6">
                <div class="mt-5">
                    <h2>Cursos</h2><hr class="hr mb-5">
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
                    <div class=" mt-n5 add">
                        <a  href="{{route('cursos.create')}}" role="button"><i class="fa-solid fa-circle-plus ms-n5"></i></a>
                    </div>
                    <div class="d-flex flex-wrap w-100v">
                        @foreach ($courses as $course)
                        <a class="text-danger" href="{{route('cursos.show', $course->id)}}" role="button">
                            <div class="my-3 collapsible-div2  position-relative text-dark rounded-0 ps-4 pt-4 pb-2 pe-1 me-5">
                                <div class=" border-left2  position-relative d-flex ">
                                    <div class="w-100 p-4 pt-3">
                                        <h3>{{$course->nombre}}</h3>
                                        <h6>{{$course->id_profesionals}}</h6>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width:80%">80%</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 text-center mt-4 text-dark">
                                        <h1>{{$course->duracion}}</h1>
                                        <p class="mt-3" >Horas Restantes</p>
                                    </div>
                                    <div>
                                        <form action="{{route('cursos.destroy', $course->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger button-delete"><i class="fa-solid fa-trash-can ms-n4"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection