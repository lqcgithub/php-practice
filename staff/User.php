<?php

namespace Staff;

abstract class User
{
    protected string $name;
    protected string $email;
    protected string $phone;

    public function __construct(string $name, string $email, string $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getInfo()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }

    public abstract function verifyLogin(); //testing abstract function
}
