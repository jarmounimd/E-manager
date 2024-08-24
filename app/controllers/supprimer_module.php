<?php

class supprimer_module
{
    use Controller;

    public function index()
    {        include_once 'access_control.php';  
        checkUserRole('chef');
        
        // Disable caching
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Check if the ID of the module to delete is provided in the URL
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id_to_delete = $_GET['id'];

            // Create an instance of your modules model
            $modules = new modules;

            // Delete the module by calling the deleteModule method
            $modules->deleteModule($id_to_delete);

            // Redirect to another page after deletion if necessary
            redirect('liste_modules');


            exit();
        }
    }
}

?>
