<?php

namespace Database\Seeders;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1; $i<=20; $i++){
        	DB::table('contacts')->insert([
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
        		'title' => $faker->name(),
        		'email' => $faker->email(),
        		'phone' => $faker->phoneNumber(),
        		'address' => $faker->address(),
        		'status' => 1,
        	]);
        }
    }
}
