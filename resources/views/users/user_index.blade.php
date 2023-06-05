@extends('layouts.app')
@section('content')
<div class="content">
    <div class="mt-5">
        <h2 class="text-center text-danger mt-5">Acceso usuarios</h2>
        <div class="col-sm-12 col-md-11 ms-3 ">
            <div class="col-md-3 mt-5">
                <h4 class="">Ordernar por: </h4>
                    <select class="form-select bg-white">
                        <option></option>
                    </select>
</div>
        <div class="text-end">
            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-user-plus"></i>
            </button>
        </div>
        
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="staticBackdropLabel">Añadir usuario</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('users.index')}}" method="POST">
                    @csrf
                    <div class="modal-body p-5">
                    
                        <label class="form-label text-dark" >Nombre del usuario</label>
                        <input name="name" type="text" class="form-control text-dark mb-4">
                        <label class="form-label text-dark" >Cargo</label>
                        <select name="id_rols"  class="form-control text-dark mb-4">
                            <option selected> Seleccione un cargo</option>
                            @foreach($user as $users)
                            <option value="{{$users->id}}">{{$users->rols->rol}}</option>
                            @endforeach
                        </select>
                        <label class="form-label text-dark" >Correo institucional</label>
                        <input name="email" type="text" class="form-control text-dark mb-4">
                        <label class="form-label text-dark" >Contraseña provisional</label>
                        <input name="password" type="password" class="form-control text-dark mb-4">
                    
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
 </div>
    </div>
    @foreach ($user as $users)
    <div class="d-flex mt-5 col-sm-12 col-md-11 ms-3 mx-3 mb-5">
        <div class="collapsible-div position-relative text-dark col-md-3 rounded-2 border border-segundary shadow-lg p-3 mx-3">
            <div class="">
                <h3>{{$users->name}}</h3>
                <h5>{{$users->rols->rol}}</h5>
                <a href="#">{{$users->email}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
