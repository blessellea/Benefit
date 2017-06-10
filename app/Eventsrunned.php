<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 4/6/2017
 * Time: 2:12 PM
 */


namespace app;

use Illuminate\Database\Eloquent\Model;

class Eventsrunned extends Model
{
    protected $table = 'joinevent';
    protected $primaryKey = 'er_id';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'er_id',
        'user_id',
        'event_cat'
    ];
    public function user(){
        return $this->belongsTo('app\User', 'user_id', 'id');
    }

    public function event(){
    return $this->belongsTo('app\Event', 'event_id', 'event_id');
}

}
