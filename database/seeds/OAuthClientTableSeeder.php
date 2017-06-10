<?php

use Illuminate\Database\Seeder;

class OAuthClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create andriod client secret

    \app\OAuthClient::create([
   		'id'   	=> 'a68995225cb0f28b173a'  ,  
   		'secret'=> '68e31045819e32ce1f5dde35ebfdac89',
   		'name'	=> 'Andriod',
    	]);        
    
	    // Create website client secret

    \app\OAuthClient::create([
   		'id' => 'e0ee751f05007ad44c36 ',  
   		'secret'=> '55181322b6fc83cc91639220923cb86b ',
   		'name'	=> 'Website',
    	]);

    }
}
