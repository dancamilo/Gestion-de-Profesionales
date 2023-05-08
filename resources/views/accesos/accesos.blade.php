@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row mt-5">
        <h2>Accesos Usuarios</h2><hr>
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
                            <h4 class="card-title">Nombre</h4>
                            <p class="card-text text-dark">Cargo:</p>
                           <p class="card-text text-dark">Uniempresarial@uniempresarial.edu.co</p>
                        </div>  
                        <div class="col-sm-3 text-dark">
                           <i class="fa-solid fa-user-slash" style="width:200px;"></i>
                        </div> 
                    </div>
                </div>
            </div>
            </div>
            <div class="mt-5">
            <div class="card text-white bg-light mt-5">
                <div class="card-body">
                <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Nombre</h4>
                            <p class="card-text text-dark">Cargo:</p>
                           <p class="card-text text-dark">Uniempresarial@uniempresarial.edu.co</p>
                        </div>  
                        <div class="col-sm-3 text-dark">
                           <i class="fa-solid fa-user-slash" style="width:200px ;"></i>
                        </div> 
                    </div>
                </div>
            </div>
            </div>
            <div class="mt-5">
            <div class="card text-white bg-light mt-5">
                <div class="card-body">
                <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Nombre</h4>
                            <p class="card-text text-dark">Cargo:</p>
                           <p class="card-text text-dark">Uniempresarial@uniempresarial.edu.co</p>
                        </div>  
                        <div class="col-sm-3 text-dark">
                           <i class="fa-solid fa-user-slash" style="width:200px;"></i>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card text-white bg-light mt-5">
                <div class="card-body">
                <div class="row">
                        <div class="col-sm-9">
                            <h4 class="card-title">Nombre</h4>
                            <p class="card-text text-dark">Cargo:</p>
                           <p class="card-text text-dark">Uniempresarial@uniempresarial.edu.co</p>
                        </div>  
                        <div class="col-sm-3 text-dark">
                           <i class="fa-solid fa-user-slash" style="width:200px;"></i>
                        </div> 
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ">
                <div class="container mx-3 bg-gray text-white p-5 mt-5  ">
                <form action="/action_page.php ">
                        <div class="mb-3 mt-3  ">
                            <center><h1 class="text-white">Añadir Usuario</h1></center><br>
                            <center><h3 class="text-white">Nombre del Usuario: </h3></center>
                                <input class="form-control bg-white text-dark" 
                                    id="" placeholder="Ingresar nombre del nuevo usuario: " name="">
                        </div><br>

                        <center><h3 class="text-white">Cargo: </h3></center>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 mt-3 ">
                                    <select class="form-select  bg-white text-dark">
                                        <option>Selecciona un Cargo</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div><br>

                            <center><h3 class="text-white">Correo Institucional: </h3></center>
                            <div class="mb-3 mt-3 ">
                            <input class="form-control bg-white text-dark  " 
                                id="" placeholder="Ingresar nombre del nuevo usuario: " name="">
                            </div><br>

                            <center><h3 class="text-white">Contraseña provisional: </h3></center>
                            <div class="mb-3 mt-3  ">
                                <input class="form-control bg-white text-dark" 
                                    id="" placeholder="Ingresar contraseña nueva: " name="">
                             </div><br>
                        

                            <br><center><button type="submit" class="btn btn-primary">Guardar</button></center><br>
                        </div>
                    </form>
                    
                </div>
            </div>   
         
    </div>
    
</div>        

@endsection