<?php
class aid_prof
{
	use Controller;
	
	public function index()
	{
        include_once 'access_control.php';  
        checkUserRole('prof');

        $data['username'] = empty($_SESSION['user']) ? 'user':$_SESSION['user']->email;

        $this->view('prof/aid',$data);
    }

}
