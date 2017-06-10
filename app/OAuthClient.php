<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class OAuthClient extends Model
{
    //
    protected $table = 'oauth_clients';

    protected $fillable = [
   		'id', 'sercet', 'name',
    ];
}
