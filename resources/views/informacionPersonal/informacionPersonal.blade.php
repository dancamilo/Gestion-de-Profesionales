@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-12">
      <div class="card text-dark">
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
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-12">
    <div class="card text-dark">
          <h3 class="title">Informacion Academica</h>
      <ul>
        <li>Bachiller</li>
        <li>Titutlo Universitario</li>
      </ul>
      <button>Añadir</button>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12">
        <div class="card text-dark">
           <h3 class="Experiencia laboral"></h3>
      <ul>
         <li>Profesor - Universidad - 2 años</li>
         <li>Tutor -  Universidad - 1 años</li>
      </ul>              
      <button>Añadir</button>
    </div>
      <h3>Documentos requeridos</h3>
       <input type="file">
       <button type="submit">Añadir></button>
    </form>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-12">
    <div class="card text-dark">
      <h3 class="title">Rol a desempeñar</h3>
      <p>Area especializada</p>
      <ul>
        <li>curso 1 </li>
        <li>curso 2 </li>
      </ul>
      <button>Añadir</button>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-12">
      <div class="card text-dark">
        <h3>Horario</h3>
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
    <button>Añadir</button>
  </div>
</div>


@endsection
