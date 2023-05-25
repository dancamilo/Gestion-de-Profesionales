@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">
                <h2>Certificados</h2><hr>
                <div class="row mt-3">
                    <div class="col-sm-2 text-dark p-0 w-70 ms-2 ">
                        <h5 class="ms-2 me-1 w-100v">Cusos completados:</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex">
            <div class="col-sm-12 col-md-6">
                <div class="d-flex mt-4 ms-1 my-3">
                    <div class="text-dark">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 ms-1" id="radio1">
                        <div class=" row ms-0 border-left2 d-flex position-relative">
                            <div class="p-4 w-100 me-5 col-sm-9">
                                <h3>Curso 1</h3>
                                <h5>Profesional encargado</h5>
                                <div class="progress w-100">
                                    <div class="progress-bar bg-success" style="width:100%">100%</div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
                <div class="d-flex mt-4 ms-1 my-3">
                    <div class="text-dark">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option1">
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 ms-1" id="radio2">
                        <div class=" row ms-0 border-left2 d-flex position-relative">
                            <div class="p-4 w-100 me-5 col-sm-9">
                                <h3>Curso 2</h3>
                                <h5>Profesional encargado</h5>
                                <div class="progress w-100">
                                    <div class="progress-bar bg-success" style="width:100%">100%</div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
                <div class="d-flex mt-4 ms-1 my-3">
                    <div class="text-dark">
                        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option1">
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 ms-1" id="radio3">
                        <div class=" row ms-0 border-left2 d-flex position-relative">
                            <div class="p-4 w-100 me-5 col-sm-9">
                                <h3>Curso 4</h3>
                                <h5>Profesional encargado</h5>
                                <div class="progress w-100">
                                    <div class="progress-bar bg-success" style="width:100%">100%</div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
                <div class="d-flex mt-4 ms-1 my-3">
                    <div class="text-dark">
                        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option1" >
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="collapsible-div2 position-relative text-dark rounded-0 p-4 pb-0 ms-1" id="radio4">
                        <div class=" row ms-0 border-left2 d-flex position-relative">
                            <div class="p-4 w-100 me-5 col-sm-9">
                                <h3>Curso 6</h3>
                                <h5>Profesional encargado</h5>
                                <div class="progress w-100">
                                    <div class="progress-bar bg-success" style="width:100%">100%</div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                </div> 
            </div>
            <div>
                
            </div>
        </div>
</div>        

@endsection