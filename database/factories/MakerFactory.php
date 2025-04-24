<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maker>
 */
class MakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->randomElement([
                'Toyota',
                'Ford',
                'BMW',
                'Mercedes-Benz',
                'Audi',
                'Honda',
                'Chevrolet',
                'Volkswagen',
                'Tesla',
                'Nissan',
                'Hyundai',
                'Kia',
                'Porsche',
                'Mazda',
                'Lexus',
                'Jaguar',
                'Land Rover',
                'Subaru',
                'Chrysler',
                'Jeep',
                'Buick',
                'Dodge',
                'GMC',
                'Cadillac',
                'Ferrari',
                'Lamborghini',
                'Mitsubishi',
                'Acura',
                'Infiniti',
                'Alfa Romeo',
                'Rivian',
                'Polestar',
                'McLaren',
                'Rolls-Royce',
                'Bentley',
                'Aston Martin',
                'Peugeot',
                'Renault',
                'Fiat',
                'Citroën',
                'Skoda',
                'Opel',
                'Mazda',
                'Saab',
                'Volvo',
                'Suzuki',
                'Toyota',
                'Mini',
                'Bugatti'
            ])
        ];
    }
}
