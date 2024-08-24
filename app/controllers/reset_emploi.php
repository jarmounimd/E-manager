<?php
trait Controller {
    public function view($name, $data = []) {
        if (!empty($data)) {
            extract($data);
        }

        $filename = "../app/views/".$name.".view.php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}

class reset_emploi {

    use Controller;

    public function index() {
        $data['username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->email;
    }

    public function reset() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idSemestre'])) {
            $idSemestre = $_POST['idSemestre'];
            $emploiManager = new manage_emploi();
            $emploiManager->reset_emploi($idSemestre);

            header("Location: ../creer_emploi_s".$idSemestre);
        }
    }
}
?>
