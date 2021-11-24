@extends('layouts.tiny')
@section('contenido')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
        @if(session('info'))
            <div class="alert alert-success" role="alert">
                {{session('info')}}
            </div>
        @endif
        @if(session('delete'))
            <div class="alert alert-success" role="alert">
                {{session('delete')}}
            </div>
        @endif
            <h1 class="page-title">Abogados de la Notaría 11</h1>
            <a href="{{ route('abogado.create') }}" class="row align-items-center">
                <div class="col-auto">
                    <span class="fe fe-download fe-24"></span>
                </div>
                <div class="col">
                    <small><strong>Registrar abogado</strong></small>
                    <div class="my-0 text-muted small">Notaría 11</div>
                </div>
            </a>
            <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- table -->
                            <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <!-- <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dataTable-1_length"><label>Show <select name="dataTable-1_length" aria-controls="dataTable-1" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="16">16</option>
                                                    <option value="32">32</option>
                                                    <option value="64">64</option>
                                                    <option value="-1">All</option>
                                                </select> entries</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable-1"></label></div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table datatables dataTable no-footer" id="dataTable-1" role="grid" aria-describedby="dataTable-1_info">
                                            <thead>
                                                <tr role="row">
                                                    <!-- <th class="sorting_asc" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 6px;"></th> -->

                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.5156px;">Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 49.9375px;">Apellido Paterno</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 94.0469px;">Apellido Materno</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 63.8281px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 107.844px;">Teléfono Celular</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 84.6406px;">Teléfono particular</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 39.0312px;">Código</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 38.9844px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($abogados as $abogado)
                                                <tr role="row" class="odd">
                                                    <!-- <td class="sorting_1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <label class="custom-control-label"></label>
                                                        </div>
                                                    </td> -->

                                                    <td>
                                                        <a href="{{ route('abogado.show', $abogado->id) }}" class="text-danger">
                                                            {{ $abogado->nombre }}
                                                        </a>
                                                    </td>
                                                    <td>{{ $abogado->apellido_paterno }}</td>
                                                    <td>{{ $abogado->apellido_materno }}</td>
                                                    <td>{{ $abogado->email }}</td>
                                                    <td>{{ $abogado->telefono_celular }}</td>
                                                    <td>{{ $abogado->telefono_particular }}</td>
                                                    <td>{{ $abogado->codigo }}</td>
                                                    <td class=""><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ route('abogado.edit', $abogado) }}">Editar</a>

                                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#eliminar-modal" name="{{ $abogado }}" id="{{ $abogado }}">Eliminar</button>


                                                            <!-- <a class="dropdown-item" href="#">Assign</a> -->
                                                        </div>

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dataTable-1_info" role="status" aria-live="polite">Showing 1 to 63 of 63 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable-1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="dataTable-1_previous"><a href="#" aria-controls="dataTable-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="dataTable-1_next"><a href="#" aria-controls="dataTable-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- simple table -->
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminar-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @if (isset($abogado))
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro que deseas eliminar el registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <form action="{{ route('abogado.destroy', $abogado) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-primary">
                        </input>
                    </form>
                    <!-- <button type="button" class="btn btn-primary"></button> -->
                </div>
            </div>
        </div>
        @endif
    </div>
    

</div>
@endsection