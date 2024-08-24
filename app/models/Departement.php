<?php

class Departement
{
    use Model;

    protected static $table = 'departement';

    public static function getAllDepartments()
    {
        $query = "SELECT * FROM departement";
        return (new self)->query($query);    }

}
