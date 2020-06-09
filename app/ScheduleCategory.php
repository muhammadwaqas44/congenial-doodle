<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ScheduleCategory extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }


}
