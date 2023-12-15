<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operador>
 */
class OperadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => fake() -> firstName(),
            'apellidos' => fake() -> lastname(),
            'direccion' => fake() -> address(),
            'telefono' => fake() -> phoneNumber(),
            'edad' => fake() -> numberBetween(0, 80),
        ];
    }
}
