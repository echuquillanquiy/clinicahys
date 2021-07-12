<?php

namespace Database\Factories;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuotationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quotation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ruc' => $this->faker->unique()->randomNumber(9),
            'name' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'contact' => $this->faker->name(),
            'position' => $this->faker->randomElement(['GERENTE', 'ADMINISTRADOR(A)', 'GERENTE COMERCIAL', 'SECRETARIA']),
            'workers' => $this->faker->numberBetween(15, 100),
            'positions' => $this->faker->sentence(10),
            'status' => $this->faker->randomElement([Quotation::RECEPCIONADO, Quotation::ENVIADO])
        ];
    }
}
