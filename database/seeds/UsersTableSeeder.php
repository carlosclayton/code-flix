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
                factory(\CodeFlix\Models\User::class,5)->states('admin')->create();
                factory(\CodeFlix\Models\User::class,15)->states('client')->create();
    }
}
