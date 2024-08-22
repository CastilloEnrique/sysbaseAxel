<!-- Modelo Id Field -->
<div class="col-sm-12">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    <p>{{ $capacitacionEquipo->modelo->nombre }}</p>
</div>

<!-- Marca Id Field -->
<div class="col-sm-12">
    {!! Form::label('marca_id', 'Marca Id:') !!}
    <p>{{ $capacitacionEquipo->marca->nombre }}</p>
</div>

<!-- Numero Seriie Field -->
<div class="col-sm-12">
    {!! Form::label('numero_seriie', 'Numero Seriie:') !!}
    <p>{{ $capacitacionEquipo->numero_seriie }}</p>
</div>

<!-- Imei Field -->
<div class="col-sm-12">
    {!! Form::label('imei', 'Imei:') !!}
    <p>{{ $capacitacionEquipo->imei }}</p>
</div>

<!-- Tipos Id Field -->
<div class="col-sm-12">
    {!! Form::label('tipos_id', 'Tipos Id:') !!}
    <p>{{ $capacitacionEquipo->tipos->nombre}}</p>
</div>

