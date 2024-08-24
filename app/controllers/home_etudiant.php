<?php
        include_once 'access_control.php';  
        checkUserRole('etudiant');

class home_etudiant
{
    use Controller;

    public function index()
    {

      
        // Vérifiez si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            // Récupération du nom d'utilisateur à partir de la session ou utilisation d'une valeur par défaut
            $data['nom'] = isset($_SESSION['user']->nom) ? $_SESSION['user']->nom : 'user';
            $data['prenom'] = isset($_SESSION['user']->prenom) ? $_SESSION['user']->prenom : 'user';

            // Chargement de la vue avec les données
            $this->view('etudiant/index', $data);
        } else {
            // Si l'utilisateur n'est pas connecté, redirigez-le vers la page d'accueil
            redirect('home');
            exit();
        }
    }
}
?>
