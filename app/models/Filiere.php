<?php

class Filiere
{
    use Model;

    protected $table = 'filieres';

    public static function getFilieresByDepartment($department_id)
    {
        $query = "
            SELECT id AS filiere_id, nom_filiere 
            FROM filieres 
            WHERE id_departement = :department_id";

        return (new self)->query($query, ['department_id' => $department_id]);
    }

    public static function getFilieresProfs($filiere_id)
    {
        $query = "
            SELECT filieres.id AS filiere_id, filieres.nom_filiere 
            FROM filieres 
            JOIN professeur ON filieres.id = professeur.id_filiere
            WHERE professeur.id =:filiere_id";

        return (new self)->query($query, ['filiere_id' => $filiere_id]);
    }

}

?>
