<?php

class User{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User("John Doe", "example@example.com");
echo $user->name; // John Doe
echo $user->email;