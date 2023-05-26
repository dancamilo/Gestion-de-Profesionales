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
        <form action="ruta_del_script_de_procesamiento.php" method="POST" enctype="multipart/form-data">
            <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' onchange="readURL(this);" accept=".pdf" name="file" />
                <div class="drag-text">
                <h3>Selecciona los PDF a subir</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="{{asset('img/pdf.png')}}" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
   
                </div>
              </div>
            <input type="submit" value="Subir archivos">
        </form>
      </div>
    </div>
  </div>
  <script>
    function readURL(input) {
if (input.files && input.files[0]) {

var reader = new FileReader();

reader.onload = function(e) {
  $('.image-upload-wrap').hide();

  $('.file-upload-image').attr('src', "{{asset('img/pdf.png')}}");
  $('.file-upload-content').show();

  $('.image-title').html(input.files[0].name);
};

reader.readAsDataURL(input.files[0]);

} else {
removeUpload();
}
}

function removeUpload() {
$('.file-upload-input').replaceWith($('.file-upload-input').clone());
$('.file-upload-content').hide();
$('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
$('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
$('.image-upload-wrap').removeClass('image-dropping');
});
function showFileNames() {
      var fileInput = document.getElementById('fileInput');
      var fileNames = document.getElementById('fileNames');
      fileNames.innerHTML = '';

      for (var i = 0; i < fileInput.files.length; i++) {
        var fileName = document.createElement('li');
        fileName.textContent = fileInput.files[i].name;
        fileNames.appendChild(fileName);
      }
    }
</script>
@endsection