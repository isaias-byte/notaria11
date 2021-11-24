@extends('layouts.tiny')
@section('contenido')

<h1>Abogados</h1>
<div class="row">
    @foreach ($abogados as $abogado)
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <div class="avatar avatar-lg mt-4">
                    <a href="#">
                        <img src="{{ asset('storage/fotografias/'.$abogado->imagen_original) }}" alt="{{ $abogado->nombre }}" class="avatar-img rounded-circle">
                    </a>
                </div>
                <div class="card-text my-2">
                    <strong class="card-title my-0">{{ $abogado->nombre_completo }}</strong>
                    <p class="small text-muted mb-0">Notaría 11 y 108</p>
                    <p class="small"><span class="badge badge-light text-muted">Asesoría Legal</span></p>
                    <ul>
                        <li>Email: {{ $abogado->email }}</li>
                        <li>Telefono Celular: {{ $abogado->telefono_celular }}</li>
                        <li>Telefono Particular: {{ $abogado->telefono_particular }}</li>
                    </ul>
                </div>
            </div> <!-- ./card-text -->
            <!-- <div class="card-footer">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <small>
                            <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                    </div>
                    <div class="col-auto">
                        <div class="file-action">
                            <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu m-2">
                                <a class="dropdown-item" href="#"><i class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                                <a class="dropdown-item" href="#"><i class="fe fe-message-circle fe-12 mr-4"></i>Chat</a>
                                <a class="dropdown-item" href="#"><i class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                                <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  -->
            <!-- /.card-footer -->
        </div>
    </div> <!-- .col -->
    @endforeach
    <div class="col-md-9">
    </div> <!-- .col -->
</div>
@endsection