<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'entity_id' => $this->faker->word,
        'body' => $this->faker->word,
        'publisher_name' => $this->faker->word,
        'publisher_id' => $this->faker->word,
        'cover' => $this->faker->word,
        'image' => $this->faker->word,
        'is_publish' => $this->faker->word,
        'is_visible_by_user' => $this->faker->word,
        'is_visible_by_agent' => $this->faker->word,
        'is_draft' => $this->faker->word,
        'expiration_date' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
