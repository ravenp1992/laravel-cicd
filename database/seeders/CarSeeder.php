<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::factory()->create([
            'name' => 'Audi',
            'founded' => 1909,
            'description' => 'This is the description for audi',
        ]);

        Car::factory()->create([
            'name' => 'Mercedes',
            'founded' => 1926,
            'description' => 'This is the description for mercedes',
        ]);

        Car::factory()->create([
            'name' => 'BMW',
            'founded' => 1916,
            'description' => 'This is the description for bmw',
        ]);
    }
}
