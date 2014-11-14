<?php

class UserTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->delete();
    User::create([
        'firstName'           => 'Marcel',
        'lastName'            => 'pirnay',
        'email'          => 'pirnay.m@gmail.com',
        'password'    => Hash::make('test'),
        'admin'    => true
      ]);
    User::create([
        'firstName'           => 'maxime',
        'lastName'            => 'lefebvre',
        'email'          => 'mabouka@gmail.com',
        'password'    => Hash::make('cheeseburger'),
        'admin'    => false
      ]);
  }
}
