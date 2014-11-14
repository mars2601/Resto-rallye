<?php

class RallyeTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('rallyes')->delete();
    Rallye::create([
        'title'           => 'Découverte de la cuisine moléculaire',
        'town'            => 'Bruxelles',
        'street'          => 'Rue de la loi',
        'streetNumber'    => '16',
        'date'            => "2014-01-15 19:00:00",
        'place'           => '30',
        'description'     => 'Venez décourvir le cuisine moléculaire et toute sa magie dans le centre de bruxelles.'
        
      ]);
    Rallye::create([
        'title'           => 'Repas au centre historique de Liège',
        'town'            => 'Liège',
        'street'          => 'Place saint Lambert',
        'streetNumber'    => '1',
        'date'            => "2015-01-15 18:30:00",
        'place'           => '45',
        'description'     => 'Une dégustation qui vous plaira dans le centre historique de Litch'

      ]);
    Rallye::create([
        'title'           => 'Cuisine du terroir dans le pays de herve',
        'town'            => 'Herve',
        'street'          => 'Rue de l\'église',
        'streetNumber'    => '105',
        'date'            => "2014-10-15 20:00:00",
        'place'           => '60',
        'description'     => 'Osez les produits du terroir. Frais bien de chez nous'

      ]);
  }
}
