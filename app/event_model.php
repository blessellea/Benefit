<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_model extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_events';
    protected $fillable = [
        'id',
        'time',
        'date',
        'venue',

        'event_name',
        'description',
        'organizer',
        'olregsite',
        'regfee'
    ];
}