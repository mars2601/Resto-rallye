<?php

use root\Models as model;

class QuoteTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('quotes')->delete();
    model\Quote::create([
        'author'            => 'Le soir',
        'content'          => 'L\'article',
      ]);
  }
}
