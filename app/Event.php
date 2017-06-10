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
        'gunStart_time',
        'venue',
        'registration_deadline',
        'status'
	];

    public function organizer()
    {
        return $this->belongsTo('app\User', 'organizer', 'id');
    }


}

