<?php

use Phalcon\Mvc\User\Component,
	Phalcon\Mvc\View;

require_once __DIR__ . '/../../vendor/Opauth/Opauth.php';
/**
 *
 * Authenticaton based on pre-defined paramater
 */
class Auth extends Component
{
	/**
	 * paramater array
	 */

	protected $paramater;


	//Login with account google and more
	public function login()
	{

		$this->paramater = $this->objectToArray($this->config->opauth);

		if (is_array($this->paramater)) {
			$paramater = $this->paramater;
		}
		
		$opauth = new Opauth($paramater);

		$opauth->run();
	}
	/**
	 * Convert  object into array
	 * @param   $object is object
	 * @return  array
	 */
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