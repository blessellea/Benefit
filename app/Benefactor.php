<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Benefactor extends Model
{
	protected $primaryKey = 'id';
	protected $table = 'benefactor';
    protected $fillable = [
        'id',
        'name',
        'about',
        'email',
        'created_at',
        'updated_at'
    ];
}


