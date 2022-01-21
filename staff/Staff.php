<?php

namespace Staff;

class Staff extends User implements IStaff
{
    protected string $staffID;
    protected string $department;

    public function __construct(string $name, string $email, string $phone, string $staffID, string $department)
    {
        parent::__construct($name, $email, $phone);
        $this->staffID = $staffID;
        $this->department = $department;
    }

    public function checkAttendance() //implement interface method
    {
        print("\n".date("d-m-Y h:i")); // testing date time function
        print("\n Checked.");
    }

    public function getStaffJob() //implement interface method
    {
        print(strpos($this->staffID, 'M') ? "\nPosition: Manager": "\nPosition: Engineer"); // testing string function
    }

    public function getDepartment()
    {
        print("\nDepartment: ".$this->department);
    }

    public function verifyLogin() //implement User method
    {
        print("\n".date("d-m-Y h:i"));
        print("\n$this->name ". "Login Success."); //testing template string (PHP don't have template string)
    }
}