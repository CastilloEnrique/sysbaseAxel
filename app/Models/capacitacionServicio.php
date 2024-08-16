<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class capacitacionServicio extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'capacitacion_servicios';

    public $fillable = [
        'cliente_id',
        'user_id',
        'estado_id',
        'equipo_id',
        'fecha_recepcion',
        'problema',
        'fecha_diagnostico',
        'diagnostico',
        'fecha_solucion',
        'crearted_at'
    ];

    protected $casts = [
        'fecha_recepcion' => 'date',
        'problema' => 'string',
        'fecha_diagnostico' => 'date',
        'diagnostico' => 'string',
        'fecha_solucion' => 'date',
        'crearted_at' => 'datetime'
    ];

    public static $rules = [
        'cliente_id' => 'required',
        'user_id' => 'required',
        'estado_id' => 'required',
        'equipo_id' => 'required',
        'fecha_recepcion' => 'required',
        'problema' => 'required|string|max:65535',
        'fecha_diagnostico' => 'nullable',
        'diagnostico' => 'nullable|string|max:65535',
        'fecha_solucion' => 'nullable',
        'crearted_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function cliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CapacitacionCliente::class, 'cliente_id');
    }

    public function equipo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CapacitacionEquipo::class, 'equipo_id');
    }

    public function estado(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CapacitacionEstado::class, 'estado_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
