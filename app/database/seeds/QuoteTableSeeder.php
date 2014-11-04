<?php

class QuoteTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('quotes')->delete();
    Quote::create([
        'author'            => 'Le soir',
        'content'          => 'L\'article',
      ]);
  }
}
