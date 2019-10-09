<?php

use Illuminate\Database\Seeder;
// use Faker\Factory;
use Faker\Generator as Faker;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	// $faker = Factory::create();
        
    	Customer::truncate();

    	foreach (range(1,25) as $i) {
    		Customer::create([
    			'company' =>$faker->company,
    			'email'=>$faker->email,
    			'name'=>$faker->name,
    			'phone' => $faker->phoneNumber,
    			'address' => $faker->address,
    		]);
    	}
    }
}
