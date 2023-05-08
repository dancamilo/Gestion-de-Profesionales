@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="mt-5">
                    <h2>Cursos</h2><hr>
                    <div class="row">
                        <div class="col-sm-2 text-dark">
                            <p>Ordernar por:</p>
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
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 1</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                            <span class="rounded-pill bg-warning por-70 text-dark">70%</span>
                            <span class="rounded-pill bg-danger por-50 text-dark" > 50%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <h1>30</h1>
                            <p >Horas Restantes</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 1</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                            <span class="rounded-pill bg-warning por-70 text-dark">70%</span>
                            <span class="rounded-pill bg-danger por-50 text-dark" >50%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <h1>30</h1>
                            <p>Horas Restantes</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 1</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                            <span class="rounded-pill bg-warning por-70 text-dark">70%</span>
                            <span class="rounded-pill bg-danger por-50 text-dark">50%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <h1>30</h1>
                            <p>Horas Restantes</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Curso 1</h4>
                            <p class="card-text text-dark">Profesional encargado:</p>
                            <span class="rounded-pill bg-success por-100 text-dark">100%</span>
                            <span class="rounded-pill bg-warning por-70 text-dark">70%</span>
                            <span class="rounded-pill bg-danger por-50 text-dark">50%</span>
                        </div>
                        <div class="col-sm-3 text-dark">
                            <h1>30</h1>
                            <p>Horas Restantes</p>
                        </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <div class="container mx-3 bg-gray text-white p-5 mt-5">
                    <form action="/action_page.php ">
                        <div class="mb-3 mt-3  ">
                            <center><h1 class="text-white">Añadir Cursos</h1></center>
                            <center><h3 class="text-white">Nombre del Curso: </h3></center>
                            <input class="form-control bg-white text-dark  " 
                                id="" placeholder="Ingresar nombre del nuevo curso: " name="">
                        </div>

                        <center><h3 class="text-white">Profesional encargado: </h3></center>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 mt-3  ">
                                    <select class="form-select  bg-white text-dark">
                                        <option>Area</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3 mt-3 ">
                                    <select class="form-select  bg-white text-dark">
                                        <option>Selecciona un Profesional</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>

                            <center><h3 class="text-white">Empresa relacionada: </h3></center>
                            <div class="mb-3 mt-3 ">
                                    <select class="form-select  bg-white text-dark">
                                        <option>Selecciona la empresa</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                            </div>

                            <center><h3 class="text-white">Fechas: </h3></center>
                            <div class="row py-3">
                                <div class="col-md-6 mx-auto">
                                  <div class="row">
                                    <div class="col-lg-6 mx-auto col-md-8 col-sm-5">
                                      <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        <input class="form-control datepicker" placeholder="Please select date" type="text" >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                                <!-- initialization script -->
                              <script>
                                if (document.querySelector(".datepicker")) {
                                   flatpickr(".datepicker", {});
                                }
                              </script>


                        </div>
                        

                        <center><button type="submit" class="btn btn-primary">Guardar</button></center>
                    </form>
                </div>
            </div>
        </div>   
    </div>
@endsection