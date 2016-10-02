<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 50 users in our 'users' table

        factory(App\User::class, 50)->create()->each(function($u) {
        	$u->measurements()->save(factory(App\Measurement::class)->make());
    	});
    }
}
