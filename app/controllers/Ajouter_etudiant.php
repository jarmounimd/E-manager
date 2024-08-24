<?php
    include_once 'access_control.php';  
    checkUserRole('chef');
class Ajouter_etudiant
{

    
    use Controller;

    public function index()
    {
                include_once 'access_control.php';  
        checkUserRole('chef');
        $department_id = $_SESSION['user']->id_departement;

        $filieres = Filiere::getFilieresByDepartment($department_id);
        $semestres = Semestre::getSemestres();

        // Pass the data to the view
        $data['filieres'] = $filieres;
        $data['semestres'] = $semestres;
        $data['username'] = empty($_SESSION['user']) ? 'user' : $_SESSION['user']->email;

        $this->view('chef/gerer_etudiants/ajouter_etudiant', $data);
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
            $id_semestre = $_POST['semestre'];
            // Validate data
            if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($id_filiere) || empty($id_semestre)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires.";
            } else {
                // Ajouter l'étudiant
                $etudiantModel = new etudiant; // Assuming Etudiants is your model for handling students
                try {
                    // Tenter d'ajouter l'étudiant
                    $result = $etudiantModel->ajouterEtudiant($nom, $prenom, $email, $password, $id_filiere, $id_semestre);
                    $_SESSION['success'] = "Étudiant ajouté avec succès.";
                } catch (Exception $e) {
                    // Une erreur s'est produite lors de l'ajout de l'étudiant
                    $_SESSION['error'] = $e->getMessage();
                }
            }

            // Redirect to the same page to show success/error message
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }


}
