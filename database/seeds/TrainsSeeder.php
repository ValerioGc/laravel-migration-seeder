<?php
use App\Train;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for ($i = 0; $i < 200; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->numero_carrozze = $faker->randomNumber(1, false);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            if ($newTrain->cancellato == 1) {
                $newTrain->in_orario = 0;
            } else {
                $newTrain->in_orario = $faker->numberBetween(0, 1);
            }
            $newTrain->save();
        }
    }
}
