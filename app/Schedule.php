<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo('App\HotelBrand', 'brand_id', 'id');
    }

    public function subbrand()
    {
        return $this->belongsTo('App\SubBrand', 'sub_brand_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }

    public function consultant()
    {
        return $this->belongsTo('App\User', 'consultant_id', 'id');
    }

    public function editor()
    {
        return $this->belongsTo('App\User', 'editor_id', 'id');
    }

    public function hotellocation()
    {
        return $this->belongsTo('App\HotelLocation', 'hotel_location_id', 'id');
    }

}
