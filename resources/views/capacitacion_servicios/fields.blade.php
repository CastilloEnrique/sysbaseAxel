<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente') !!}

    {!!
    Form::select(
        'cliente_id',
        select(\App\Models\CapacitacionCliente::class, 'NombreCompleto'),
        null,
        ['id' => 'cliente_id', 'class' => 'form-control', 'required'])

 !!}
</div>

{{--<!-- User Id Field -->--}}
{{--    <div class="form-group col-sm-6">--}}
{{--        {!! Form::label('user_id', __('Username')) !!}--}}
{{--        {!! Form::text('user_name', Auth::user()->name,--}}
{{--        ['id'=>'user_name', 'class' => 'form-control', 'readonly' => 'readonly']) !!}--}}
{{--        {!! Form::hidden('user_id', Auth::user()->id) !!}--}}


{{--</div>--}}
{{--</div>--}}

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    {!!
    Form::select(
        'estado_id',
        select(\App\Models\CapacitacionEstado::class, 'nombre'),
        null,
        ['id' => 'estado_id', 'class' => 'form-control', 'required'])

 !!}
</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo') !!}
    {!!
    Form::select(
        'equipo_id',
        select(\App\Models\CapacitacionEquipo::class, 'Texto'),
        null,
        ['id' => 'equipo_id', 'class' => 'form-control', 'required'])
!!}
</div>

<!-- Fecha Recepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recepcion', 'Fecha Recepcion:') !!}
    {!! Form::date('fecha_recepcion', null, ['class' => 'form-control','id'=>'fecha_recepcion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_recepcion').datepicker()
    </script>
@endpush

<!-- Problema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('problema', 'Problema:') !!}
    {!! Form::textarea('problema', null, ['class' => 'form-control', 'required', 'maxlength' => 65535]) !!}
</div>

<!-- Fecha Diagnostico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_diagnostico', 'Fecha Diagnostico:') !!}
    {!! Form::date('fecha_diagnostico', null, ['class' => 'form-control','id'=>'fecha_diagnostico']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_diagnostico').datepicker()
    </script>
@endpush

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control',  'maxlength' => 65535]) !!}
</div>

<!-- precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Solucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_solucion', 'Fecha Solucion:') !!}
    {!! Form::date('fecha_solucion', null, ['class' => 'form-control','id'=>'fecha_solucion']) !!}
</div>


@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_solucion').datepicker()
    </script>
@endpush

