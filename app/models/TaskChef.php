<?php

class TaskChef
{
    use Model;

    protected $table = 'tasks_chef';

    public function insertTask($taskTitle, $taskMessage, $coordinatorId, $dueDate)
    {
        $query = "INSERT INTO $this->table (task_title, task_message, assign_to, due_date) 
                  VALUES (:task_title, :task_message, :assign_to, :due_date)";
        
        $params = array(
            ':task_title' => $taskTitle,
            ':task_message' => $taskMessage,
            ':assign_to' =>  $coordinatorId,
            ':due_date' => $dueDate
        );
        return $this->query($query, $params);
    }

    public function getTasksByCoor($id)
    {
        $query = "SELECT t.task_title, t.task_message, t.due_date, c.nom AS coor_name, t.id 
                  FROM tasks_chef t
                  JOIN coordonateur_filiere c ON t.assign_to = c.id
                  JOIN filieres f ON c.id_filiere=f.id
                  WHERE f.id_departement = :id_dep";
        
        return $this->query($query, ['id_dep' => $id]);
    }

    public function getTasksForCoor($coordinatorId)
    {
        $query = "SELECT task_title, task_message, due_date
                  FROM $this->table
                  WHERE assign_to = :coordinator_id";
        
        return $this->query($query, ['coordinator_id' => $coordinatorId]);
    }
}
