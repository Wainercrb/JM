<?php
use Illuminate\Database\Seeder;
use App\Models\Role;
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
        $role_admin = Role::where('name', 'Admin')->first();
        $admin = new User();
        $admin->name = 'Admin';
        $admin->surnames = 'Admin';
        $admin->image = 'default.png';
        $admin->code = 'Admin';
        $admin->email = 'adminadmin@adminadmin.com';
        $admin->password = bcrypt('Admin');
        $admin->role = 'admin';
        $admin->roles()->associate($role_admin);
        $admin->save();

        $role_guest = Role::where('name', 'Guest')->first();
        $guest = new User();
        $guest->name = 'Guest';
        $guest->surnames = 'Guest';
        $guest->image = 'default.png';
        $guest->code = 'Guest';
        $guest->email = 'guest@guest.com';
        $guest->password = bcrypt('Guest');
        $guest->role = 'Guest';
        $guest->roles()->associate($role_guest);
        $guest->save();

    }
}
