<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $data = file_get_contents("assets/json/states.json");
        $products = json_decode($data, true);

        foreach ($products as $product) {
            echo '<pre>';
            print_r($product);
            echo '</pre>';
        }



        return [
            //
        ];
    }
}
