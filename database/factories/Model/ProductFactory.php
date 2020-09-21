<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Model\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' =>$this->$faker->word,
        'detail' =>$this->$faker->paragraph,
        'price' => $this->$faker->numberBetween(100,1000),
        'stock'=> $this->$faker->randomDigit,
        'discount' => $this->$faker->numberBetween(2,30),
        'user_id' => function(){
        	return App\User::all()->random();}
        ];
    }
}
