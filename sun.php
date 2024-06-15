<?php

class User{
    private $name = null;
    private $password = null;

    public function __construct($name, $password){
        $this->name = $name;
        $this->password = $password;
    }

    public function GetName(){
        return $this->name;
    }

    public function GetPassword(){
        return $this->password;
    }
}


class Aut{
    private $user = null;

    public function __construct($user){
        $this->user = $user;
    }

    public function login($name, $password){
        foreach($this->user as $users){
            if($users?->GetName() == $name && $users?->GetPassword() == $password){
                return $users;
        }
    }
    return null;
  }
}



$users = [new User("Clara", "060923"),
          new User ("clara", "060923"),
          new User ("CLARA", "060923"),
];

$aut = new Aut($users);







?>