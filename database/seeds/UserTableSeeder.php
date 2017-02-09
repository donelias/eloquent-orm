<?php

use Illuminate\Database\Seeder;
use EloquentORM\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Hector Galindez',
            'gender' => 'm'
        ]);


       factory(User::class, 99)->create();
    }
}
