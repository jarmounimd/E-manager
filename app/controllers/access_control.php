<?php
// access_control.php

/**
 * Check if the user has the right role and redirect if not.
 *
 * @param string $required_role The required role for access.
 */
function checkUserRole($required_role) {
    // Start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the session variables are set
    if (!isset($_SESSION['user']) || !isset($_SESSION['selected_role'])) {
        // If not set, redirect to login page
        redirect('login');
        exit();
    }

    // Compare the session role with the required role
    if ($_SESSION['selected_role'] !== $required_role) {
        // If the role doesn't match, redirect to the appropriate home page
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
                // Redirection par défaut si le rôle n'est pas reconnu
                redirect('home');
                break;
        }
        exit();
    }
}
