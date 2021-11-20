@extends('layouts.tiny')
@section('contenido')
<!-- <h1>Hola</h1> -->
    <h1>Servicios de la Notaría</h1>
        <div class="row">
            @foreach ($servicios as $servicio)
            @php
                $cont = rand(1, 5)
            @endphp
            <div class="col-md-4 my-4">
                <div class="card shadow">
                    <div class="card-body text-center" style="position: relative;">
                        <div id="radialbar" style="min-height: 178.7px;">
                            <!-- <h1>Hola</h1>
                            <h2>Adios</h2> -->
                            <h1>{{ $servicio->nombre }}</h1>
                            @switch($cont)
                                @case(1)
                                    <img src="{{ asset('assets/services/service-1.png') }}" alt="" class="img-fluid w-50">
                                    @break
                                @case(2)
                                    <img src="{{ asset('assets/services/service-2.png') }}" alt="" class="img-fluid w-50">
                                    
                                @break
                                @case(3)
                                    <img src="{{ asset('assets/services/service-3.png') }}" alt="" class="img-fluid w-50">
                                    
                                @break
                                @case(4)
                                    <img src="{{ asset('assets/services/service-4.png') }}" alt="" class="img-fluid w-50">
                                    
                                @break
                                @case(5)
                                    <img src="{{ asset('assets/services/service-5.png') }}" alt="" class="img-fluid w-50">
                                    
                                @break
                                @default
                                    
                            @endswitch
                            <br>
                            {{ $servicio->descripcion }}
                        </div>
                        <!-- <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 197px; height: 160px;">
                                </div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div> -->
                    </div> <!-- / .card-body -->
                </div> <!-- / .card -->
            </div> <!-- /. col -->
        @endforeach
@endsection