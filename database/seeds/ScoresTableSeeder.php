<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('scores')->insert([
      'user_id' => 1,
      'score' => 5,
      'created_at' => '2019-7-1 10:00:00',
      'updated_at' => '2019-7-1 10:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 1,
      'score' => 6,
      'created_at' => '2019-7-2 10:00:00',
      'updated_at' => '2019-7-2 10:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 1,
      'score' => 7,
      'created_at' => '2019-7-3 10:00:00',
      'updated_at' => '2019-7-3 10:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 1,
      'score' => 3,
      'created_at' => '2019-7-4 10:00:00',
      'updated_at' => '2019-7-4 10:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 1,
      'score' => 8,
      'created_at' => '2019-7-5 10:00:00',
      'updated_at' => '2019-7-5 10:00:00'
    ]);


    DB::table('scores')->insert([
      'user_id' => 2,
      'score' => 3,
      'created_at' => '2019-7-1 12:00:00',
      'updated_at' => '2019-7-1 12:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 2,
      'score' => 2,
      'created_at' => '2019-7-2 12:00:00',
      'updated_at' => '2019-7-2 12:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 2,
      'score' => 7,
      'created_at' => '2019-7-3 12:00:00',
      'updated_at' => '2019-7-3 12:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 2,
      'score' => 9,
      'created_at' => '2019-7-4 12:00:00',
      'updated_at' => '2019-7-4 12:00:00'
    ]);
    DB::table('scores')->insert([
      'user_id' => 2,
      'score' => 10,
      'created_at' => '2019-7-5 12:00:00',
      'updated_at' => '2019-7-5 12:00:00'
    ]);
  }
}
