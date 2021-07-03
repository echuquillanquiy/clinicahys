<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Place;
use App\Models\Type;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(2);
        $category = Category::all()->random();
        $place = Place::all()->random();
        $type = Type::all()->random();

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'slug' => Str::slug($title),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement([Work::BORRADOR, Work::PUBLICADO]),
            'start' => Carbon::now(),
            'end' => Carbon::now()->addDays(5),
            'user_id' => $this->faker->randomElement([1,2,3,4,5]),
            'category_id' => $category->id,
            'place_id' => $place->id,
            'type_id' => $type->id,
        ];
    }
}
