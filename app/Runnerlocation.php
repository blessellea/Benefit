<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Runnerlocation extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'runnerlocation';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'event_id',
        'user_id',
        'lng',
        'lat'
    ];

//    public function getBeneNameAttribute('id')
//    {
//        return ucfirst($id);
//    }

//    public function user()
//    {
//        return $this->belongsTo('app\AreaOfInterest', 'aoi_id', 'aoi_id');
//    }
//
//    public function event()
//    {
//        return $this->belongsTo('app\AreaOfInterest', 'aoi_id', 'aoi_id');
//    }

}
