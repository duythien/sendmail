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
		'baseUri'        => '/sendmail/',
		'publicUrl'      => '127.0.0.1/sendmail',
		'debug'          => '0',
	),
	'mail' => array(
                'fromName' => 'Phalcon Term',
                'fromEmail' => 'fcopensuse@gmail.com',
                'smtp' => array(
                        'server'	=> 'smtp.gmail.com',
                        'port' 		=> 465,
                        'security' => 'ssl',
                        'username' => 'fcopensuse@gmail.com',
                        'password' => '',
                )
        ),
));
