<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => 'header_logo',
            'value' => $this->faker->image,
            'description' => 'Header Logo',
            'type' => 'file',
            'ordering' => 0,
            'status' => 1
        ];
    }
}
