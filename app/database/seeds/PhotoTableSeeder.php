<?php



class PhotoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('photos')->delete();


        //Herve
        $herve = Album::whereName('Herve')->first();
        Photo::create(array(
            'alt' => 'Un beau repas',
            'url' => 'herve-repas.jpg',
            'album_id' => $herve->id
        ));

        Photo::create(array(
            'alt' => 'La vue du restaurant',
            'url' => 'herve-vue.jpg',
            'album_id' => $herve->id
        ));

        Photo::create(array(
            'alt' => 'Les gens ',
            'url' => 'herve-ambiance.jpg',
            'album_id' => $herve->id
        ));

        $photo = Photo::whereAlbum_id($herve->id)->first()->id;
        $herve->cover_photo_id = $photo;
        $herve->save();



        //Liège
        $liege = Album::whereName('Liège')->first();
        Photo::create(array(
            'alt' => 'Un repas cher',
            'url' => 'liege-repas.jpg',
            'album_id' => $liege->id
        ));

        Photo::create(array(
            'alt' => 'La vue sur meuse',
            'url' => 'liege-vue.jpg',
            'album_id' => $liege->id
        ));

        Photo::create(array(
            'alt' => 'Les liègeois',
            'url' => 'liege-ambiance.jpg',
            'album_id' => $liege->id
        ));

        $photo = Photo::whereAlbum_id($liege->id)->first()->id;
        $liege->cover_photo_id = $photo;
        $liege->save();

    }

}