<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;


class PackageFactory extends Factory
{   

    protected $model = Package::class;

   
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'limit' => rand(3,8),
            'subscriptions' => rand(3,8)
        ];
    }
}
