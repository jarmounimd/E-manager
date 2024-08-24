<?php
class aid_chef
{


	use Controller;
	
	public function index()
	{
        include_once 'access_control.php';  
        checkUserRole('chef');
        $data['username'] = empty($_SESSION['user']) ? 'user':$_SESSION['user']->email;

        $this->view('chef/aid',$data);
    }

}
