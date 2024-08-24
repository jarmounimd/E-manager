<?php
    include_once 'access_control.php';  
    checkUserRole('chef');
    
class Ajouter_Prof
{

    use Controller;

    public function index()
    {
        $department_id = $_SESSION['user']->id_departement;

        // Load the departments
        $departments = Departement::getAllDepartments($department_id);
        $filieres = Filiere::getFilieresByDepartment($department_id);
        // Pass the data to the view
        $data['departments'] = $departments;
        $data['filieres']= $filieres;
        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;

        $this->view('chef/gerer_profs/ajouter_prof', $data);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the form data
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id_filiere = $_POST['filiere'];

            // Validate data
            if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($id_filiere) ) {
                $_SESSION['error'] = "Tous les champs sont obligatoires.";
            } else {
                // Ajouter le professeur
                $profModel = new Profs(); 
                try {
                    // Tenter d'ajouter le professeur
                    $result = $profModel->ajouterProf($nom, $prenom, $email, $password, $id_filiere);
                    $_SESSION['success'] = "Professeur ajouté avec succès.";
                } catch (Exception $e) {
                    // Une erreur s'est produite lors de l'ajout du professeur
                    $_SESSION['error'] = $e->getMessage();
                }
            }

            // Redirect to the same page to show success/error message
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

}
