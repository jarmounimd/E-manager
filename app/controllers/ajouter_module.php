<?php
class ajouter_module
{


    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');

        $department_id = $_SESSION['user']->id_departement;

        // Load the filieres and semestres for the department
        $filieres = Filiere::getFilieresByDepartment($department_id);
        $semestres = Semestre::getSemestres();

        // Pass the data to the view
        $data['filieres'] = $filieres;
        $data['semestres'] = $semestres;
        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;

        $this->view('chef/gerer_modules/ajouter_module', $data);
    }

    public function store()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the form data
            $nom_module = $_POST['nom_module'];
            $id_filiere = $_POST['filiere'];
            $id_semestre = $_POST['semestre'];

            // Validate data
            if (empty($nom_module) || empty($id_filiere) || empty($id_semestre)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires.";
            } else {
                // Ajouter le module
                $moduleModel = new Modules();
                try {
                    // Tenter d'ajouter le module
                    $result = $moduleModel->ajouterModule($nom_module, null, $id_filiere, $id_semestre);
                    $_SESSION['success'] = "Module ajouté avec succès.";
                } catch (Exception $e) {
                    // Le module existe déjà ou une autre erreur s'est produite
                    $_SESSION['error'] = $e->getMessage();
                }
            }

            // Redirect to the same page to show success/error message
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

}
