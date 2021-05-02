<?php

namespace Database\Factories;

use App\Models\Tip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $date = array('car', 'truck', 'motocycle');

        $rand = array_rand($date);

        return [
            'title' => $this->faker->title,
            'vehicle' => $this->faker->company,
            'brand' => $this->faker->companySuffix,
            'version' => $this->faker->companySuffix,
            'body' => $this->faker->catchPhrase,
            'type' => $date[$rand]
        ];
    }
}
