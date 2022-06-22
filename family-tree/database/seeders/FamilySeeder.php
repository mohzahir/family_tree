<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('families')->insert([
            [
                'father_id' => 1,
                'mother_id' => 2,
                'country_id' => 1,
                'city_id' => 1,
                'sons_count' => 3,
                'daughters_count' => 6,
                // 'marriage_date' => date('d-m-Y'),
                // 'divorce_date' => date('d-m-Y'),
                'note' => 'اسره بشير خالد الكريمة',
            ]
        ]);
    }
}
