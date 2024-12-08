<?php

namespace Database\Factories;


use App\Models\Rentedroom;
use App\Models\RentedroomModel;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;


class RentedroomFactory extends Factory
{
    /*
     * Define the model's default state.
     *
     */
    protected $model = Rentedroom::class;
    public function definition(): array
    {
        $dateFrom = $this->faker->dateTimeBetween('-3 years', '+10 years');
        return [
            'number_people' => $this->faker->numberBetween(1,50),
            'date_from' => $dateFrom,
            'date_to' => $this->faker->unique()->datetimeBetween($dateFrom,'10 years'),
        ];
    }
}
