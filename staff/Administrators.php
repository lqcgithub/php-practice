<?php

namespace Staff;

class Administrators extends User
{
    protected string $accessKey;
    
    public function __construct(string $name, string $email, string $phone, string $accessKey)
    {
        parent::__construct($name, $email, $phone, $accessKey);
        $this->accessKey = $accessKey;
    }

    public function verifyLogin() //implement abstract method test
    {
        print("\n".date("d-m-Y h:i"));
        print("\nAdmin: ". $this->name . " Checked.");
    }

    public function updateCatalog(){ // admin's method
        print("\nUse key " . $this->accessKey . " to update Catalog"); 
        print("\nUpdated products in Catalog.");
    }
}