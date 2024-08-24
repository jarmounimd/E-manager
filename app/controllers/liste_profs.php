<?php

class liste_profs
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');

        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;

        $this->view('chef/gerer_profs/liste_profs', $data);

    }

}