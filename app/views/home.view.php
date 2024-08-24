<?php
// Check if a session is active before starting a new one
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION['USER'])) {
    // Redirect the user to the login page
    redirect('login');
    exit();
} else {
    $selected_role = $_POST['selected_role'] ?? null;

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
            redirect('_404'); // Redirect to an error page or show an error message
            exit();
    }
}
?>
