<?php

class SessionController extends ControllerBase
{

    public function indexAction()
    {
    	        echo "<h1>Hello!</h1>";
    }
    public function signupAction()
    {
    	if ($this->request->isPost()) {
            if ($this->request->getPost()) {
                $user = new Users();

                $user->assign(array(
                        'username' => $this->request->getPost('username', 'striptags'),
                        'email' => $this->request->getPost('email'),
                        'password' => $this->security->hash($this->request->getPost('password')),
                        'fullName' => $this->request->getPost('fullName')
                ));
                if ($user->save()) {
                    return $this->dispatcher->forward(array(
                            'controller' => 'session',
                            'action' => 'index'
                    ));
            	}

                $this->flash->error($user->getMessages());
                
            }
            
        }
    }
    public function loginAction()
    {
        echo " <h2> You Login Form </h2>";
    }

    /**
         * Confirms an e-mail, if the user must change its password then changes it
    */
    public function confirmEmailAction()
    {
            $code = $this->dispatcher->getParam('code');

            $confirmation = EmailConfirmations::findFirstByCode($code);
            if (!$confirmation) {
                    return $this->dispatcher->forward(array(
                            'controller' => 'index',
                            'action' => 'index'
                    ));
            }
            if ($confirmation->confirmed <> 'N') {
                $this->flash->success('The email was successfully confirmed. Now you must change your password');
                return $this->dispatcher->forward(array(
                        'controller' => 'session',
                        'action' => 'login'
                ));
            }
            //confirmation
            $confirmation->confirmed = 'Y';
            $confirmation->user->active = 'Y';
            /**
                 * Change the confirmation to 'confirmed' and update the user to 'active'
            */
            if ($confirmation->save()) {
                    return $this->dispatcher->forward(array(
                            'controller' => 'session',
                            'action' => 'login'
                    ));
            }
            else{
                foreach ($confirmation->getMessages() as $message) {
                        $this->flash->error($message);
                }
            }
    }

}

