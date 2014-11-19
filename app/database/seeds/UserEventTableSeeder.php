<?php

class EventUserTableSeeder extends Seeder {

  /**
 * Run the database seeds.
 *
 * @return void
 */
  public function run()
  {
    DB::table('eventuser')->delete();
    EventUser::create([
        'rallye_id'           => '3',
        'user_id'            => '13',
        'place'              => '4',
        'entreprise'         => 'Electrabel',


        // contact person infos

        'contactFirstName'   => 'Jean',
        'contactLastName'    => 'Bon',
        'street'             => 'De la croix',
        'streetNumber'       => '239',
        'town'               => 'Ensival',
        'telephone'          => '0479934297'

        ]);
  }
}
