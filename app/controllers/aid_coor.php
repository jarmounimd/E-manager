<?php
class aid_coor
{
	use Controller;
	
	public function index()
	{
        include_once 'access_control.php';  
        checkUserRole('coordonateur');

        $data['username'] = empty($_SESSION['user']) ? 'user':$_SESSION['user']->email;

        $this->view('coordonateur/aid',$data);
    }

}
