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
        'album_id'        =>  '',
        'town'            => 'Bruxelles',
        'street'          => 'Rue de la loi',
        'streetNumber'    => '16',
        'date'            => "2014-01-15 19:00:00",
        'place'           => '30',
        'placeAvailable'  => '30',
        'description'     => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
        'price'           => '56.50'

      ]);
    Rallye::create([
        'title'           => 'Repas au centre historique de Liège',
        'album_id'        =>  '2',
        'town'            => 'Liège',
        'street'          => 'Place saint Lambert',
        'streetNumber'    => '1',
        'date'            => "2015-03-15 18:30:00",
        'place'           => '45',
        'placeAvailable'  => '45',
        'description'     => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
        'price'           => '42'

      ]);
    Rallye::create([
        'title'           => 'Cuisine du terroir dans le pays de herve',
        'album_id'        =>  '1',
        'town'            => 'Herve',
        'street'          => 'Rue de l\'église',
        'streetNumber'    => '105',
        'date'            => "2014-10-15 20:00:00",
        'place'           => '60',
        'placeAvailable'  => '60',
        'description'     => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',
        'price'           => '38.50'

      ]);
  }
}
