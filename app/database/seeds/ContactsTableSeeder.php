<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 26/01/2015
 * Time: 21:13
 */

use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder {

   public function run(){

      DB::table('contacts')->delete();

        $faker = Faker::create();

       foreach(range(1, 40) as $index)
       {
           Contact::create([

                'owner_id' => $faker->randomDigit(10),

               'first_name' => $faker->name,

               'last_name' => $faker->name,

               'email_address' => $faker->email,

               'twitter' => $faker->name
           ]);
       }
   }

} 