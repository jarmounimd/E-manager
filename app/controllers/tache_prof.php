<?php

class tache_prof
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('coordonateur');
        
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         
            $taskTitle = isset($_POST['task_title']) ? $_POST['task_title'] : null;
            $taskMessage = isset($_POST['task_message']) ? $_POST['task_message'] : null;
            $dueDate = date('Y-m-d', strtotime($_POST['due_date']));
            $professeurId = isset($_POST['professeur_id']) ? $_POST['professeur_id'] : null;
         
            if (is_array($professeurId)) {
                // Assuming the first selected professor ID if multiple are selected
                $professeurId = reset($professeurId);
            }
            if ($taskTitle && $taskMessage && $dueDate && $professeurId) {
             
                $taskModel = new tache(); 

                    $taskModel->insertTask($taskTitle, $taskMessage,$professeurId, $dueDate );         
                redirect('profile_coor');
                exit;
            } else {
                echo "Please fill in all required fields.";
            }
        }
    }
}
