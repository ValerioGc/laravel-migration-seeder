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
        $rand = rand(1, 10);
        for ($i = 0; $i < 500; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->giorno_partenza = $faker->dateTimeBetween('-2 years', '+2 years')->format('Y-m-d');
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->dateTimeBetween('+0 hour', '+'.$rand.' hour');
            $newTrain->orario_arrivo = $faker->dateTimeBetween('+3 hour', '+'.$rand.' hour');
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
