<?php

class Semestre
{
    use Model;

    protected $table = 'semestre';

    public static function getSemestresByFiliere($filiere_id)
    {
        $query = "
        SELECT semestre.id AS semestre_id, semestre.nom AS nom_semestre
        FROM semestre
        LEFT JOIN modules ON semestre.id = modules.id_semestre
        WHERE modules.id_filiere = :filiere_id";

        return (new self)->query($query, ['filiere_id' => $filiere_id]);
    }
    public static function getSemestres()
    {
        $query = "SELECT id AS semestre_id, nom FROM semestre";
        return (new self)->query($query);
    }
}

?>
