<?php
   
namespace Staff;

interface IStaff 
{
    public function checkAttendance(); // return date check in.
    public function getStaffJob(); // return Job or position of the staff. Manager or Engineer.
    public function getDepartment(); // return department
   
}