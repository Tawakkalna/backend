<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Abdulaziz Alasmari",
            "name_ar" => "عبدالعزيز الأسمري",
            "date_of_birth" => "1996-09-14",
            "national_id" => 1099664582,
            "email" => "abdulaziz@gmail.com",
            "email_verified_at" => "2021-08-01 15:11:51",
            "password" => Hash::make("secret"),
            "immunity_status" => "Immune",
            "passport_no" => "T255622",
            "blood_type" => "O+",
            "vaccine_id" => 1,
            "immunity_date" => "2021-06-18 02:48:17",
            "remember_token" => "20PrDKzwEV",
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
        ]);
        User::factory(10)->create();
    }
}
