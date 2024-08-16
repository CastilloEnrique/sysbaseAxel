<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class capacitacionequipo extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'capacitacion_equipos';

    public $fillable = [
        'modelo_id',
        'marca_id',
        'numero_seriie',
        'imei',
        'tipos_id'
    ];

    protected $casts = [
        'numero_seriie' => 'string',
        'imei' => 'string'
    ];

    public static $rules = [
        'modelo_id' => 'required',
        'marca_id' => 'required',
        'numero_seriie' => 'required|string|max:100',
        'imei' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'tipos_id' => 'required'
    ];

    public static $messages = [

    ];

    public function marca(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CapacitacionMarca::class, 'marca_id');
    }

    public function modelo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CapacitacionModelo::class, 'modelo_id');
    }

    public function tipos(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\CapacitacionTipo::class, 'tipos_id');
    }

    public function capacitacionServicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\CapacitacionServicio::class, 'equipo_id');
    }
}
