<?php

class tache_coor
{
    use Controller;

    public function index()
    {
        include_once 'access_control.php';  
        checkUserRole('chef');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         
            $taskTitle = isset($_POST['task_title']) ? $_POST['task_title'] : null;
            $taskMessage = isset($_POST['task_message']) ? $_POST['task_message'] : null;
            $dueDate = date('Y-m-d', strtotime($_POST['due_date']));
            $CoordId = isset($_POST['coord_id']) ? $_POST['coord_id'] : null;
         
            if (is_array($CoordId)) {
                // Assuming the first selected professor ID if multiple are selected
                $CoordId = reset($CoordId);
            }
            if ($taskTitle && $taskMessage && $dueDate && $CoordId) {
             
                $taskModel = new TaskChef(); 

                    $taskModel->insertTask($taskTitle, $taskMessage,$CoordId, $dueDate );         
                redirect('profile_chef');
                exit;
            } else {
                echo "Please fill in all required fields.";
            }
        }
    }
}
