<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 3/31/2017
 * Time: 8:43 PM
 */

namespace app;

use Illuminate\Database\Eloquent\Model;

class EventKm extends Model
{
    protected $table = 'eventkm';
    protected $primaryKey = 'eventkm_id';
//    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'eventkm_id',
        'event',
        'km',
        'registration_fee',
        'color',
        'numOfPoints'

    ];
    public function events()
    {
        return $this->belongsTo('app\Event', 'event', 'event_id');
    }
    public function event(){
        return $this->hasMany('app\Event','event');
    }

}