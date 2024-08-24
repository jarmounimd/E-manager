<?php

class saisir_notes
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('prof');

        // Récupérer les filières et les semestres
        $department_id = $_SESSION['user']->id_departement;
        $prof_id = $_SESSION['user']->id;
        $filieres = $_SESSION['user']->id_filiere;

        $modules = modules::getAllModlesWithProfsId($prof_id);
        $semestres = Semestre::getSemestres();
        

        $data['modules']=$modules ;
        // Récupérer les étudiants en fonction de la filière et du semestre sélectionnés
        $id_filiere = $_GET['filiere'] ?? null;
        $id_semestre = $_GET['semestre'] ?? null;
      

        // Vérifier si les filière et semestre sont sélectionnés


        // Passer les données à la vue
        $data['filieres'] = $filieres;
        $data['semestres'] = $semestres;
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;

        

        $this->view('prof/saisir_notes', $data);
    }
}