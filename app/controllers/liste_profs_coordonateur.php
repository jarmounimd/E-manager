<?php

class liste_profs_coordonateur
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('coordonateur');

        
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;

        $this->view('coordonateur/gerer_profs/liste_profs', $data);

    }

}