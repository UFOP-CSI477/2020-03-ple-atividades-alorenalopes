<?php

namespace Database\Factories;

use App\Models\Equipamento;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'equipamentos_id' => Equipamento::factory(), 
            'user_id' => User::factory(),
            'descricao'=> $this->faker->word,
            'datalimite' => $this->faker->date('Y-m-d'),
            'tipo'=> $this->faker->randomDigit,

        ];
    }
}
