<?php

use Phalcon\DI\FactoryDefault,
	Phalcon\Mvc\View,
	Phalcon\Flash\Direct as Flash,
	Phalcon\Mvc\Url as UrlResolver,
	Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter,
	Phalcon\Mvc\View\Engine\Volt as VoltEngine,
	Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter,
	Phalcon\Session\Adapter\Files as SessionAdapter;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();
$di->set('config', $config);


/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function() use ($config) {
	$url = new UrlResolver();
	$url->setBaseUri($config->application->baseUri);
	return $url;
}, true);

/**
 * Setting up the view component
 */
$di->set('view', function() use ($config) {

	$view = new View();

	$view->setViewsDir($config->application->viewsDir);

	$view->registerEngines(array(
		'.volt' => function($view, $di) use ($config) {

			$volt = new VoltEngine($view, $di);
			$voltOptions = array(
				'compiledPath' => $config->application->cacheDir,
				'compiledSeparator' => '_'
			);
			//debug
			if ('1' != $config->application->debug) {
                            $voltOptions['compileAlways'] = true;
                        }
			$volt->setOptions($voltOptions);

			return $volt;
		},
		'.phtml' => 'Phalcon\Mvc\View\Engine\Php'
	));

	return $view;
}, true);

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->set('db', function() use ($config) {
	return new DbAdapter(array(
		'host' => $config->database->host,
		'username' => $config->database->username,
		'password' => $config->database->password,
		'dbname' => $config->database->dbname
	));
});
/**
 * Loading routes from the routes.php file
 */
$di->set('router', function() {
	return require __DIR__ . '/routers.php';
});
/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function() {
	return new MetaDataAdapter();
});

/**
 * Start the session the first time some component request the session service
 */
$di->set('session', function() {
	$session = new SessionAdapter();
	$session->start();
	return $session;
});
/**
 * Flash service with custom CSS classes
 */
$di->set('flash', function(){
	return new Flash(array(
		'error' => 'alert alert-error',
		'success' => 'alert alert-success',
		'notice' => 'alert alert-info',
	));
});

/**
 * Start the sendmail
 */

$di->set('mail', function(){
        return new Mail();
});
/**
*Start auth login google, yahoo,...
*/
$di->set('auth',function(){
	return new  Auth();
});