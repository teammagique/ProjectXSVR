<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return 
        [
            'title' => $this->faker->sentence(),
            'bio'=> $this->faker->paragraph(),
            'verified' => true,
            'user_id' => User::factory()
            ->state(
                ['user_type'=>'freelancer']
            )->create(),
            'photo'=> $this->faker->image('public/storage/images',640,480, null, false)
        ];
    }
}

