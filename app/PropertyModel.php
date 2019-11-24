<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyModel extends Model
{
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'properties';

    /**
     * Extra attribute for geolocation
     *
     * @access protected
     * @var string
     */
    protected $appends = ['geoLocation'];

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = ['address'];

    public function getGeoLocationAttribute()
    {
        return $this->attributes['geoLocation'] = getLatLong(json_decode($this->address));
    }

}
