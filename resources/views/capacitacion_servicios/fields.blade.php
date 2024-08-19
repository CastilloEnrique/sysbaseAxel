<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clientes_id','Cliente:') !!}
    {!!
        Form::select(
            'clientes_id',
            select(\App\Models\CapacitacionMarca::class, 'nombre')
            , null
            , ['id'=>'models','class' => 'form-control','style'=>'width: 100%']
        )
    !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    {!! Form::number('estado_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    {!! Form::number('equipo_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fecha Recepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recepcion', 'Fecha Recepcion:') !!}
    {!! Form::text('fecha_recepcion', null, ['class' => 'form-control','id'=>'fecha_recepcion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_recepcion').datepicker()
    </script>
@endpush

<!-- Problema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('problema', 'Problema:') !!}
    {!! Form::textarea('problema', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Fecha Diagnostico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_diagnostico', 'Fecha Diagnostico:') !!}
    {!! Form::text('fecha_diagnostico', null, ['class' => 'form-control','id'=>'fecha_diagnostico']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_diagnostico').datepicker()
    </script>
@endpush

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Fecha Solucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_solucion', 'Fecha Solucion:') !!}
    {!! Form::text('fecha_solucion', null, ['class' => 'form-control','id'=>'fecha_solucion']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_solucion').datepicker()
    </script>
@endpush

<!-- Crearted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crearted_at', 'Crearted At:') !!}
    {!! Form::text('crearted_at', null, ['class' => 'form-control','id'=>'crearted_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#crearted_at').datepicker()
    </script>
@endpush
