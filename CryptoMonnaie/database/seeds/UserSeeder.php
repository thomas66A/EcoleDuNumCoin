<?php
use App\User;
use Illuminate\Database\Seeder;

Class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        $user = User::create(array(
            'name'=>'thomas',
            'email'=>'toto@to.fr',
            'password'=>bcrypt('toto66'),
        ));

        for($i=0; $i<10;$i++)
        {
            $painting = User::create(array(
               'name'=>$faker->realText(rand(20,40)),
                'email'=>$faker->email,
                'password'=>$faker->password,

            ));
        }
    }
}