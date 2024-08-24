<?php

class liste_etudiants
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');

        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;

        $this->view('chef/gerer_etudiants/liste_etudiants', $data);

    }

}