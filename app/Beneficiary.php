<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $primaryKey = 'bene_id';
    protected $table = 'beneficiary';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'name',
        'about',
        'email',
        'aoi_id'
    ];

    public function getBeneNameAttribute($name)
    {
        return ucfirst($name);
    }

    public function aoi()
    {
        return $this->belongsTo('app\AreaOfInterest', 'aoi_id', 'aoi_id');
    }

    public function beneficiary()
    {
        return $this->hasMany('app\Beneficiary', 'bene_id');
    }
}
