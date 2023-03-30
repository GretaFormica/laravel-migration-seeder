<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_train = new Train;

        $new_train->azienda = $faker->word();
        $new_train->stazioneDiPartenza = $faker->state();
        $new_train->stazioneDiArrivo = $faker->state();
        $new_train->partenza = $faker->time();
        $new_train->arrivo = $faker->time();
        $new_train->codice = $faker->ean8();
        $new_train->numCarrozze = $faker->randomDigit();
        $new_train->inOrario = $faker->boolean();
        $new_train->cancellato = $faker->boolean();


        $new_train->save();


    }
}
