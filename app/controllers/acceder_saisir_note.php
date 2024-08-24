<?php

class acceder_saisir_note
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('prof');
        // Vérifier si le module et le département sont sélectionnés
        if (isset($_GET['id_module'])) {
            $moduleId = $_GET['id_module'];
            $departementId = $_GET['id_departement'] ?? null;
            $filiereId = $_GET['id_filiere'] ?? null;


            $etudiants = new etudiant();
            $datas['etudiants'] = $etudiants->getEtudiantsByModules($moduleId,$filiereId);
            $datas['id_filiere'] = $filiereId; // Pass filiere ID to the view if needed
            $datas['id_module'] = $moduleId;

            $this->view('prof/acceder_saisir_notes', $datas);
        } else {
            // Rediriger vers la page de saisie des notes si le module n'est pas sélectionné
            header("Location: saisir_notes");
            exit();
        }
    }
}
