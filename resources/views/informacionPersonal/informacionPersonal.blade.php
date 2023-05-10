@extends('layouts.app')
@section('content')

        <div class="row mt-3 row-home">>
            <div class="col-3 mx-1 " >
                <div class="card text-dark">
                    <h2 >Documento:  1034481668415</h2>
                    <hr>
                    <h5>Información personal</h5>
                    <img class="card-img-top" src="{{asset('img/User1.jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">(Nombre)</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni ipsum obcaecati placeat numquam. Quos, labore libero incidunt corporis modi voluptatibus perspiciatis rem officiis numquam harum tempore odit enim voluptatem quisquam!</p>
                        <hr>
                        <div class="row">
                            <h3>Informacion de Contacto</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-5">asd@gmail.com</div>
                            <div class="col-sm-6 mt-5">3216549878</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-5">asd@gmail.com</div>
                            <div class="col-sm-6 mt-5">3216549878</div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-3 mx-1 text-center" >
                <div class="card text-dark">
                    <div class="card-body">
                        <h4 class="card-title mt-3">Informacion academica</h4>
                        <div class="row">
                            <div class="col-sm-5 mt-2 ">Bachiller</div>
                            <div class="col-sm-5 mt-2 ">Colegio</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mt-2 ">Titulo</div>
                            <div class="col-sm-5 mt-2 ">Universidad</div>
                        </div>
                        <button type="button" class="btn btn-danger mt-3 ">Añadir</button>                        
                        <hr class="mt-3">
                        <div class="row">
                        <h4 class="card-title mt-3">Informacion academica</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mt-3 ">Profesor</div>
                            <div class="col-sm-4 mt-3 ">Universidad</div>
                            <div class="col-sm-4 mt-3 ">1 año</div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mt-3 ">Tutor</div>
                            <div class="col-sm-4 mt-3 ">Academia</div>
                            <div class="col-sm-4 mt-3 ">3 años</div>
                        </div>
                        <button type="button" class="btn btn-danger mt-3 ">Añadir</button>                        
                        <hr class="mt-3">
                        <h4 class="card-title mt-3">Informacion academica</h4>
                        <div class="row">
                        <input type="file" class="btn   ">
                        <button type="button" class="btn btn-danger mt-3 ">Añadir</button>                        
                    </div>
                </div>
            </div>
            <div class="col-3 mx-1 " >
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="mt-2">Rol a desempeñar</h5>
                        <h5 class="mt-5">Área especializada</h5>
                        <h5 class="mt-5">Curso 1</h5>
                        <h5 class="mt-5">Curso 2</h5>
                        <button type="button" class="btn btn-danger mt-4">Añadir</button>
                            <hr class="mt-4">
                        <div class="row mt-3">
                            <h3>Informacion de Contacto</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Dia</th>
                                    <th>Hora de Inicio</th>
                                    <th>Hora de fin</th>    
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lunes</td>
                                    <td><input type="time"></td>
                                    <td><input type="time"></td>
                                </tr>
                                <tr>
                                    <td>Martes</td>
                                    <td><input type="time"></td>
                                    <td><input type="time"></td>
                                </tr>
                                <tr>
                                    <td>Miércoles</td>
                                    <td><input type="time"></td>
                                    <td><input type="time"></td>
                                </tr>
                                <tr>
                                    <td>Jueves</td>
                                    <td><input type="time"></td>
                                    <td><input type="time"></td>
                                </tr>
                                <tr>
                                    <td>Viernes</td>
                                    <td><input type="time"></td>
                                    <td><input type="time"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-danger">Editar</button>
                    </div>
                </div>
            </div>
        </div>
@endsection