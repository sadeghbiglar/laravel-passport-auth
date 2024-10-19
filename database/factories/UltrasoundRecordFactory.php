<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UltrasoundRecord>
 */
class UltrasoundRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_name' => $this->faker->name(),
            'national_id' => $this->faker->unique()->numerify('##########'), // ده رقم
            'phone_number' => $this->faker->numerify('###############'), // تولید شماره تلفن 15 رقمی
            'exam_type' => $this->faker->randomElement(['Abdominal', 'Pelvic', 'Transvaginal']),
            'exam_date' => $this->faker->date(),
            'gestational_age' => $this->faker->numberBetween(5, 40), // بین 5 تا 40 هفته
            'fetal_heart_rate' => $this->faker->randomFloat(2, 120, 180), // ضربان قلب جنین
            'amniotic_fluid_index' => $this->faker->randomFloat(2, 5, 25), // شاخص مایع آمنیوتیک
            'comments' => $this->faker->paragraph(),
        ];
    }
}
