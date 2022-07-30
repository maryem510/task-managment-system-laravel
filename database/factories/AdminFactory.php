<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'c_name' => 'Task Managment System',
            'fullname' => 'Maryem Mohammed',
            'phone' => '01022476433',
            'email' => 'Maryem201610@gmail.com',
            'address' => 'Cairo,Egypt',
            'username' => 'Mariam123',
            'password' => Hash::make('Mariam123')
        ];
    }
}
