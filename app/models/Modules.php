<?php

/**
 * Modules class
 */

class Modules
{
    use Model;

    protected $table = 'modules';
    protected $db; // Define the $db property

    public function __construct()
    {
        $this->db = $this->connect(); // Initialize $db by calling the connect method from the Model trait
    }
    public function querySingle($query, $params = [])
    {
        // Prepare and execute the query
        $statement = $this->db->prepare($query);
        $statement->execute($params);

        // Fetch a single row
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllFilieresWithModules($departement_id)
    {
        $query = "
        SELECT filieres.id AS filiere_id, filieres.nom_filiere, 
               modules.id AS module_id, modules.nom_module, 
               professeur.nom AS nom_prof , semestre.nom AS nom_semestre
        FROM filieres
        LEFT JOIN modules ON filieres.id = modules.id_filiere
        LEFT JOIN professeur ON modules.id_professeur = professeur.id
        LEFT JOIN semestre ON modules.id_semestre = semestre.id
        WHERE filieres.id_departement = :departement_id
        ORDER BY filieres.id, modules.id";

        return $this->query($query, ['departement_id' => $departement_id]);
    }

    public function deleteModule($id)
    {
        try {
            // Delete the module
            $query_delete_module = "DELETE FROM $this->table WHERE id = :id";
            $this->query($query_delete_module, ['id' => $id]);

            return true; // Deletion successful
        } catch (PDOException $e) {
            // Return the error message
            return $e->getMessage();
        }
    }

    public function ajouterModule($nom_module, $id_professeur, $id_filiere, $id_semestre)
    {
        // Check if the module already exists
        $existingModule = $this->getModule($nom_module, $id_filiere, $id_semestre);
        if ($existingModule) {
            throw new Exception("Le module existe déjà."); // Return an error message or handle it as needed
        }
        // Insert the module
        $query = "INSERT INTO modules (nom_module, id_professeur, id_filiere, id_semestre) VALUES (:nom_module, :id_professeur, :id_filiere, :id_semestre)";
        $params = [
            'nom_module' => $nom_module,
            'id_professeur' => $id_professeur,
            'id_filiere' => $id_filiere,
            'id_semestre' => $id_semestre,
        ];
        return $this->query($query, $params);
    }
    public function ajouterModuleCoordonateur($nom_module, $id_filiere , $id_semestre)
    {
        // Check if the module already exists
        $existingModule = $this->getModule($nom_module, $id_semestre ,$id_filiere );
        if ($existingModule) {
            throw new Exception("Le module existe déjà."); // Return an error message or handle it as needed
        }
        // Insert the module
        $query = "INSERT INTO modules (nom_module, id_professeur, id_filiere, id_semestre) VALUES (:nom_module, NULL, :id_filiere, :id_semestre)";
        $params = [
            'nom_module' => $nom_module,
            'id_filiere' => $id_filiere,
            'id_semestre' => $id_semestre,
        ];
        return $this->query($query, $params);
    }
    private function getModule($nom_module, $id_filiere, $id_semestre)
    {
        $query = "SELECT * FROM modules WHERE nom_module = :nom_module AND id_filiere = :id_filiere AND id_semestre = :id_semestre";
        $params = [
            'nom_module' => $nom_module,
            'id_filiere' => $id_filiere,
            'id_semestre' => $id_semestre,
        ];
        return $this->querySingle($query, $params);
    }
    public function getAllModlesWithFilieres($filiere_id, $id_semestre)
    {
        $query = "
    SELECT modules.id AS id_module, modules.nom_module AS nom_module , 
           professeur.nom AS nom_professeur, semestre.nom AS nom_semestre , filieres.nom_filiere AS nom_filiere
    FROM modules
    LEFT JOIN filieres ON filieres.id = modules.id_filiere
    LEFT JOIN professeur ON modules.id_professeur = professeur.id
    LEFT JOIN semestre ON modules.id_semestre = semestre.id
    WHERE filieres.id = :filiere_id AND modules.id_semestre = :id_semestre
    ORDER BY semestre.id 
    ";

        return $this->query($query, ['filiere_id' => $filiere_id, 'id_semestre' => $id_semestre]);
    }
    

    public function getAllModlesWithFiliere($filiere_id)
    {
        $query = "
    SELECT modules.id AS id_module, modules.nom_module AS nom_module , 
           professeur.nom AS nom_professeur, semestre.nom AS nom_semestre , filieres.nom_filiere AS nom_filiere, semestre.id
    FROM modules
    LEFT JOIN filieres ON filieres.id = modules.id_filiere
    LEFT JOIN professeur ON modules.id_professeur = professeur.id
    LEFT JOIN semestre ON modules.id_semestre = semestre.id
    WHERE filieres.id = :filiere_id
    ORDER BY semestre.id 
    ";

        return $this->query($query, ['filiere_id' => $filiere_id]);
    }


    public function affecterModuleProfesseur($module_id, $professeur_id)
    {
        // Get the module by its ID
        $module = $this->getModuleById($module_id);

        // Check if the module is already assigned to a professor
        if ($module['id_professeur'] !== null) {
            throw new Exception("Le module est déjà affecté à un professeur.");
        }

        // Assign the module to the professor
        $query = "UPDATE modules SET id_professeur = :professeur_id WHERE id = :module_id";
        $params = [":professeur_id" => $professeur_id, ":module_id" => $module_id];
        $this->query($query, $params);

        return true;
    }
    


    public function getModuleById($module_id)
    {
        $query = "SELECT id_professeur FROM modules WHERE id = :module_id";
        $params = [
            'module_id' => $module_id,
        ];
        $module = $this->querySingle($query, $params);

        // Check if id_professeur is null or not
        if ($module && $module->id_professeur !== null) {
            // If id_professeur is not null, return the module
            return $module;
        } else {
            // If id_professeur is null, return null
            return null;
        }
    }

    public function insertDragedModule($filiere_id)
    {
        $query = "
        SELECT modules.id AS id_module, modules.nom_module AS nom_module , 
               professeur.nom AS nom_professeur, semestre.nom AS nom_semestre , filieres.nom_filiere AS nom_filiere
        FROM modules
        LEFT JOIN filieres ON filieres.id = modules.id_filiere
        LEFT JOIN professeur ON modules.id_professeur = professeur.id
        LEFT JOIN semestre ON modules.id_semestre = semestre.id
        WHERE filieres.id = :filiere_id
        ORDER BY semestre.id 
        ";

        return $this->query($query, ['filiere_id' => $filiere_id]);
    }

    public static function getAllModlesWithProfsId($prof_id)
    {
        $query = "
    SELECT modules.id AS id_module, modules.nom_module AS nom_module, modules.id_filiere AS id_filiere
    FROM modules
    JOIN professeur ON modules.id_professeur = professeur.id
    WHERE professeur.id = :id_prof
    ORDER BY modules.id 
    ";

    return (new self)->query($query, ['id_prof' => $prof_id]);
    }


}
?>
