<?php

namespace Database\Factories;

use App\Models\Coletas;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColetasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coletas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker-> randomElement($array = array ('Hospital A','Hemocentro B','Centro de Saúde C','Hospital B','Hemocentro H')),
            'cidade'=> $this->faker->city,
        ];
    }
}
