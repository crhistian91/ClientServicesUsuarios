<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'documento' => $documento = $this->faker->unique()->numberBetween($min = 10000, $max = 9000),
            'nombres'   => $this->faker->name,
            'area'      => $area = $this->faker->randomElement(['Tecnologia','Contabilidad','Recursos Humanos']),
        ];
    }
}
