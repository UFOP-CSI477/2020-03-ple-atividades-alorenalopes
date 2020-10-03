<?php

namespace Database\Factories;

use App\Models\Agendamentos;
use App\Models\Coletas;
use App\Models\Pessoas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendamentosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agendamentos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data' => $this->faker->date('Y-m-d'),
            'pessoa_id' => Pessoas::factory(), 
            'coleta_id' => Coletas::factory(),
        ];
    }
}
