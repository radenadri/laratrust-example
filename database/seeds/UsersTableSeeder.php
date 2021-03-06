<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();

		// Membuat role member
		$memberRole = new Role();
		$memberRole->name = "member";
		$memberRole->display_name = "Member";
		$memberRole->save();

		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Administrator';
		$admin->email = 'administrator@example.com';
		$admin->password = bcrypt('password');
		$admin->save();
		$admin->attachRole($adminRole);
		
		// Membuat sample member
		$member = new User();
		$member->name = "Member";
		$member->email = 'member@example.com';
		$member->password = bcrypt('password');
		$member->save();
		$member->attachRole($memberRole);
    }
}
