<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],
	'google'=>
			[
				'client_id'=>'170416842129-45p4cgvd7oh5brf1q47h79b6huviaabk.apps.googleusercontent.com',
				'client_secret'=>'UZ7VwCZxljdlyiiPVKgbKiV1',
				'redirect'=>'http://ritesh.app:8000/account/google'
			],
];
