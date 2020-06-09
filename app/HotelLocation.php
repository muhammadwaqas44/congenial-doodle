<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelLocation extends Model
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
}
