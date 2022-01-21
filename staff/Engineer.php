<?php
   
namespace Staff;

class Engineer extends Staff {
    protected array $assignedTask;
    protected int $salary;

    public function __construct(string $name, string $email, string $phone, string $staffID, string $department, array $assignedTask =[], int $salary = 2000) //testing default parameter.
    {
        parent::__construct($name, $email, $phone, $staffID, $department);
        $this->assignedTask = $assignedTask;
        $this->salary = $salary; 
    }

    public function getSalary(){ // return salary 
        return $this->salary;
    }

    public function getStatus(){ // return lated assigned task and progress of it
        print("\nTask ".$this->assignedTask[0].":" .$this->assignedTask[0]['status']);
    }

    public function getTasks(){ // return assigned task
        return $this->assignedTask;
    }

    public function addTask(array $task){
        array_push($this->assignedTask, $task);
    }
}