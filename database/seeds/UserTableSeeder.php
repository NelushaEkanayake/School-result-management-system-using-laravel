<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\user;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        user::create([
            'name'  => 'Nelusha',
            'email' => 'nelushapcm@gmail.com',
            'password'=> Hash::make('password'),
            'remember_token'=> Str::random(10),
        ]);
    }
}
