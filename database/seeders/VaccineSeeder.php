<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccine::create(['name' => 'None']);
        Vaccine::create(['name' => 'Johnson & Johnson']);
        Vaccine::create(['name' => 'Moderna']);
        Vaccine::create(['name' => 'Oxford/AstraZeneca']);
        Vaccine::create(['name' => 'Pfizer/BioNTech']);
        Vaccine::create(['name' => 'Sputnik V']);
    }
}
