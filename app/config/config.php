<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'     => 'Mysql',
		'host'        => 'localhost',
		'username'    => 'root',
		'password'    => 'qazwsx2013@',
		'dbname'      => 'sendmail',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'cacheDir'       => __DIR__ . '/../../app/cache/volt/',
		'baseUri'        => '/opauth/',
		'publicUrl'      => '127.0.0.1/sendmail',
		'debug'          => '0',
	),
	'opauth'=>array(

		'path' => '/opauth/session/loginOpauth/',
	    'callback_url' => 'http://localhost/opauth/session/success/',
	    //'callback_transport' => 'post',
	    'security_salt' => 'LDFmiilYf8Fyw5W10aaaaarx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',
	    'debug' =>true,

 		'Strategy'=>array(
			/*'facebook' =>array(

			),*/
			'Google' =>array(
				'client_id'		=>'378342860757-u41bhknu4mvt459gqkj451gt32gret8k.apps.googleusercontent.com',
				'client_secret'	=>'nF0-qgZIt6IjlLzEPuTiZVaI',
				'redectUrl' =>'http://opauth.duythien.com/session/abc',

			),
			/*'Twitter' =>array(
				'key'		 =>'fz8titsIrWJjeNdkR7d0w',
				'secret'	 =>'66hqNnIyMkW84lp4f7XmcKGAJQk1ffrT2wIyIxP6mQ'

			),*/
		),
	),
	'mail' => array(	
                'fromName' => 'Phalcon Term',
                'fromEmail' => 'fcopensuse@gmail.com',
                'smtp' => array(
                        'server'	=> 'smtp.gmail.com',
                        'port' 		=> 465,
                        'security' => 'ssl',
                        'username' => 'fcopensuse@gmail.com',
                        'password' => 'mypass',
                )
        ),
));
