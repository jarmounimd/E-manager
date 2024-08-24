<?php

class savesNotes
{
    use Controller;

    public function index()
    {

        // Vérifier si les filière et semestre sont sélectionnés
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['module_id']) && isset($_POST['notes'])) {
            // Récupérer les données postées
            $moduleId = $_POST['module_id'];
            $notes = $_POST['notes'];
            $etudiantIds = $_POST['etudiant_ids'];

            // Valider et insérer les notes dans la base de données
            $noteModel = new notes(); // Remplacez NoteModel par le nom de votre modèle de note

            // Parcourir les notes postées
            foreach ($notes as $etudiantId => $note) {
                // Vérifier si la note est valide (entre 0 et 20)
                if ($note >= 0 && $note <= 20) {
                    // Insérer la note dans la base de données
                    $noteModel->insertNote($moduleId, $etudiantId, $note);
                }
            }
            header("Location: saisir_notes ");
        }

    }



}