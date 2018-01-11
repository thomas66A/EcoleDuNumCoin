<?php
use App\Transaction;
use Illuminate\Database\Seeder;

Class TransactionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        Transaction::truncate();

        

        for($i=0; $i<10; $i++)
        {
            $transaction = Transaction::create(array(
               'seller'=>bcrypt('toto66'),
                'buyer'=>bcrypt('titi66'),
                'amount'=>$faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 1000),

            ));
        }
    }
}