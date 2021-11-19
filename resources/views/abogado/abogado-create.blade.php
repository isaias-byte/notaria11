@extends('layouts.tiny')
@section('contenido')

@if (isset($abogado))
<h1 class="page-title">Editar abogado</h1>
<br>
<div class="mb-2">
    <a href="{{ route('abogado.index') }}" class="btn mb-2 btn-outline-danger">Cancelar</a>
</div>
<form action="{{ route('abogado.update', $abogado) }}" method="POST">


    @method('PATCH')
    @else
    <h1 class="page-title">Registro de abogado</h1>
    <br>
    <div class="mb-2">
        <a href="{{ route('abogado.index') }}" class="btn mb-2 btn-outline-danger">Cancelar</a>
    </div>
    <form action="{{ route('abogado.store') }}" method="POST" enctype="multipart/form-data">
        @endif

        @csrf
        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <!-- <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp1" required=""> -->
            <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') ?? $abogado->nombre ?? '' }}">
            @error('nombre')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" class="form-control @error('apellido_paterno') is-invalid @enderror" value="{{ old('apellido_paterno') ?? $abogado->apellido_paterno ?? '' }}">
            @error('apellido_paterno')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" id="apellido_materno" name="apellido_materno" class="form-control @error('apellido_materno') is-invalid @enderror" value="{{ old('apellido_materno') ?? $abogado->apellido_materno ?? '' }}">
            @error('apellido_materno')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $abogado->email ?? '' }}">
            @error('email')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="telefono_celular">Teléono Celular</label>
            <input type="text" id="telefono_celular" name="telefono_celular" class="form-control @error('telefono_celular') is-invalid @enderror" value="{{ old('telefono_celular') ?? $abogado->telefono_celular ?? '' }}">
            @error('telefono_celular')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="telefono_particular">Teléfono Particular</label>
            <input type="text" id="telefono_particular" name="telefono_particular" class="form-control @error('telefono_particular') is-invalid @enderror" value="{{ old('telefono_particular') ?? $abogado->telefono_particular ?? '' }}">
            @error('telefono_particular')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="codigo">Codigo</label>
            <input type="text" id="codigo" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo') ?? $abogado->codigo ?? '' }}">
            @error('codigo')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <!-- <label for="archivo"></label> -->
            <label for="archivo">Fotografía del abogado</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('archivo') is-invalid @enderror" id="archivo" name="archivo">
                <label class="custom-file-label" for="imagen2">Escoge un archivo</label>
            </div>
            <!-- <input type="file" name="archivo"> -->
            @error('archivo')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <button type="submit" class="btn mb-2 btn-primary">
            <span class="fe fe-download fe-16"><span></span>
                Guardar
            </span>
        </button>
    </form>
    @endsection