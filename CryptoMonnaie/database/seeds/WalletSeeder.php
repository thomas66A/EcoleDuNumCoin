<?php
use App\Wallet;
use Illuminate\Database\Seeder;

Class WalletSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        App\Wallet::truncate();

        

        for($i=0; $i<10;$i++)
        {
            $wallet = Wallet::create(array(
                'mail'=>$faker->email,
                'total'=>$faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 1000),
                'vendu'=>$faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 1000),
                'acheter'=>$faker->randomFloat($nbMaxDecimals = 4, $min = 0, $max = 1000),
            ));
        }
    }
}