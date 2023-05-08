@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-4 "><br>

        <h2>RUT: 123456789</h2><hr>
        <h3>Informacion principal</h3>
        <img src="" alt="">
        <h5>Nombre:</h5>
        <h5>Razon social</h5><hr>
        <div class="table-responsive ">
            <table class="">
                <thead>
                    <tr>
                        <th scope="">Nit: </th>
                        <th scope="">Codigo de verificacion: </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="">Colombia</td>
                        <td>Actividad economica</td>
                    </tr>
                    <tr class="">
                        <td scope="">Direccion</td>
                        <td>Localidad</td>
                    </tr>
                    <tr>
                        <td>400 empleados</td>
                        <td>Mediana</td>
                    </tr>
                    <tr>
                        <td>Digital</td>
                        <td>123456</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.w3schools.com/html/html_links.asp">UWu</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-4"><br>
        <h4>Informacion de contacto de empresa</h4><hr>
        <div class="table-responsive">
        <table>
            <tbody>
                <tr>
                    <td>C.c:   </td>
                    <td>123456789</td>
                </tr>
                <tr>
                    <td>cargo: </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Area especializada: </td>
                </tr>
                <tr>
                    <td>123456789</td>
                    <td>"(+57)312427986"</td>
                </tr>
                <tr>
                    <td><a href="https://www.w3schools.com/html/html_links.asp">UWu</a></td>
                    <td><a href="https://www.w3schools.com/html/html_links.asp">UWu</a></td>
                </tr>
            </tbody>
        </table> </div><hr>

        <h4>Documentos requeridos</h4>
        <div class="table-responsive">
        <table class="">
            <thead>
                <th><img src="" alt="">Img1</th>
                <th><img src="" alt="">img 2</th>
                <th><img src="" alt="">img 3</th>
            </thead>
        </table>
    </div>
        <button type="submit" class="btn btn-danger">Descargar</button>


    </div><br>
    <div class="col-sm-4"><br>
        <h4>Rol a desempeñar</h4><hr>
            <ul>Area especializada</ul>
            <ul>Curso 1</ul>
            <ul>curso 2</ul>
            <ul>Profesional encargardo</ul><hr>
        <h5>Observaciones</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam sapiente ea cum fuga. Voluptatem magni facere accusantium commodi dolorem rem ipsa, accusamus dignissimos perferendis explicabo, vero recusandae et quasi!</p>
        <button  class="btn btn-danger">Editar</button>
    </div>
  </div>

@endsection