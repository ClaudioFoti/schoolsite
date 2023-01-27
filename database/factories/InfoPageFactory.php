<?php

namespace Database\Factories;

use App\Models\InfoPage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InfoPage>
 */
class InfoPageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tenant_id' => random_int(1, 2),
            'title' => fake()->realText(50),
            'text' => fake()->realText(300),
            'order' => random_int(1, 5),
            'responsible_id' => User::class::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (InfoPage $infoPage) {
            $url = 'https://source.unsplash.com/random/256x256';
            $infoPage
                ->addMediaFromUrl($url)
                ->toMediaCollection();

            $infoPage->save();
        });
    }
}
