<?php

use Phalcon\Mvc\User\Component,
	Phalcon\Mvc\View;

require_once __DIR__ . '/../../vendor/Opauth/Opauth.php';
/**
 *
 * Sends e-mails based on pre-defined templates
 */
class Auth extends Component
{
	/**
	 * paramater array
	 */

	//protected $config;

	//Login with account google
	public function login()
	{

		$googleConfig = $this->objectToArray($this->config->opauth);

		

		//echo "<pre>";
		//print_r($googleConfig);
		var_dump($googleConfig);
		
		$opauth = new Opauth($googleConfig);

		$opauth->run();
	}
	public function objectToArray($object)
    {
        if(!is_object($object) && !is_array($object))
      	{
            return $object;
        }
        if(is_object($object))
        {
            $object = get_object_vars( $object );
        }
        return array_map(array($this,"objectToArray"), $object );
    }

    

}