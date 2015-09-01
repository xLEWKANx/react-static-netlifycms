<?php

return array(

	'driver' => 'file',
	'lifetime' => 120,
	'expire_on_close' => false,
	'files' => storage_path().'/sessions',
	'connection' => null,
	'table' => 'sessions',
	'lottery' => array(2, 100),
	'cookie' => 'laravel_session',
	'path' => '/',
    'domain' => null,
    'secure' => false,

);
