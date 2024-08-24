<?php 

class prof
{
    use Model;

    protected $table = 'professeur';
    protected $allowedColumns = ['email', 'password'];

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

    public function getProfileProf($id){
        $query = "SELECT p.nom as nom_prof, p.prenom as prenom_prof, p.email as email_prof, p.phone_nbr, p.Address, p.Country, p.profile_pic, f.nom_filiere, d.nom as nom_dep  
                  FROM professeur p
                  JOIN filieres f on p.id_filiere=f.id
                  JOIN departement d on d.id=f.id_departement
                  WHERE p.id=:id_prof";
        return $this->query($query, ['id_prof' => $id]);
    }

    public function updateProfileProf($id, $data)
    {
        $query = "UPDATE $this->table SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    email = :email, 
                    phone_nbr = :phone_nbr, 
                    Address = :Address, 
                    Country = :Country 
                  WHERE id = :id_prof";
    
        $params = [
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'phone_nbr' => $data['phone_nbr'],
            'Address' => $data['Address'],
            'Country' => $data['Country'],
            'id_prof' => $id
        ];
    
        return $this->query($query, $params);
    }

    // New function to update profile picture
    public function updateProfilePicture($id, $profilePicture)
    {
        $query = "UPDATE $this->table SET profile_pic = :profile_picture WHERE id = :id_prof";
    
        $params = [
            'profile_picture' => $profilePicture,
            'id_prof' => $id
        ];
    
        return $this->query($query, $params);
    }
}
?>
