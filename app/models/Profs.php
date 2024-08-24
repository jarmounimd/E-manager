<?php

/**
 * Modules class
 */

class Profs
{
    use Model;

    protected $table = 'professeur';
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
    public function getAllProfs($departement_id)
    {
        $query = "
        SELECT professeur.id AS professeur_id, professeur.nom AS nom_prof, professeur.prenom AS prenom_prof, departement.nom AS nom_departement
        FROM professeur
        LEFT JOIN departement ON professeur.id_departement = departement.id
        WHERE professeur.id_departement = :departement_id
        ";

        return $this->query($query, ['departement_id' => $departement_id]);
    }
    public function getProfsWithFiliere($id_filiere)
    {
        $query = "
        SELECT professeur.id AS professeur_id, 
       professeur.nom AS nom_prof, 
       professeur.prenom AS prenom_prof, 
       professeur.email AS email_prof,
        filieres.nom_filiere AS nom_filiere
FROM professeur
LEFT JOIN filieres ON professeur.id_filiere = filieres.id
WHERE professeur.id_filiere = :filiere_id;
";

        return $this->query($query, ['filiere_id' => $id_filiere]);
    }
    public function deleteProf($id)
    {
        try {
            // Delete the module
            $query_delete_prof = "DELETE FROM $this->table WHERE id = :id";
            $this->query($query_delete_prof, ['id' => $id]);

            return true; // Deletion successful
        } catch (PDOException $e) {
            // Return the error message
            return $e->getMessage();
        }
    }
    public function ajouterProf($nom, $prenom, $email, $password , $id_filiere)
    {
        // Check if the professor already exists
        $existingProf = $this->getProfByEmail($email);
        if ($existingProf) {
            throw new Exception("Le professeur existe déjà.");
        }

        // Insert the professor
        $query = "INSERT INTO professeur (nom, prenom, email, password, id_departement , id_filiere) 
                          VALUES (:nom, :prenom, :email, :password, :id_departement , :id_filiere)";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $params = [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $hashedPassword,
            'id_departement' => $_SESSION['user']->id_departement, // Set id_departement to the current user's department ID
            'id_filiere' => $id_filiere
        ];
        return $this->query($query, $params);

    }
    private function getProfByEmail($email)
    {
        $query = "SELECT * FROM professeur WHERE email = :email";
        $params = ['email' => $email];
        return $this->querySingle($query, $params);
    }



}
?>
