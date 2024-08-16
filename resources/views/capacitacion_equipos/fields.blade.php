<!-- Modelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_id', 'Modelo') !!}
    {!! Form::select(
        'modelo_id',
        select(\App\Models\capacitacionModelo::class, 'nombre'),
        ['id' => 'modelo_id', 'class' => 'form-control', 'style' => 'width: 100%']

    ) !!}
</div>

<!-- Marca Id Field -->
<div class="form-group col-sm-6">

    {!! Form::label('marca_id', 'Marca') !!}
    {!! Form::select(
        'marca_id',
        select(\App\Models\capacitacionMarcas::class, 'nombre'),
        ['id' => 'marca_id', 'class' => 'form-control', 'style' => 'width: 100%']

    ) !!}

</div>

<!-- Numero Seriie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_seriie', 'Numero Seriie:') !!}
    {!! Form::text('numero_seriie', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Imei Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imei', 'Imei:') !!}
    {!! Form::text('imei', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Tipos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_id', 'Tipo') !!}
    {!! Form::select(
        'tipo_id',
        select(\App\Models\capacitacion::class, 'nombre'),
        ['id' => 'marca_id', 'class' => 'form-control', 'style' => 'width: 100%']

    ) !!}
</div>
