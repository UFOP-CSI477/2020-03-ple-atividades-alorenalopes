<?php

namespace Database\Factories;

use App\Models\Produto;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();
        $faker->addProvider(new ProdutosFaker($faker));
        return [
            
            'nome' => $faker->produtosNomes(),
            'um' => $faker->unidadesMedidas()
        ];
    }
}
