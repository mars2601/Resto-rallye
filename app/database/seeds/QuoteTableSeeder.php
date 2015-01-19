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
        'content'          => 'Le Resto Rallye vous propose un concept original permettant la rencontre de grands moments gastronomiques et conviviaux.
        Chaque mois, il vous est possible de découvir une ville de Belgique en faisant étape dans 3 de ses restaurants.',
      ]);
  }
}
