
<?php

/**
 * Notes class
 */

class Notes
{
    use Model;

    protected $table = 'notes';

    public function getAllNotes($id)
    {
        // Requête SQL pour récupérer toutes les notes avec les noms de module correspondants
        $query = "SELECT n.id, m.nom_module, n.note, p.nom AS nom_prof
FROM notes n
INNER JOIN modules m ON n.id_module = m.id
INNER JOIN etudiant e ON e.id = n.id_etudiant
INNER JOIN professeur p ON p.id = m.id_professeur
WHERE e.id = $id
AND n.id = (
    SELECT MAX(n2.id)
    FROM notes n2
    WHERE n2.id_module = n.id_module AND n2.id_etudiant = n.id_etudiant
)
ORDER BY n.id DESC;
";
        // Exécutez la requête SQL
        return $this->query($query);
    }


public function insertNote($id_module, $id_etudiant, $note)
{
    // Préparer la requête SQL
    $query = "INSERT INTO notes (id_etudiant, id_module, note) VALUES (:id_etudiant, :id_module, :note)";
    
    // Préparer les valeurs à lier
    $params = array(
        ':id_etudiant' => $id_etudiant,
        ':id_module' => $id_module,
        ':note' => $note
    );
    return $this->query($query, $params);
}
}
