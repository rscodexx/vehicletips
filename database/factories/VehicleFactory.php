<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

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
            'name' => $this->faker->domainWord,
            'type' => $date[$rand],
            'brand_id' => rand(1,20)
        ];
    }
}
