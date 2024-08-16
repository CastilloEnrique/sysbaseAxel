<?php

namespace Database\Factories;

use App\Models\capacitacioncliente;
use Illuminate\Database\Eloquent\Factories\Factory;


class capacitacionclienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = capacitacioncliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'nombres' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'Apellidos' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'telefono' => $this->faker->text($this->faker->numberBetween(5, 8)),
            'direccion' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'cui' => $this->faker->text($this->faker->numberBetween(5, 13))
        ];
    }
}
