@extends('layouts.app')

@section('titulo_pagina', 'Editar Capacitacion Servicio' )

@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Editar Capacitacion Servicio
                    </h1>
                </div>
                <div class="col ">
                    <a class="btn btn-outline-secondary float-right"
                       href="{{ route('capacitacionServicios.index') }}"
                    >
                        <i class="fa fa-arrow-left"></i>
                        Regresar
                    </a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    @include('layouts.partials.request_errors')

                    <div class="card">

                        {!! Form::model($capacitacionServicio, ['route' => ['capacitacionServicios.update', $capacitacionServicio->id], 'method' => 'patch','class' => 'esperar']) !!}

                        <div class="card-body">
                            <div class="form-row">
                                @include('capacitacion_servicios.fields')
                            </div>
                        </div>

                        <div class="card-footer text-right bg-white border-top">

                            <a href="{{ route('capacitacionServicios.index') }}"
                               class="btn btn-outline-secondary mr-1">
                                <i class="fa fa-ban"></i>
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                Guardar
                            </button>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection