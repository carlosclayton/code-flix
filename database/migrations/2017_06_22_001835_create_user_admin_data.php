<?php

use Illuminate\Database\Migrations\Migration;
use \CodeFlix\Models\User;

class CreateUserAdminData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
            User::create([
               'name' => env('ADMIN_DEFAULT_NAME'),
                'email' => env('ADMIN_DEFAULT_EMAIL'),
                'password' => bcrypt(env('ADMIN_DEFAULT_PASSWORD', '131078')),
                'role' => User::ROLE_ADMIN
            ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $user = User::where('email', env('ADMIN_DEFAULT_EMAIL', 'admin@user.com'))->first();
        if($user instanceof User){
            $user->delete();
        }

    }
}
