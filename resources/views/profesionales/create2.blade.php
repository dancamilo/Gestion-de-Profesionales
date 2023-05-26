@extends('layouts.app')
@section('content')
<div class="container-fluid mt-3">
    <div class="row">
      <div class="col p-3   ">
        <div class=" w-32v mt-3">
            <div class="create-card w-100 me-4 p-4">
                <h3>Añadir profesional</h3>
                <hr width="30%">
                <h4 class="pt-3">Redes sociales</h4>
                <label class="w-100 my-3">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off"><i class="fa-brands fa-facebook"></i>Facebook
                </label>
                <label class="w-100 my-3">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off"> <i class="fa-brands fa-linkedin"></i>LinkedIn
                </label>
                
                <label class="w-100 my-3">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off"><i class="fa-brands fa-youtube text-danger"></i>Youtube
                </label>
                <label class="w-100 my-3 text-dark">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off"> <i class="fa-brands fa-github"></i>Github
                </label>
                <label class="w-100 my-3">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off"><i class="fa-brands fa-twitter"></i>Twitter
                </label>
                <label class="w-100 my-3">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off"><i class="fa-brands fa-tiktok"></i>Tik tok
                </label>
                <label class="w-100 my-3">
                    <input type="radio" class="me-2" name="" id="" autocomplete="off">No tiene
                </label>
            </div>
        </div>

      </div>
      <div class="col p-3">
        <h2><i class="fa-brands fa-facebook"></i>Facebook</h2>
        <input type="text" class="form-control" id="enlace" class="my-3" >
        
        <h2><i class="fa-brands fa-linkedin"></i>LinkedIn</h2>
        <input type="text"class="form-control" id="enlace2" class="my-3">
        
        <h2><i class="fa-brands fa-square-instagram "></i>Instagram</h2>
        <input type="text" class="form-control" id="enlace3" class="my-3">
        
        <h2><i class="fa-brands fa-youtube text-danger"></i>Youtube </h2>
        <input type="text" class="form-control" id="enlace4" class="my-3">
      
      </div>
      <div class="col p-3">
        <title>Subir archivos PDF</title>
        <style>
            .pdf-icon {
                width: 50px;
                height: 50px;
                background-image: url('ruta_al_icono_pdf.png');
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <h1>Subir archivos PDF</h1>
        <form action="{{route('download')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-5">
            <label for="formFileSm" class="form-label text-dark">Cuenta Bancaria</label>
            <input class="form-control form-control-lg bg-dark" id="formFile" accept=".pdf" type="file" name="CB" required>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label text-dark">Hoja de Vida</label>
            <input class="form-control form-control-lg bg-dark" id="formFile" accept=".pdf" type="file" name="CV" required>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label text-dark">Certificado de EPS</label>
            <input class="form-control form-control-lg bg-dark" id="formFile" accept=".pdf" type="file" name="EPS" required>
        </div>
            <input type="submit" value="Subir archivos">
        </form>
        
      </div>
    </div>
  </div>
 
@endsection