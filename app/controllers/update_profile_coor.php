<?php
        include_once 'access_control.php';  
        checkUserRole('coordonateur');
class update_profile_coor
{
    use Controller;

    public function index()
    {


        // Vérifiez si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            $coordonateurModel = new coordonateur();

            // Récupérer les données actuelles du coordonateur depuis la base de données
            $data['user'] = $coordonateurModel->getProfileCoor($_SESSION['user']->id);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Récupérer les données envoyées via le formulaire
                $updatedData = [
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'email' => $_POST['email'],
                    'phone_nbr' => $_POST['telephone'],
                    'Address' => $_POST['adresse'],
                    'Country' => $_POST['pays']
                ];

                // Appeler la fonction de mise à jour du modèle
                $coordonateurModel->updateProfileCoor($_SESSION['user']->id, $updatedData);

                // Rediriger ou afficher un message de succès
                redirect('profile_coor');
                exit();
            }

            // Chargement de la vue avec les données actuelles
            $this->view('coordonateur/profile', $data);
        } else {
            // Si l'utilisateur n'est pas connecté, redirigez-le vers la page d'accueil
            redirect('home');
            exit();
        }
    }
     public function updatePicture()
{
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $profModel = new coordonateur;
        // Get the uploaded file name
        $profilePic = $_FILES['profile_picture']['name'];

        // Set the target directory to the correct path
        $targetDir = $_SERVER['DOCUMENT_ROOT'] . '/MVC-PROJ/public/assets/data/uploads/';
        $targetFile = $targetDir . basename($profilePic);

        // Ensure the target directory exists
        if (!is_dir($targetDir)) {
            echo "Error: The directory does not exist.";
            exit();
        }

        // Attempt to move the uploaded file
        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFile)) {
            // Update the profile picture in the database
            $profModel->updateProfilePicture($_SESSION['user']->id, $profilePic);

            // Redirect to the profile page with success
            redirect('profile_coor');
            exit();
        } else {
            // Check for specific error scenarios
            if (!is_writable($targetDir)) {
                echo "Error: The target directory is not writable.";
            } else {
                echo "Error: Failed to move the uploaded file.";
            }
            exit();
        }
    } else {
        // Handle the file upload error
        echo "Error: File upload error code: " . $_FILES['profile_picture']['error'];
        exit();
    }
}

}
?>
