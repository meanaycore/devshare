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

        $user_role = Role::where('name', 'User')->first();
        $admin_role = Role::where('name', 'Admin')->first();
        $author_role = Role::where('name', 'Author')->first();

        $user->first_name    = 'Dumisa';
        $user->last_name     = 'Nukwa';
        $user->email         = 'Dura@gmail.com';
        $user->password      = bcrypt('123456');
        $user->save();
        $user->roles()->attach($user_role);

        $admin->first_name     = 'Ndumiso';
        $admin->last_name      = 'Nukwa';
        $admin->email         = 'Ndura@gmail.com';
        $admin->password      = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($admin_role);

        $author->first_name   = 'Akhona';
        $author->last_name    = 'Nukwa';
        $author->email        = 'Akho@gmail.com';
        $author->password     = bcrypt('123456');
        $author->save();
        $author->roles()->attach($author_role);

    }
}
