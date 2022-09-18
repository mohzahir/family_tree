<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BigFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('big_families')->insert([
            [
                'name' => 'عائلة عبود',
                'main_person_id' => 1,
                'note' => 'عائلة عبود الكريمة',
            ]
        ]);
    }
}
