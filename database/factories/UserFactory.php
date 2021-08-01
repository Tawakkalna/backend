<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'name_ar' => $this->faker->name(),
            'date_of_birth' => $this->faker->dateTimeBetween('-50 years'),
            'national_id' => rand(999999999, 1999999999),
            'immunity_status' => collect([
                'Immune',
                'No record of infection',
                'Exposed',
                'Infected',
                'Home quarantine',
                'Institutional quarantine'
            ])->random(),
            'passport_no' => $this->faker->randomAscii() . rand(100000, 999999999),
            'blood_type' => collect([
                'O-',
                'O+',
                'A-',
                'A+',
                'B-',
                'B+',
                'AB-',
                'AB+',
            ])->random(),
            'immunity_date' => $this->faker->dateTimeBetween('-1 year'),
            'vaccine_id' => Vaccine::all()->random()->id,
            "profile_pic" => collect([
                'https://randomuser.me/api/portraits/men/11.jpg',
                'https://randomuser.me/api/portraits/men/12.jpg',
                'https://randomuser.me/api/portraits/men/14.jpg',
                'https://randomuser.me/api/portraits/men/15.jpg',
                'https://randomuser.me/api/portraits/men/17.jpg',
                'https://randomuser.me/api/portraits/men/19.jpg',
                'https://randomuser.me/api/portraits/men/26.jpg',
                'https://randomuser.me/api/portraits/men/31.jpg',
                'https://randomuser.me/api/portraits/men/37.jpg',
                'https://randomuser.me/api/portraits/men/39.jpg',
                'https://randomuser.me/api/portraits/men/45.jpg',
                'https://randomuser.me/api/portraits/men/46.jpg',
                'https://randomuser.me/api/portraits/men/4.jpg',
                'https://randomuser.me/api/portraits/men/50.jpg',
                'https://randomuser.me/api/portraits/men/54.jpg',
                'https://randomuser.me/api/portraits/men/60.jpg',
                'https://randomuser.me/api/portraits/men/64.jpg',
                'https://randomuser.me/api/portraits/men/67.jpg',
                'https://randomuser.me/api/portraits/men/68.jpg',
                'https://randomuser.me/api/portraits/men/69.jpg',
                'https://randomuser.me/api/portraits/men/70.jpg',
                'https://randomuser.me/api/portraits/men/76.jpg',
                'https://randomuser.me/api/portraits/men/78.jpg',
                'https://randomuser.me/api/portraits/men/80.jpg',
                'https://randomuser.me/api/portraits/men/81.jpg',
                'https://randomuser.me/api/portraits/men/84.jpg',
                'https://randomuser.me/api/portraits/men/88.jpg',
                'https://randomuser.me/api/portraits/men/89.jpg',
                'https://randomuser.me/api/portraits/men/8.jpg',
                'https://randomuser.me/api/portraits/men/91.jpg',
                'https://randomuser.me/api/portraits/men/92.jpg',
                'https://randomuser.me/api/portraits/men/93.jpg',
                'https://randomuser.me/api/portraits/men/96.jpg',
                'https://randomuser.me/api/portraits/women/13.jpg',
                'https://randomuser.me/api/portraits/women/14.jpg',
                'https://randomuser.me/api/portraits/women/17.jpg',
                'https://randomuser.me/api/portraits/women/1.jpg',
                'https://randomuser.me/api/portraits/women/20.jpg',
                'https://randomuser.me/api/portraits/women/24.jpg',
                'https://randomuser.me/api/portraits/women/27.jpg',
                'https://randomuser.me/api/portraits/women/28.jpg',
                'https://randomuser.me/api/portraits/women/29.jpg',
                'https://randomuser.me/api/portraits/women/2.jpg',
                'https://randomuser.me/api/portraits/women/31.jpg',
                'https://randomuser.me/api/portraits/women/34.jpg',
                'https://randomuser.me/api/portraits/women/35.jpg',
                'https://randomuser.me/api/portraits/women/37.jpg',
                'https://randomuser.me/api/portraits/women/39.jpg',
                'https://randomuser.me/api/portraits/women/3.jpg',
                'https://randomuser.me/api/portraits/women/40.jpg',
                'https://randomuser.me/api/portraits/women/42.jpg',
                'https://randomuser.me/api/portraits/women/49.jpg',
                'https://randomuser.me/api/portraits/women/51.jpg',
                'https://randomuser.me/api/portraits/women/54.jpg',
                'https://randomuser.me/api/portraits/women/55.jpg',
                'https://randomuser.me/api/portraits/women/56.jpg',
                'https://randomuser.me/api/portraits/women/5.jpg',
                'https://randomuser.me/api/portraits/women/61.jpg',
                'https://randomuser.me/api/portraits/women/65.jpg',
                'https://randomuser.me/api/portraits/women/67.jpg',
                'https://randomuser.me/api/portraits/women/68.jpg',
                'https://randomuser.me/api/portraits/women/69.jpg',
                'https://randomuser.me/api/portraits/women/6.jpg',
                'https://randomuser.me/api/portraits/women/74.jpg',
                'https://randomuser.me/api/portraits/women/81.jpg',
                'https://randomuser.me/api/portraits/women/83.jpg',
                'https://randomuser.me/api/portraits/women/85.jpg',
                'https://randomuser.me/api/portraits/women/86.jpg',
                'https://randomuser.me/api/portraits/women/8.jpg',
                'https://randomuser.me/api/portraits/women/92.jpg',
                'https://randomuser.me/api/portraits/women/94.jpg',
                'https://randomuser.me/api/portraits/women/96.jpg',
            ])->random()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
