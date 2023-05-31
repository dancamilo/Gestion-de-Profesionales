@extends('layouts.app')
@section('content')
    <div class="ms-5 container w-100v">
        <div class="row p-0">
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
                        <a  href="{{route('courses.create')}}" role="button"><i class="fa-solid fa-circle-plus ms-n5"></i></a>
                    </div>
                    <div class="d-flex flex-wrap w-100v">
                        @foreach ($courses as $course)
                        <div class="text-danger" role="button">
                            <div class="my-3 collapsible-div2  position-relative text-dark rounded-0 ps-4 pt-4 pb-2 pe-1 me-5">
                                <div class=" border-left2  position-relative d-flex ">
                                        <a class="w-100 p-4 pt-3" href="{{route('courses.show', $course->id)}}">
                                        
                                            <h3>{{$course->name}}</h3>
                                            <h6>{{$course->profesionals->name}}</h6>  
                                            <div class="progress">
                                                <div class="progress-bar bg-success" style="width:80%">80%</div>
                                            </div>
                                        </a>   
                                        <a class="col-sm-3 text-center mt-4 text-dark" href="{{route('courses.show', $course->id)}}">
                                            <h1>{{$course->term}}</h1>
                                            <p class="mt-3" >Horas Restantes</p>
                                        </a>
                                    
                                    <a type="submit" href="{{route('courses.edit', $course->id)}}" class="text-primary buttons-crud mt-2 h-25"><i class="fa-solid fa-pen me-4"></i>
                                    </a>
                                    <form class="" action="{{route('courses.destroy', $course->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger buttoms-crud bg-white"><i class="fa-solid fa-trash-can "></i></button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection