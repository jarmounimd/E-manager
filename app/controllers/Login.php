<?php
class Login
{
    use Controller;

    public function index()
    {

        // Check if the user is already logged in
        if (isset($_SESSION['user']) && isset($_SESSION['selected_role'])) {
            // Redirect based on the stored role
            switch ($_SESSION['selected_role']) {
                case 'coordonateur':
                    redirect('home_coordonateur');
                    break;
                case 'chef':
                    redirect('home_chef');
                    break;
                case 'prof':
                    redirect('home_prof');
                    break;
                case 'etudiant':
                    redirect('home_etudiant');
                    break;
                default:
                    // Default redirection if the role is not recognized
                    redirect('home');
                    break;
            }
            exit(); // Ensure to exit after redirecting
        }

        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Vérifier quel rôle a été sélectionné
            $selected_role = $_POST['selected_role'];

            // En fonction du rôle sélectionné, définir la table de base de données correspondante
            switch ($selected_role) {
                case 'coordonateur':
                    $table = 'coordonateur_filiere';
                    break;
                case 'chef':
                    $table = 'chef_departement';
                    break;
                case 'prof':
                    $table = 'prof';
                    break;
                case 'etudiant':
                    $table = 'etudiant';
                    break;
                default:
                    $table = ''; // Définir une valeur par défaut ou une action en cas de rôle non reconnu
                    break;
            }

            // Si la table correspondante a été définie
            if (!empty($table) && isset($_POST['email']) && isset($_POST['password'])) {
                // Instancier dynamiquement l'objet utilisateur en fonction du rôle
                switch ($selected_role) {
                    case 'coordonateur':
                        $user = new coordonateur;
                        break;
                    case 'chef':
                        $user = new chef;
                        break;
                    case 'prof':
                        $user = new prof;
                        break;
                    case 'etudiant':
                        $user = new etudiant;
                        break;
                    default:
                        $user = null; // Définir une valeur par défaut ou une action en cas de rôle non reconnu
                        break;
                }

                if ($user) {
                    $data['email'] = $_POST['email'];
                    $data['password'] = $_POST['password'];

                    // Vérifier les informations d'identification dans la table appropriée
                    $arr['email'] = $_POST['email'];
                    $row = $user->first($arr);

                    if ($row) {
                        // Si les informations d'identification sont correctes
                        if ($row->password === $_POST['password']) {
                            // Stocker l'utilisateur et le rôle sélectionné dans la session
                            $_SESSION['user'] = $row;
                            $_SESSION['selected_role'] = $selected_role;

                            // Redirection en fonction du rôle de l'utilisateur
                            switch ($selected_role) {
                                case 'coordonateur':
                                    redirect('home_coordonateur');
                                    break;
                                case 'chef':
                                    redirect('home_chef');
                                    break;
                                case 'prof':
                                    redirect('home_prof');
                                    break;
                                case 'etudiant':
                                    redirect('home_etudiant');
                                    break;
                                default:
                                    // Redirection par défaut si le rôle n'est pas reconnu
                                    redirect('home');
                                    break;
                            }
                        } else {
                            // Si le mot de passe est incorrect
                            $user->errors['password'] = "Wrong password";
                        }
                    } else {
                        // Si l'utilisateur n'existe pas
                        $user->errors['email'] = "Wrong email or password";
                    }

                    $data['errors'] = $user->errors;
                }
            }
        }

        $this->view('login', $data);
    }
}
