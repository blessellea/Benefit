<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 4/28/2017
 * Time: 4:21 PM
 * 	runnerId	fname	lname	gender	birthdate	address	email	password
 */

namespace app;

use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    protected $table = 'runner';
    protected $primaryKey = 'runnerId';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'birthdate',
        'address',
        'contact',
        'email',
        'password'
    ];

}
