<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'event_id';    
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'event_id',
        'name',
        'description',
        'organizer',
        'gunStart_date',
        'status',
        'userfile',
        'org',
        'venue',
	];

    public function organizer()
    {
        return $this->belongsTo('app\User', 'organizer', 'id');
    }


}

