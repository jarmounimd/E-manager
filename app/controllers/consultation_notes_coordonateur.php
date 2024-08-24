<?php

class consultation_notes_coordonateur
{


    use Controller;

    public function index()
    {

        include_once 'access_control.php';  
        checkUserRole('coordonateur');
        
        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;

        $this->view('coordonateur/consultation_notes', $data);
    }
}