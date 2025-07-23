<?php

class User {

public $name;
public function showUser(){

    echo "the user name is ".$this->name;


}

}
class Authority extends USer{

public $role;
    public function Auth(){


        echo "the user role is ".$this->role;
    }
}

$user = new Authority();

$user->name="Taimoor";
$user->role="user";


echo "The user name is " . $user->name . "<br>";
$user->Auth($user->role);

?>