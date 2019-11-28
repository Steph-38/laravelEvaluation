<?php

use Illuminate\Database\Seeder;

class ChiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chiens')->insert([
            [
                'nom' => 'Missli',
                'description' => 'Une chienne joueuse et affectueuse',
                'sexe' => 'femelle',
                'age' => 18,
                'poids' => 25,
                'taille' => 'moyen',
                'race_id' => 1
            ],
            [
                'nom' => 'Enzo',
                'description' => 'Un chien plein de vie',
                'sexe' => 'male',
                'age' => 8,
                'poids' => 8,
                'taille' => 'petit',
                'race_id' => 2
            ],
            [
                'nom' => 'Bouba',
                'description' => 'Un chien avec un caractère affirmé',
                'sexe' => 'male',
                'age' => 6,
                'poids' => 9,
                'taille' => 'petit',
                'race_id' => 3
            ],
            [
                'nom' => 'Rita',
                'description' => 'Une chienne avec un coeur aussi gros que son corps',
                'sexe' => 'femelle',
                'age' => 12,
                'poids' => 80,
                'taille' => 'grand',
                'race_id' => 4
            ],
        ]);
    }
}
