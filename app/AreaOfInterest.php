<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class AreaOfInterest extends Model
{
    protected $table = 'areaofinterest';
    protected $primaryKey = 'aoi_id';
    public $timestamps = false;
    protected $fillable = [
        'aoi_id',
        'type'
    ];
}



