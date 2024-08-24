<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   require_once __DIR__ . '/../core/Model.php';
}

class manage_emploi
{
    use Model;

    protected $table = 'emploi';

    public function insertDraggedData($day, $slot, $idFiliere, $idSemestre, $moduleId)
    {
        $query = "INSERT INTO emploi (day, slot, id_filiere, id_semestre, id_module) 
                  VALUES (:day, :slot, :id_filiere, :id_semestre, :id_module)";
        $params = [
            'day' => $day,
            'slot' => $slot,
            'id_filiere' => $idFiliere,
            'id_semestre' => $idSemestre,
            'id_module' => $moduleId
        ];

        return $this->query($query, $params);
    }

    public function getScheduleData($idFiliere, $idSemestre)
    {
        $query = "
            SELECT e.day, e.slot, m.nom_module
            FROM emploi e
            JOIN modules m ON e.id_module = m.id
            WHERE e.id_filiere = :id_filiere AND e.id_semestre = :id_semestre
        ";
        $params = [
            'id_filiere' => $idFiliere,
            'id_semestre' => $idSemestre
        ];

        return $this->query($query, $params);
    }
    public function getScheduleDataEtudiant($idFiliere, $idSemestre)
    {
        $query = "
            SELECT e.day, e.slot, m.nom_module
            FROM emploi e
            JOIN modules m ON e.id_module = m.id
            WHERE e.id_filiere = :id_filiere AND e.id_semestre = :id_semestre
        ";
        $params = [
            'id_filiere' => $idFiliere,
            'id_semestre' => $idSemestre
        ];

        return $this->query($query, $params);
    }

    public function getScheduleDataProf($id_prof)
    {
        $query = "
            SELECT e.day, e.slot, m.nom_module, e.id_semestre, f.nom_filiere
            FROM emploi e
            JOIN modules m ON e.id_module = m.id
            JOIN filieres f ON f.id=e.id_filiere
            WHERE m.id_professeur= :id_prof
        ";
        $params = [
            'id_prof' => $id_prof,
        ];

        return $this->query($query, $params);
    }

    public function reset_emploi($idSemestre)
    {
        $query = "DELETE FROM emploi WHERE id_semestre = :id_semestre";
        $params = [
            'id_semestre' => $idSemestre
        ];

        return $this->query($query, $params);
    }
}
?>
