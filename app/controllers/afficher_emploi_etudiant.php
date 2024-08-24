<?php

class afficher_emploi_etudiant {
    use Controller;

    public function index() {
        include_once 'access_control.php';  
        checkUserRole('etudiant');

        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;
        // Assuming you have a method to get the schedule data, you should include that here
        $emploiManager = new manage_emploi();
        $idFiliere = $_SESSION['user']->id_filieres;
        $idSemestre = $_SESSION['user']->id_semestre;
        $data['scheduleData'] = $emploiManager->getScheduleDataEtudiant($idFiliere, $idSemestre);

        $this->view('etudiant/emploi_etudiant', $data);
    }
}
?>
