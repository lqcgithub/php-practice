<?php
   
namespace Staff;

class Manager extends Staff {
    protected int $salary;

    public function __construct(string $name, string $email, string $phone, string $staffID, string $department, int $salary = 3000)
    {
        parent::__construct($name, $email, $phone, $staffID, $department);
        $this->salary = $salary;
    }

    public function getSalary(){ // return salary 
        return $this->salary ;
    }

    public function assignTask(array $task, Engineer $e){ // try later
        $e->addTask($task);
    }
}