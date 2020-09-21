<?php

namespace Database\Factories\Model;

use App\Models\Model\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \app\Models\Model\Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => function(){
                return Product::all()->random();	
            },
            'customer' => $this->$faker->name,
            'review' => $this->$faker->paragraph,
            'star' => $this->$faker->numberBetween(0,5)
        ];
    }
}
