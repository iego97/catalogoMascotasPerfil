@extends('layouts.default')
@section('titulo_pagina','Mascotas | Agregar Mascota')
@section('titulo','Mascotas')
@section('subtitulo','Agregar mascota')
@section('contenido')
    <form action="{{route('mascotas.store')}}" method="post" role="form">
    @csrf
        <div class="form-group">
            <label>Especie</label>  
            <select class="form-control" name="especie" required>
                <option disabled selected value="">Elige una especie</option>
                @foreach($especies as $especie)
                    <option value="{{$especie->ID}}">{{$especie->Nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Nombre de la mascota" required>
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input class="form-control" type="text" name="precio" placeholder="Precio de la mascota" required>
        </div>
        <div class="form-group">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="date" name="nacimiento" required>
        </div>
        <button type="submit" class="btn btn-default">Crear nueva mascota </button>
    </form>
@endsection
