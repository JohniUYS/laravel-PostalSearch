<?php

namespace Database\Factories;

use App\Models\Postal;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Postal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            '0000',
            '0',
            '0',
            'false',
        ];
    }
}
