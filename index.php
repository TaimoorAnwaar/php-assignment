<?php

class User {
    public $name; 

    public function showName() {
        echo "The name is " . $this->name;
    }
}


// $user = new User();
// $user->name = "Taimoor";
// $user->showName();


class Admin extends User {
    public $role;

    public function showRole() {
        echo "<br> and role is " . $this->role;
    }
}


$admin= new Admin();
$admin->name='taimoor';
$admin->role="Admin";

$admin->showName();
$admin->showRole();


?>
