<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'zipcode' => fake()->randomNumber(),
            'address' => fake()->address(),
            'number' => fake()->buildingNumber(),
            'state' => "CE"
        ]);
    }
}
