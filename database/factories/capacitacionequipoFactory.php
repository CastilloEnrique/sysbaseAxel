<?php

namespace Database\Factories;

use App\Models\capacitacionequipo;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\CapacitacionMarca;
use App\Models\CapacitacionModelo;
use App\Models\CapacitacionTipo;

class capacitacionequipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = capacitacionequipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $capacitacionTipo = CapacitacionTipo::first();
        if (!$capacitacionTipo) {
            $capacitacionTipo = CapacitacionTipo::factory()->create();
        }

        return [
            'modelo_id' => $this->faker->word,
            'marca_id' => $this->faker->word,
            'numero_seriie' => $this->faker->text($this->faker->numberBetween(5, 100)),
            'imei' => $this->faker->text($this->faker->numberBetween(5, 100)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
            'tipos_id' => $this->faker->word
        ];
    }
}
