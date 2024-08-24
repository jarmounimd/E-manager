<?php


trait Controller {
    public function view($name, $data = []) {
        if (!empty($data)) {
            extract($data);
        }

        $filename = "../app/views/" . $name . ".view.php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}
?>

<?php

class afficher_emploi_s4 {
    use Controller;

    public function index() { 
       include_once 'access_control.php';  
        checkUserRole('coordonateur');
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;
        // Assuming you have a method to get the schedule data, you should include that here
        $emploiManager = new manage_emploi();
        $idFiliere = $_SESSION['user']->id_filiere;
        $idSemestre = 4; // Replace with actual semester ID if needed
        $data['scheduleData'] = $emploiManager->getScheduleData($idFiliere, $idSemestre);

        $this->view('coordonateur/afficher_emploi/afficher_emploi_s4', $data);
    }
}
?>
