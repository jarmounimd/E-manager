<?php

class supprimer_prof
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');

        // Disable caching
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Check if the ID of the module to delete is provided in the URL
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id_to_delete = $_GET['id'];

            // Create an instance of your modules model
            $prof = new Profs;

            // Delete the module by calling the deleteModule method
            $prof->deleteprof($id_to_delete);

            // Redirect to another page after deletion if necessary
            redirect('liste_profs');


            exit();
        }
    }
}

?>
