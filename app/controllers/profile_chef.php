<?php

class profile_chef
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');
        
        // Vérifiez si l'utilisateur est connecté
        if (isset($_SESSION['user'])) {
            // Récupération du nom d'utilisateur à partir de la session ou utilisation d'une valeur par défaut
            $data['nom'] = isset($_SESSION['user']->nom) ? $_SESSION['user']->nom : 'User';
            $data['prenom'] = isset($_SESSION['user']->prenom) ? $_SESSION['user']->prenom : 'User';

            // Chargement de la vue avec les données
            $this->view('chef/profile', $data);
        } else {
            // Si l'utilisateur n'est pas connecté, redirigez-le vers la page d'accueil
            redirect('home');
            exit();
        }
    }
}
?>
