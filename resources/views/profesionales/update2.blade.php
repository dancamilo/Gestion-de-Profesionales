@extends('layouts.app')
@section('content')
<div class=" w-100v mt-3">
    <div class="create-card w-25 me-4 p-4">
        <h3>Añadir profesional</h3>
        <hr width="80%">
        <h4 class="pt-3">Redes sociales</h4>
        <label class="w-100 my-3">
            <input type="radio" class="me-2" name="" id="" autocomplete="off"><i class="fa-brands fa-facebook"></i>Facebook
        </label>
        <label class="w-100 my-3">
            <input type="radio" class="me-2" name="" id="" autocomplete="off"> <i class="fa-brands fa-linkedin"></i>LinkedIn
        </label>
        <label class="w-100 my-3">
            <input type="radio" class="me-2" name="" id="" autocomplete="off"><i class="fa-brands fa-square-instagram "></i>Instagram
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
@endsection