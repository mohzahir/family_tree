<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            [
                'name' => 'بشير خالد علي البشير',
                'gender' => 'male',
                'big_family_id' => 1,
                'son_family_id' => null,
                'another_name' => null,
            ],
            [
                'name' => 'عائشة عثمان ابراهيم ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => null,
                'another_name' => null,
            ],
            [
                'name' => 'منى بشير خالد علي ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => 'امونة',
            ],
            [
                'name' => 'زينب بشير خالد علي ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
            [
                'name' => 'محجوب بشير خالد علي ',
                'gender' => 'male',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => 'تاج السر',
            ],
            [
                'name' => 'اقبال بشير خالد علي ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
            [
                'name' => 'خالد بشير خالد علي ',
                'gender' => 'male',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
            [
                'name' => 'سمية بشير خالد علي ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
            [
                'name' => 'هدى بشير خالد علي ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
            [
                'name' => 'هاشم بشير خالد علي ',
                'gender' => 'male',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
            [
                'name' => 'فاطمة بشير خالد علي ',
                'gender' => 'female',
                'big_family_id' => 1,
                'son_family_id' => 1,
                'another_name' => null,
            ],
        ]);
    }
}
