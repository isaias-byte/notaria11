@extends('layouts.tiny')
@section('contenido')
<a href="{{ route('abogado.index') }}" class="btn mb-2 btn-outline-danger">Ver todos los registros</a>
<div class="row mt-5 align-items-center">
    <div class="col-md-3 text-center mb-5">
        <div class="avatar avatar-xl">
            <img src="{{ asset('assets/images/lawyer.png') }}" alt="lawyer" class="avatar-img rounded-circle">
        </div>
    </div>
    <div class="col">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h4 class="mb-1">{{ $abogado->nombre }}</h4>
                <p class="small mb-3"><span class="badge badge-dark">{{ $abogado->codigo }}</span></p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-7">
                <!-- <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p> -->
                <ul>
                    <li>Apellido Paterno: {{ $abogado->apellido_paterno }}</li>
                    <li>Apellido Materno: {{ $abogado->apellido_materno }}</li>
                    <li>Email: {{ $abogado->email }}</li>
                    <li>Telefono Celular: {{ $abogado->telefono_celular }}</li>
                    <li>Telefono Particular: {{ $abogado->telefono_particular }}</li>
                    <li>Código: {{ $abogado->codigo  }}</li>
                </ul>
            </div>
            <div class="col">
                <p class="small mb-0 text-muted">Notaría 11</p>
                <p class="small mb-0 text-muted">Avenida Libertad Número 1828. Colonia Americana</p>
                <p class="small mb-0 text-muted">Guadalajara, Jalisco, México. C.P. 44160</p>
            </div>
        </div>

    </div>


</div>
<div class="container-fluid">
    <div class="card-deck">
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Servicios</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('abogado.servicio', $abogado) }}" method="POST">
                    @csrf 
                    <div class="form-group">
                        <label for="servicio_id">Nombre de los Servicios</label>
                        <select id="servicio_id" name="servicio_id[]" class="form-control" multiple="">
                            @foreach ($servicios as $servicio)
                                <option value="{{ $servicio->id }}" {{ array_search($servicio->id, $abogado->servicios->pluck('id')->toArray()) !== false ? 'selected' : ''}}>{{ $servicio->nombre }}</option>
                            @endforeach
                        </select>
                        @error('servicio_id')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <!-- <input type="hidden" name="servicio_id" value="{{ $servicio->id }}"> -->
                    
                    <button type="submit" class="btn btn-primary">Actualizar Servicios</button>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Servicios Seleccionados</strong>
            </div>
            <div class="card-body">
                <ul>
                    @foreach ($abogado->servicios as $servicio)
                        <li>{{ $servicio->nombre }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection