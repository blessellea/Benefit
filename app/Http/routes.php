<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/save', function () {
    return view('map.save');
});

Route::group(['middleware' => ['web']], function(){
    Route::auth();
    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
    Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
    Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

    Route::get('/admin', 'AdminController@index');

    //Runner
    Route::get('viewrunners', 'UserController@runner');
    Route::post('blockRunner/{id}', 'UserController@blockRunner');

    //Organizer
    Route::get('vieworganizers', 'UserController@organizer');
    Route::post('blockOrganizer/{id}', 'UserController@blockOrganizer');

    //Events
    Route::get('viewevents', 'EventsController@viewevents');
    Route::get('activeEvent', 'EventsController@activeevents');
    Route::post('activeEvent', 'JoinController@join');
    Route::post('approve/{id}', 'EventsController@approve');
    Route::post('decline/{id}', 'EventsController@decline');
    Route::post('finish/{id}', 'EventsController@finish');


});

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/organizer/login','OrganizerAuth\AuthController@showLoginForm');
    Route::post('/organizer/login','OrganizerAuth\AuthController@login');
    Route::get('/organizer/logout','OrganizerAuth\AuthController@logout');

    // Registration Routes...
    Route::get('organizer/register', 'OrganizerAuth\AuthController@showRegistrationForm');
    Route::post('organizer/register', 'OrganizerAuth\AuthController@register');

    Route::get('/organizer', 'OrganizerController@index');

});

$api = app('Dingo\Api\Routing\Router');

Route::resource('benefactors', 'BenefactorController');
Route::resource('events', 'EventsController');
Route::resource('beneficiary', 'BeneficiaryController');
Route::resource('areaofinterest', 'AOIController');
Route::resource('runners', 'RunnerController');

//Route::auth();
//Route::get('/home', 'HomeController@index');
//Route::post('/home', 'HomeController@index');
//Route::get('/about', 'HomeController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/icons', function () {
    return view('icons');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tablelist', function () {
    return view('table');
});
Route::get('/profile', function () {
    return view('user');
});
Route::get('/home', function () {
    return view('home');
});

//organizer side

Route::get('product', 'event_controller@index');
Route::get('maps', 'event_controller@mapindex');
Route::post('product', 'event_controller@add');
Route::get('product/view', 'event_controller@view');
Route::post('product/update', 'event_controller@update');
Route::post('product/delete', 'event_controller@delete');

//
//$api->version('v1',['middleware' => 'api.auth'], function($api) {
//    $api->post('oauth/access_token', function() {
//        return Authorizer::issueAccessToken();
//    });
//});


$api->version('v1',function($api) {

    $api->get('user/validate', [
        'as'   => 'validate.get',
        'uses' =>'app\Http\Controllers\UserController@validateUser']);

    //  post runner
    $api->post('postRunner', [
        'as'   => 'runner.post',
        'uses' => 'app\Http\Controllers\UserController@postRunner']);

    //  post user location
    $api->post('viewLocation', [
        'as'   => 'locations.post',
        'uses' => 'app\Http\Controllers\ApiBenefitController@postLocation']);

    //     view all Location
    $api->get('viewLocation/{id}', [
        'as'   => 'locations.get',
        'uses' => 'app\Http\Controllers\ApiBenefitController@location']);

    $api->get('viewLocation', [
        'as'   => 'locations.get',
        'uses' => 'app\Http\Controllers\ApiBenefitController@viewLocation']);

    //  Register event ->runner
    $api->post('registerevent', [
        'as'   => 'user.post',
        'uses' => 'app\Http\Controllers\ApiBenefitController@registerEvent']);

    //  Register user for facebook
    $api->post('registeruser', [
        'as'   => 'user.post',
        'uses' => 'app\Http\Controllers\ApiBenefitController@storeUser']);

    //  View Events filter  [ flag == 1 ]
    $api->get('viewEvents', [
        'as'   => 'events.get',
        'uses' => 'app\Http\Controllers\ApiBenefitController@viewEvents']);

    //  View Beneficiary Table
    $api->get('viewAllbeneficiary', [
        'as'   => 'benefactors.get',
        'uses' => 'app\Http\Controllers\ApiBenefitController@viewAllbeneficiary']);

//    Benefactor table

    $api->get('benefactors', [
        'as'   => 'benefactors.get',
        'uses' => 'app\Http\Controllers\ApiBenefitController@index']);

    $api->get('benefactors/{id}', [
        'as'   => 'benefactors.show',
        'uses' => 'app\Http\Controllers\ApiBenefitController@show']);

    $api->post('benefactors', [
        'as'   => 'benefactors.post',
        'uses' => 'app\Http\Controllers\ApiBenefitController@store']);

    $api->patch('benefactors/{id}', [
        'as'   => 'benefactors.patch',
        'uses' => 'app\Http\Controllers\ApiBenefitController@update']);

    $api->delete('benefactors/{id}', [
        'as'   => 'benefactors.delete',
        'uses' => 'app\Http\Controllers\ApiBenefitController@destroy']);

    //    Runner table

    $api->get('runners', [
        'as'   => 'runners.get',
        'uses' => 'app\Http\Controllers\ApiBenefitController@runnerindex']);

    $api->get('runners/{id}', [
        'as'   => 'runners.show',
        'uses' => 'app\Http\Controllers\ApiBenefitController@runnershow']);

    $api->post('runners', [
        'as'   => 'runners.post',
        'uses' => 'app\Http\Controllers\ApiBenefitController@runnerstore']);

    $api->patch('runners/{id}', [
        'as'   => 'runners.patch',
        'uses' => 'app\Http\Controllers\ApiBenefitController@runnerupdate']);

    $api->delete('runners/{id}', [
        'as'   => 'runners.delete',
        'uses' => 'app\Http\Controllers\ApiBenefitController@runnerdestroy']);







});
