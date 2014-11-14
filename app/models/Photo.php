<?php
/**
 * Created by PhpStorm.
 * User: maximelefebvre
 * Date: 2/11/14
 * Time: 14:53
 */


class Photo extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';
    protected $fillable = array('alt','url', 'album_id');
    public static $rules = array(
        'url' => 'required',
    );

    /**
     * @return mixed
     */
    public function album()
    {
        return $this->belongsTo('Album');
    }

} 