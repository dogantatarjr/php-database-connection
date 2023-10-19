<?php

    $host = "localhost"; // Host Name (I prefer localhost [XAMPP] for unfinished projects)
    $dbusername = "root"; // Host's Username (It is default "root" in localhost. It can be changed host to host)
    $dbpassword = ""; // Host's Password (Again can be changed host by host but default blank in localhost)
    $dbname = "dyk"; // Your Database's Name

    $connection = new mysqli($host, $dbusername, $dbpassword, $dbname); // Make connection with these informations below

    if ($connection->connect_error) { 
        die("Connection failed!: " . $connection->connect_error); // If there is a problem about the connection, error message shown
    }

?>
