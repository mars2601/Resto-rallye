<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Album extends Eloquent  implements SluggableInterface{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'albums';
    protected $fillable = array('name', 'description', 'cover_photo_id');

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

    public function photos()
    {
        return $this->hasMany('photo');
    }

} 