@extends('layouts.default')
@section('titulo_pagina','Mascotas | Perfil de Usuario')
@section('titulo','Mascotas')
@section('subtitulo','Perfil de Usuario')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Perfil de Usuario</h3>
            </div>
            <div class="box-body">

            @if(Session::has('exito'))
                <div class="alert alert-success alert-dismissible" style="margin-top:20px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Exito</h4>
                   Perfil actualizado!
                </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                    soul, like these sweet mornings of spring which I enjoy with my whole heart.
                </div>
                @endif

                <form method="POST" 
                action="{{route('perfil.update',$usuario->id)}}" 
                enctype="multipart/form-data"
                >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" class="form-control" value="{{ $usuario->name }}" type="text">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input class="form-control" type="email" value="{{ $usuario->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input name="foto" class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        @if($usuario->foto)
                        <img src="{{ $usuario->foto }}" style="width: 400px; height: auto;" class="img-responsive">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input name="contraseña" class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <label>Confirmar Contraseña</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection