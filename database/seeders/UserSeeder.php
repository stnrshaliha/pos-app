<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('users')->insert([
			'name' => 'Khairi Ibnutama',
			'email' => 'mr.ibnutama@gmail.com',
			'username' => 'admin',
			'password' => Hash::make('rahasia'),
			'phone' => '081264601987'
		]);
	}
}
