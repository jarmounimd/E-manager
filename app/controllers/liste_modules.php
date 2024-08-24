<?php

class liste_modules
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');

        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;

        $this->view('chef/gerer_modules/liste_modules', $data);

    }

}