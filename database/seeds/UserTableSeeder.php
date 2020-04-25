<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('iscodaniel')
        ]); 

        factory(User::class, 10)->create();
    }
}
