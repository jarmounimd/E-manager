<?php

class afficher_emploi_prof {
    use Controller;

    public function index() {

        include_once 'access_control.php';  
        checkUserRole('prof');

        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;
        $id_prof=$_SESSION['user']->id;
        // Assuming you have a method to get the schedule data, you should include that here
        $emploiManager = new manage_emploi();

        $data['scheduleData'] = $emploiManager->getScheduleDataProf($id_prof);

        $this->view('prof/emploi_prof', $data);
    }
}
?>
