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
        DB::table('users')->insert([
				'company_name' => 'vera',
				'email' => 'vera@gmail.com',
				'username' => 'admin',
				'active'	=> '1',
				'is_admin'	=> '1',
				'role'		=> '1',
				'password' => bcrypt('admin'),
				]);

    }
}
