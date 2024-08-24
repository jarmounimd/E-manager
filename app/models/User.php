<?php 


/**
 * User class
 */

class etudiant
{
    use Model;

    protected $table = 'etudiant';
    protected $allowedColumns = ['email', 'password'];

    public function __construct()
    {
        $this->db = $this->connect(); // Initialize $db by calling the connect method from the Model trait
    }
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['email'])) {
            $this->errors['email'] = "Email is required";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        if (empty($data['password'])) {
            $this->errors['password'] = "Password is required";
        }

        return empty($this->errors);
    }
    public function querySingle($query, $params = [])
    {
        // Prepare and execute the query
        $statement = $this->db->prepare($query);
        $statement->execute($params);

        // Fetch a single row
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function getAllStudents($id)
    {
        $query = "
            SELECT etudiant.id, etudiant.nom, etudiant.prenom, 
                   etudiant.email, filieres.nom_filiere, semestre.nom AS nom_semestre , filieres.id AS id_filiere
            FROM etudiant
            LEFT JOIN filieres ON etudiant.id_filieres = filieres.id
            LEFT JOIN semestre ON etudiant.id_semestre = semestre.id
            LEFT JOIN departement ON filieres.id_departement = departement.id 
            where filieres.id_departement = $id 
        ";

        return $this->query($query);
    }
    public function getStudentsWithFiliere($id)
    {
        $query = "
            SELECT etudiant.id AS id_etudiant, etudiant.nom AS nom_etudiant, etudiant.prenom AS prenom_etudiant, etudiant.email AS email_etudiant, filieres.id AS id_filiere
            FROM etudiant 
            LEFT JOIN filieres ON etudiant.id_filieres = filieres.id
            where filieres.id = $id ;
            
            ";
        return $this->query($query);
    }
    public function delete_etudiant($id)
    {
        try {
            // Delete the module
            $query_delete_etudiant = "DELETE FROM $this->table WHERE id = :id";
            $this->query($query_delete_etudiant, ['id' => $id]);

            return true; // Deletion successful
        } catch (PDOException $e) {
            // Return the error message
            return $e->getMessage();
        }
    }
    public function ajouteretudiant($nom, $prenom, $email, $password, $id_filiere, $id_semestre)
    {
        // Check if the student already exists
        $existingEtudiant = $this->getEtudiantByEmail($email);
        if ($existingEtudiant) {
            throw new Exception("L'étudiant existe déjà.");
        }

        // Insert the student
        $query = "INSERT INTO etudiant (nom, prenom, email, password, id_filieres, id_semestre) 
                      VALUES (:nom, :prenom, :email, :password, :id_filieres, :id_semestre)";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $params = [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $hashedPassword,
            'id_filieres' => $id_filiere,
            'id_semestre' => $id_semestre
        ];
        return $this->query($query, $params);
    }

    private function getEtudiantByEmail($email)
    {
        $query = "SELECT * FROM etudiant WHERE email = :email";
        $params = ['email' => $email];
        return $this->querySingle($query, $params);
    }
    public function getAllDataWithFiliere($id)
    {
        $query = "
        SELECT notes.id AS id_notes, 
               notes.note AS notes, 
               modules.nom_module AS nom_module, 
               etudiant.id AS id_etudiant, 
               etudiant.nom AS nom_etudiant,
               etudiant.prenom AS prenom_etudiant,
               semestre.id AS id_semestre,
               semestre.nom AS nom_semestre
        FROM notes 
        INNER JOIN modules ON notes.id_module = modules.id
        INNER JOIN etudiant ON etudiant.id = notes.id_etudiant
        INNER JOIN filieres ON modules.id_filiere = filieres.id
        INNER JOIN semestre ON semestre.id = modules.id_semestre
        WHERE filieres.id = $id 
        ORDER BY notes.id DESC
    ";

        return $this->query($query);
    }




}


?>
