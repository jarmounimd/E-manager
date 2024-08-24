<?php
class _404
{
	use Controller;
	
	public function index()
	{
        $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $this->view('404',$data);
    }

}
