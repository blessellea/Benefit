<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class EventKmWaypoints extends Model
{
    protected $primaryKey = 'eventwp_id';
//    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'eventwp_id',
        'eventkm_id',
        'predecessor',
        'long',
        'lat'
    ];
    public function eventkm(){
        return $this->belongsTo('app\EventKm', 'eventkm_id', 'eventkm_id');
    }

    public function eventwp(){
        return $this->hasMany('app\EventKmWaypoints','predecessor');
    }
}
