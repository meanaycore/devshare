<?php

use Illuminate\Database\Seeder;

use App\User;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role   = new Role();
        $admin_role  = new Role();
        $author_role = new Role();

        $user_role->name        = 'User';
        $user_role->description = 'Just a normal user';
        $user_role->save();

        $author_role->name        = 'Author';
        $author_role->description = 'Just a author user';
        $author_role->save();

        $admin_role->name        = 'Admin';
        $admin_role->description = 'Just a admin user';
        $admin_role->save();
    }
}
