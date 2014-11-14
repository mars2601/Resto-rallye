<?php



class PhotoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('photos')->delete();


        //Herve
        $herve = Album::whereName('Herve')->first();
        Photo::create(array(
            'alt' => 'Un beau repas',
            'sizes' => json_encode(array(
                'full'     => 'herve-repas.jpg',
                '200x400'  => '200x400-herve-repas.jpg',
                '800x600'  => '800x600-herve-repas.jpg',
            )),
            'album_id' => $herve->id
        ));

        Photo::create(array(
            'alt' => 'La vue du restaurant',
            'sizes' => json_encode(array(
                'full' => 'herve-vue.jpg',
                '200x400'  => '200x400-herve-vue.jpg',
                '800x600'  => '800x600-herve-vue.jpg',
            )),
            'album_id' => $herve->id
        ));

        Photo::create(array(
            'alt' => 'Les gens ',

            'sizes' => json_encode(array(
                'full' => 'herve-ambiance.jpg',
                '200x400'  => '200x400-herve-ambiance.jpg',
                '800x600'  => '800x600-herve-ambiance.jpg',
            )),
            'album_id' => $herve->id
        ));

        $photo = Photo::whereAlbum_id($herve->id)->first()->id;
        $herve->cover_photo_id = $photo;
        $herve->save();



        //Liège
        $liege = Album::whereName('Liège')->first();
        Photo::create(array(
            'alt' => 'Un repas cher',
            'sizes' => json_encode(array(
                'full' => 'liege-repas.jpg',
                '200x400'  => '200x400-liege-repas.jpg',
                '800x600'  => '800x600-liege-repas.jpg',
            )),
            'album_id' => $liege->id
        ));


        Photo::create(array(
            'alt' => 'La vue sur meuse',

            'sizes' => json_encode(array(
                'full' => 'liege-vue.jpg',
                '200x400'  => '200x400-liege-vue.jpg',
                '800x600'  => '800x600-liege-vue.jpg',
            )),
            'album_id' => $liege->id
        ));

        Photo::create(array(
            'alt' => 'Les liègeois',
            'sizes' => json_encode(array(
                'full' => 'liege-ambiance.jpg',
                '200x400'  => '200x400-liege-ambiance.jpg',
                '800x600'  => '800x600-liege-ambiance.jpg',
            )),
            'album_id' => $liege->id
        ));

        $photo = Photo::whereAlbum_id($liege->id)->first()->id;
        $liege->cover_photo_id = $photo;
        $liege->save();

    }

}