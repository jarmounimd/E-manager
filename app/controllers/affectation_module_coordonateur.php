<?php

class affectation_module_coordonateur
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('coordonateur');
        // Récupérer l'id de la filière de l'utilisateur connecté
        $id_filiere = $_SESSION['user']->id_filiere;

        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;

        // Charger la vue avec les données récupérées
        $this->view('coordonateur/gerer_profs/affectation_module', $data);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupérer les données du formulaire
            $module_id = $_POST['module_id'];
            $professeur_id = $_POST['professeur_id'];

            // Valider les données
            if (empty($module_id) || empty($professeur_id)) {
                // Message d'erreur si des champs sont vides
                $_SESSION['error'] = "Tous les champs sont obligatoires.";
            } else {
                // Instancier la classe Modules pour affecter le module au professeur
                $moduleModel = new Modules();
                try {
                    // Tenter d'affecter le module au professeur
                    $result = $moduleModel->affecterModuleProfesseur($module_id, $professeur_id);
                    // Message de succès
                    $_SESSION['success'] = "Module affecté avec succès au professeur.";
                } catch (Exception $e) {
                    // Message d'erreur si une exception est levée
                    $_SESSION['error'] = $e->getMessage();
                }
            }

            // Rediriger vers la même page pour afficher les messages de succès ou d'erreur
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}
?>

