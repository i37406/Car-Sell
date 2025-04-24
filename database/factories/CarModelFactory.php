<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarModel>
 */
class CarModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->randomElement([
                'Corolla', 'Camry', 'Civic', 'Accord', 'Mustang', 'F-150', 'Focus', 'Explorer', 'A4', 
                'A6', 'X5', 'X3', '3 Series', '5 Series', 'Model S', 'Model 3', 'Model X', 'Model Y', 
                'Mustang Mach-E', 'Prius', 'Altima', 'Q7', 'Q5', 'Passat', 'Jetta', 'Golf', 'Tiguan', 
                'Soul', 'Seltos', 'Kona', 'Rav4', 'CR-V', 'CX-5', 'Mazda3', 'Mazda6', 'Impreza', 
                'Forester', 'Outback', 'Wrangler', 'Cherokee', 'Grand Cherokee', 'Ram 1500', 'Tahoe', 
                'Suburban', 'Challenger', 'Camaro', 'Cherokee', 'Enclave', 'Escalade', 'Navigator', 
                'Continental', 'F-Pace', 'XE', 'F-Type', 'Vantage', 'DB11', 'Gallardo', 'Huracán', 
                'Aventador', 'Civic Type R', 'M3', 'M5', 'Cayenne', '911', 'Boxster', 'Cayman', 
                'Macan', 'F-Type', 'Bentayga', 'Continental GT', 'Flying Spur', 'Phantom', 'Ghost', 
                'Wraith', '720S', 'Senna', 'Veyron', 'Chiron', 'Ferrarri 488', 'Portofino', 'LaFerrari', 
                '488 Pista', 'Mulsanne', 'Aston Martin DBX', 'DBS Superleggera', 'S5', 'S8', 'Q8', 
                'E-Tron', 'R8', 'S3', 'M240i', 'Z4', 'X6', 'i8', 'F50', 'Spyker C8', 'Taycan', 
                'Bollinger B1', 'I-Pace', 'Model Z', 'C3', 'C5', '208', '3008', '5008', 'Clio', 
                'Megane', 'Sandero', 'Talisman', 'Duster', 'Twingo', 'Micra', 'Panda', 'Tipo', 
                'Giulia', 'Stelvio', 'Yaris', 'Juke', 'XJ', 'XK', 'C-Max', 'B-Max', 'S-Max', 'Fiesta'
            ])
        ];
    }
}
