<?php
/**
 * Created by PhpStorm.
 * User: maximelefebvre
 * Date: 2/11/14
 * Time: 15:57
 */



class AlbumTableSeeder extends Seeder {

    public function run()
    {
        DB::table('albums')->delete();



        //Herve

        Album::create(array(
            'name' => 'Herve',
            'description' => 'Herve c’est chouette' ,

        ));


        //Liège

        Album::create(array(
            'name' => 'Liège',
            'description' => 'Liège c’est malsain',

        ));



    }



}