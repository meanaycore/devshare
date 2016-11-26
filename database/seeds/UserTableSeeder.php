<?php

use Illuminate\Database\Seeder;

use App\User;

use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $admin = new User();
        $author = new User();

        $user_role = Role::where('name', 'user')->first();
        $admin_role = Role::where('name', 'admin')->first();
        $author_role = Role::where('name', 'author')->first();

        $user->name     = 'Dumisa';
        $user->email    = 'Dura@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($user_role);

        $admin->name     = 'Ndumiso';
        $admin->email    = 'Ndura@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($admin_role);

        $author->name     = 'Akhona';
        $author->email    = 'Akho@gmail.com';
        $author->password = bcrypt('123456');
        $author->save();
        $author->roles()->attach($author_role);

    }
}
