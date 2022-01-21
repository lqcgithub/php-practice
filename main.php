<?php
   require __DIR__ . '/vendor/autoload.php';

   // namespace 
   use Staff\Administrators;
   use Staff\Manager;
   use Staff\Engineer;

   // create instances
   $manager = new Manager("Nguyen Pham Luan Tien","npltien@nomail.com", "03330110", "M015","RK-04");

   $engineer = new Engineer("Le Quoc Cuong","lqcmailbox@nomail.com", "035811312", "E015","RK-04");

   $admin = new Administrators("Vu Thuy Hoang Yen","lqcmailbox@nomail.com", "035811312", "A015");

   //abstract function check
   
   $admin->verifyLogin();

   $engineer->verifyLogin();

   // Staff methods
   $engineer->getStaffJob();
   $engineer->getDepartment();
      
   // Admin methods
   $admin->updateCatalog();

   // Salary diffence

   print("\nSalary diffence: ".$manager->getSalary() - $engineer->getSalary()."\n");

   // Manager

   // $engineer->getTasks();
   // $manager->assignTask(["task-name" => "Design", "status"=> "Assigned"], $engineer);
   // $engineer->getTasks();
   // Try later.
