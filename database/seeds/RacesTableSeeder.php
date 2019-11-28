<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            [
                'name' => 'Boxer',
                'classification' => 'Molossoide',
                'longevite' => 12
            ],
            [
                'name' => 'Bichon',
                'classification' => "Chien d'agrément",
                'longevite' => 14,
            ],
            [
                'name' => 'Teckel',
                'classification' => 'Chien de chasse',
                'longevite' => 14,
            ],
            [
                'name' => 'Saint-bernard',
                'classification' => 'Chien de montagne',
                'longevite' => 10,
            ],

        ]);
    }
}
