<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonfile = file_get_contents('currencies.json');
        $jsonarray = json_decode($jsonfile,true);
        DB::table('currencies')->insert($jsonarray);
    }
}
