<?php
    include_once 'access_control.php';  
    checkUserRole('coordonateur');
class creer_emploi
{

    use Controller;

    public function index()
    {
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;
        $this->view('coordonateur/emploi/creer_emploi', $data);
    }

    public function store()
    {
        // Check if the request method is POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve the sent data from the request body
            $requestData = json_decode(file_get_contents('php://input'), true);

            // Check if the 'schedule' field is present in the request
            if (!isset($requestData['schedule'])) {
                http_response_code(400); // Bad request
                exit("Missing required fields in the request.");
            }

            // Extract schedule data from the received JSON
            $schedule = $requestData['schedule'];

            // Validate and insert each schedule item
            $manageEmploi = new manage_emploi();
            try {
                foreach ($schedule as $item) {
                    // Validate individual item fields
                    if (!isset($item['day'], $item['slot'], $item['moduleId'], $item['idFiliere'], $item['idSemestre'])) {
                        throw new Exception("Missing required fields in one of the schedule items.");
                    }

                    $day = $item['day'];
                    $slot = $item['slot'];
                    $moduleId = $item['moduleId'];
                    $idFiliere = $item['idFiliere'];
                    $idSemestre = $item['idSemestre'];

                    // Attempt to insert dragged module data
                    $result = $manageEmploi->insertDraggedData($day, $slot, $idFiliere, $idSemestre, $moduleId);
                }
                $_SESSION['success'] = "Données du module déplacé insérées avec succès.";
            } catch (Exception $e) {
                // An error occurred while inserting dragged module data
                http_response_code(500); // Internal Server Error
                exit($e->getMessage());
            }

            // Respond with success message
            http_response_code(200); // OK
            exit("Module data inserted successfully.");
        }
    }
}
?>
