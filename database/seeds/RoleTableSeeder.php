<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = new Role();
      $role_admin->name = 'Admin';
      $role_admin->description = 'Superuser privilege';
      $role_admin->save();

      $role_guest  = new Role();
      $role_guest->name = 'Guest';
      $role_guest->description = 'A normal user';
      $role_guest->save();
    }
}
