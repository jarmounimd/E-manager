<?php

class liste_etudiants_coordonateur
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('coordonateur');

        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;
        $this->view('coordonateur/liste_etudiants/liste_etudiants', $data);

    }

}