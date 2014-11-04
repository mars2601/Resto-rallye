<?php



class Album extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'albums';
    protected $fillable = array('name', 'description', 'cover_photo_id');


    public function photos()
    {
        return $this->hasMany('photo');
    }

} 