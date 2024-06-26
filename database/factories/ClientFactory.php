<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'idS' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'idCity' => function () {
                return \App\Models\City::factory()->create()->id;
            },
            'status' => $this->faker->boolean
        ];
    }
}
