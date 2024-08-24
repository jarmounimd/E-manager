<?php

class tache
{
    use Model;

    protected $table = 'tasks';

    public function insertTask($taskTitle, $taskMessage, $profId, $dueDate)
    {
        $query = "INSERT INTO $this->table (task_title, task_message, assign_to, due_date) VALUES (:task_title, :task_message, :assign_to, :due_date)";
        

        $params = array(
            ':task_title' => $taskTitle,
            ':task_message' => $taskMessage,
            ':assign_to' =>  $profId,
            ':due_date' => $dueDate
        );
        return $this->query($query, $params);
    }
    public function getTasks($id)
    {
        $query = "SELECT t.task_title, t.task_message, t.due_date, p.nom AS professor_name
                  FROM tasks t
                  JOIN professeur p ON t.assign_to = p.id
                  WHERE p.id_filiere=:filiere_id";
        
        return $this->query($query, ['filiere_id' => $id]);
    }
    public function getTasksProf($id)
    {
        $query = "SELECT t.task_title, t.task_message, t.due_date
                  FROM tasks t
                  JOIN professeur p ON t.assign_to = p.id
                  WHERE t.assign_to=:id_prof";
        
        return $this->query($query, ['id_prof' => $id]);
    }
}
