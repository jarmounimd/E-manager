<?php
class aid_etud
{

	use Controller;
	
	public function index()
	{
        include_once 'access_control.php';  
        checkUserRole('etudiant');

        $data['username'] = empty($_SESSION['user']) ? 'user':$_SESSION['user']->email;

        $this->view('etudiant/aid',$data);
    }

}
