<?php


class GalleryController extends BaseController {

    // public function __construct()
    // {
    // }

    public function get_url_by_id($id){
        $cover_photo = Photo::whereId($id)->get()->first();
        return $cover_photo->url;

    }



    public function index()
    {
        $path= "/uploads/photos/";
        $albums = [];
        foreach (Album::all() as $key => $album){

           $albums[$key] = [
               'name' => $album->name,
               'file' => $path.$this->get_url_by_id($album->cover_photo_id),
           ];
        }


        return View::make(  'gallery.index',
                            array(
                                'albums' => $albums,

                            )
                          );
    }
}