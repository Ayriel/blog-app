<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //se incluye para utilizar DB

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 10)->create();

        App\User::create([
            "name"      => 'Ayriel Noriega',
            "email"     =>  'anoriega2310@gmail.com',
            "password"  =>  bcrypt('12345'),
            "type"      => "admin"

        ]);
    }
}
