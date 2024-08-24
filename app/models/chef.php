<?php 



class chef
{
    use Model;

    protected $table = 'chef_departement';
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
    public function getProfileChef($id){
        $query = "SELECT c.nom as nom_chef, c.prenom as prenom_chef, c.email as email_chef, c.phone_nbr, c.Address, c.Country, c.profile_pic, d.nom as nom_dep  FROM chef_departement c
        JOIN departement d on d.id=c.id_departement
        WHERE c.id=:id_chef";
        return $this->query($query, ['id_chef' => $id]);
        }
        public function updateProfileChef($id, $data)
    {
        $query = "UPDATE $this->table SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    email = :email, 
                    phone_nbr = :phone_nbr, 
                    Address = :Address, 
                    Country = :Country 
                  WHERE id = :id_chef";
    
        $params = [
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'phone_nbr' => $data['phone_nbr'],
            'Address' => $data['Address'],
            'Country' => $data['Country'],
            'id_chef' => $id
        ];
    
        return $this->query($query, $params);
    }
    public function updateProfilePicture($id, $profilePicture)
    {
        $query = "UPDATE $this->table SET profile_pic = :profile_picture WHERE id = :id_chef";
    
        $params = [
            'profile_picture' => $profilePicture,
            'id_chef' => $id
        ];
    
        return $this->query($query, $params);
    }
}
?>
