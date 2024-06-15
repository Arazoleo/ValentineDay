<?php 
    require 'sun.php';

    $users = [
    new User("Clara", "060923"),
    new User ("clara", "060923"),
    new User ("CLARA", "060923"),
];

$aut = new Aut($users);

$name = $_POST['name'];
$pass = $_POST['data'];

$user = $aut->login($name, $pass);

if($user){
    header("Location: home.php");
}
else{
    header("Location: clara.php?error=1");
}

?>