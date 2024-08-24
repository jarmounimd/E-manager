<?php 



class coordonateur
{
    use Model;

    protected $table = 'coordonateur_filiere';
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
    public function getProfileCoor($id){
    $query = "SELECT c.nom as nom_coord, c.prenom as prenom_coord, c.email as email_coord, c.phone_nbr, c.Address, c.Country, c.profile_pic, f.nom_filiere, d.nom as nom_dep  FROM coordonateur_filiere c
    JOIN filieres f on c.id_filiere=f.id
    JOIN departement d on d.id=f.id_departement
    WHERE c.id=:id_coor";
    return $this->query($query, ['id_coor' => $id]);
    }
    public function updateProfileCoor($id, $data)
{
    $query = "UPDATE $this->table SET 
                nom = :nom, 
                prenom = :prenom, 
                email = :email, 
                phone_nbr = :phone_nbr, 
                Address = :Address, 
                Country = :Country 
              WHERE id = :id_coor";

    $params = [
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'email' => $data['email'],
        'phone_nbr' => $data['phone_nbr'],
        'Address' => $data['Address'],
        'Country' => $data['Country'],
        'id_coor' => $id
    ];

    return $this->query($query, $params);
}
public function updateProfilePicture($id, $profilePicture)
{
    $query = "UPDATE $this->table SET profile_pic = :profile_picture WHERE id = :id_coor";

    $params = [
        'profile_picture' => $profilePicture,
        'id_coor' => $id
    ];

    return $this->query($query, $params);
}
public function getCoorsWithDep($id)
{
    $query = "
    SELECT c.id AS coor_id, 
   c.nom AS nom_coor, 
   c.prenom AS prenom_coor, 
  c.email AS email_coor
FROM coordonateur_filiere c
 JOIN filieres f ON c.id_filiere =f.id
WHERE f.id_departement = :id_dep;
";

    return $this->query($query, ['id_dep' => $id]);
}
}
?>
