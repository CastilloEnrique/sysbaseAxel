<!-- Modelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    {!! Form::number('modelo_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Marca Id Field -->
<div class="form-group col-sm-6">

    {!! Form::label('marca_id', 'Asignar Notario:') !!}
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
    {!! Form::label('tipos_id', 'Tipos Id:') !!}
    {!! Form::number('tipos_id', null, ['class' => 'form-control', 'required']) !!}
</div>
