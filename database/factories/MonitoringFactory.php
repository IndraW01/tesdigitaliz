<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 5)),
            'project_leader' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_berakhir' => $this->faker->date(),
            'nama_client' => $this->faker->company(),
            'progress' => $this->faker->numberBetween(0, 100)
        ];
    }
}
