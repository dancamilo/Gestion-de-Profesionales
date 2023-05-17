@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <h2>Historial certificados</h2><hr>
                    <div class="row">
                        <div class="col-sm-2 text-dark">
                            <p>Ordernar por:</p>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-select bg-white">
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
        </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mt-5">   
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title text-danger">Certificados 123456</h4>
                            <h5 class="card-text text-dark">curso 1</h5>
                            <p class="card-text text-dark">Emitido el: 22/12/2022</p>
                            <p class="card-text text-dark">Emitido por: Nombre usuario</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title text-danger">Certificados 123456</h4>
                            <h5 class="card-text text-dark">curso 1</h5>
                            <p class="card-text text-dark">Emitido el: 22/12/2022</p>
                            <p class="card-text text-dark">Emitido por: Nombre usuario</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title text-danger">Certificados 123456</h4>
                            <h5 class="card-text text-dark">curso 1</h5>
                            <p class="card-text text-dark">Emitido el: 22/12/2022</p>
                            <p class="card-text text-dark">Emitido por: Nombre usuario</p>
                            
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card text-white bg-light mt-5">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title text-danger">Certificados 123456</h4>
                            <h5 class="card-text text-dark">curso 1</h5>
                            <p class="card-text text-dark">Emitido el: 22/12/2022</p>
                            <p class="card-text text-dark">Emitido por: Nombre usuario</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
            <div class="col-sm-12 col-md-6 ">
                
                <div class="container mx-3 bg-gray text-white p-5 mt-5">
                <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Descargar</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Imprimir</button>  
                        </div>
                    
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection