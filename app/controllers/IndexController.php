<?php
class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	
    	//var_dump($opauth);
    	//$this->view->disable();

   	}
   	public function googleAction()
   	{
   		var_dump($this->session->get('opauth'));
   		$this->view->disable();
   		$this->view->google =   $this->session->get('opauth');
   	}
    public function abcAction()
    {
    	echo "string";
    	$this->view->disable();
    }

}

