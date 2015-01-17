<?php


class GalleryController extends BaseController {

    public function __construct()
    {
        $this->path = "/uploads/photos/";
        $this->sizes=[
            'thumb' =>'200x400',
            'link' =>'full'
        ];
    }

    private function get_photo($id,$size = 'full'){
        $cover_photo = Photo::whereId($id)->get()->first();
        $url = json_decode($cover_photo->sizes);

        return $url->$size ;

    }



    public function index()
    {
        $albums = [];
        foreach (Album::all() as $key => $album){

           $albums[$key] = [
               'slug' => $album->slug,
               'name' => $album->name,
               'file' => $this->path.$this->get_photo(
                                                        $album->cover_photo_id,
                                                        $this->sizes['thumb']
                                                      ),
           ];

        }
        return View::make(  'gallery.index',
                            ['albums' => $albums]
                         );
    }


    public function show($slug)
    {
        $album = Album::whereSlug($slug)->first();
        $rallye = DB::table('rallyes')->where('album_id', '=', $album->id)->first();
        if($album){
            $photos = $album->photos()->get();
            foreach ($photos as $key => $photo){
                $photo->sizes       =  json_decode($photo->sizes,true);
                $photo->thumbnail   =  $photo->sizes[$this->sizes['thumb']];
                $photo->link        =  $photo->sizes[$this->sizes['link']];
            }

            return View::make(  'gallery.show',
                [
                    'name'          => $album->name,
                    'description'   => $album->description,
                    'photos'        => $photos,
                    'photo_path'    => $this->path,
                    'rallye'        => $rallye
                ]
            );
        }
        else
        {
            return Redirect::route('404');
        }

    }

    public function create()
    {
        return View::make(  'admin.gallery.create');
    }

    public function store()
    {
        return View::make(  'admin.gallery.create');
    }
}
