<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name' => 'الخرطوم',
                'country_id' => '1',
            ],
            [
                'name' => 'الشماليه',
                'country_id' => '1',
            ],
            [
                'name' => 'كبوشية',
                'country_id' => '1',
            ],
            [
                'name' => 'كسلا',
                'country_id' => '1',
            ],
            [
                'name' => 'قندتو',
                'country_id' => '1',
            ],
            [
                'name' => 'شندي',
                'country_id' => '1',
            ],
            [
                'name' => 'الرياض',
                'country_id' => '2',
            ],
            [
                'name' => 'جدة',
                'country_id' => '2',
            ],
            [
                'name' => 'الطائف',
                'country_id' => '2',
            ],
        ]);
    }
}
