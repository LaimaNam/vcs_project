<?php
// sukureme 4 konstantas kurioms priskirtos reiksmes
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "projectforma");

    // tada panaudojame kaip parametrus tas reiksmes 

    $mysqli = new mysqli (DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_error) {
        echo "Sorry, error'as..";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

   

    mysqli_query($mysqli, "INSERT INTO client (vardas, email, message) 
    VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");

   