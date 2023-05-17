@extends('layouts.app')
@section('content')
    <div class=" container">
        <div class="ms-n5 row p-0">
            <div class="ms-n5 col-sm-12 col-md-6">
                <div class="mt-5">
                    <h2>Cursos</h2><hr class="hr mb-4">
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
                    <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Curso 1</h3>
                                <h6>Profesor encargado</h6>  
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:80%">80%</div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center mt-4 text-dark">
                                <h1>30</h1>
                                <p class="mt-3" >Horas Restantes</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Curso 2</h3>
                                <h6>Profesor encargado</h6>  
                                <div class="progress">
                                    <div class="progress-bar bg-orange" style="width:60%">60%</div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center mt-4 text-dark">
                                <h1>50</h1>
                                <p class="mt-3" >Horas Restantes</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Curso 3</h3>
                                <h6>Profesor encargado</h6>  
                                <div class="progress">
                                    <div class="progress-bar" style="width:35%">35%</div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center mt-4 text-dark">
                                <h1>70</h1>
                                <p class="mt-3" >Horas Restantes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-5 col-sm-12 col-md-6">
                <div class="m-cursos">
                    <i class="fa-solid fa-circle-plus"></i>
                    <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Curso 1</h3>
                                <h6>Profesor encargado</h6>  
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width:80%">80%</div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center mt-4 text-dark">
                                <h1>30</h1>
                                <p class="mt-3" >Horas Restantes</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-2 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Curso 2</h3>
                                <h6>Profesor encargado</h6>  
                                <div class="progress">
                                    <div class="progress-bar bg-orange" style="width:60%">60%</div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center mt-4 text-dark">
                                <h1>50</h1>
                                <p class="mt-3" >Horas Restantes</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 collapsible-div2 position-relative text-dark rounded-0 p-4 pb-2">
                        <div class=" border-left2 d-flex position-relative">
                            <div class="p-4 pt-3">
                                <h3>Curso 3</h3>
                                <h6>Profesor encargado</h6>  
                                <div class="progress">
                                    <div class="progress-bar" style="width:35%">35%</div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center mt-4 text-dark">
                                <h1>70</h1>
                                <p class="mt-3" >Horas Restantes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>   
    </div>
@endsection