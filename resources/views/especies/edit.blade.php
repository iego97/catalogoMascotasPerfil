@extends('layouts.default')
@section('titulo_pagina','Especies | Edición de Especies')
@section('titulo','Especies')
@section('subtitulo','Ediciñón de Especies')
@section('contenido')
    <form action="{{route('especies.update',$especie->ID)}}" method="post" role="form">
    @csrf
    @method('PUT')
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre de la especie" value="{{$especie->Nombre}}" required>
    <br />
    <button type="submit" class="btn btn-default ">Actualizar especie </button>
    </form>
@endsection