<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function created_by()
    {
        return $this->belongsTo('App\User', 'created_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo('App\HotelBrand', 'brand_id', 'id');
    }

    public function subbrand()
    {
        return $this->belongsTo('App\SubBrand', 'sub_brand_id', 'id');
    }

    public function location()
    {
        return $this->belongsTo('App\HotelLocation', 'hotel_location_id', 'id');
    }

}
