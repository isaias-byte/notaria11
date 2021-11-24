@extends('layouts.tiny')
@section('contenido')
    <h1 class="text-center">En la Notaría 11 y 108 queremos ayudarte</h1>
    <br>
    <h2>Estamos conscientes que puedes tener alguna duda, por tal motivo te invitamos a que des click en el siguiente enlace. Automáticamente se enviará un correo a uno de nuestros abogados, el cual con gusto se contactará personalmente contigo para brindarte ayuda en lo que necesites</h2>
    <br>
    <br>
    <div class="text-center">
        <a href="{{ route('duda-correo') }}" class="btn mb-2 btn-outline-warning">Enviar Correo</a>
        <br>
        <br>
        <p class="small mb-0 text-muted">Notaría 11</p>
        <p class="small mb-0 text-muted">Avenida Libertad Número 1828. Colonia Americana</p>
        <p class="small mb-0 text-muted">Guadalajara, Jalisco, México. C.P. 44160</p>
    </div>
@endsection