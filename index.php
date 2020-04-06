<?php
    $host = "localhost";
    $dbname = "ziekmeldingen";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=".$host.";dbname=".$dbname.";",$username,$password)
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ziekmeldingensysteem</title>
        <link rel="stylesheet" style="text/css" href="style.css">
    </head>
</html>
<body>
    <div id="container">
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Zoeken</a></li>
            </ul>
        </nav>
    </div>
</body>