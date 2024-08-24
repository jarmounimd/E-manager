<?php

class consultation_notes
{

    use Controller;

    public function index()
    {

        include_once 'access_control.php';  
        checkUserRole('etudiant');
    
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;

        $this->view('etudiant/consultation_notes', $data);
    }

}