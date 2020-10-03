<?php

namespace Database\Factories;

use App\Models\Pessoas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PessoasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pessoas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker-> firstName($gender = null|'male'|'female'),
            'tipo'=> $this->faker-> randomElement($array = array ('A+','A-','B+','B-','AB+','AB-','O+','O-')), 
        ];
    }
}
