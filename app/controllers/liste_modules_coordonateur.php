<?php

class liste_modules_coordonateur
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('coordonateur');

        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;



        $this->view('coordonateur/gerer_modules/liste_modules', $data);

    }

}