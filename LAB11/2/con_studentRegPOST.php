<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $password = ($_POST['password']);

        echo "<h2>Data Retrieved using POST Method:</h2>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Password: $password <br>";
    }
    
?>