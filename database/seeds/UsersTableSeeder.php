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
    DB::table('users')->delete();

    DB::table('users')->insert([
      'name' => 'Gakuin Taro',
      'email' => 'taro@sample.com',
      'password' => bcrypt('abc'),
      'created_at' => '2019-1-25 10:00:01',
      'updated_at' => '2019-1-25 10:00:01'
    ]);

    DB::table('users')->insert([
      'name' => 'Gakuin Jiro',
      'email' => 'jiro@sample.com',
      'password' => bcrypt('abc'),
      'created_at' => '2019-1-25 11:00:01',
      'updated_at' => '2019-1-25 11:00:01'
    ]);
  }
}
