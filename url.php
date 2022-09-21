<?php
    define('DB_SERVER', 'YOUR_SERVER');// Replace YOUR_SERVER with the path to your server (usually localhost).
    define('DB_USERNAME', 'YOUR_USERNAME');// Replace YOUR_USERNAME with a username that has the access level you want to your database.
    define('DB_PASSWORD', 'YOUR_PASSWORD');// Replace YOUR_PASSWORD with the password for that username.
    define('DB_NAME', 'YOUR_DATABASENAME');// Replace YOUR_DATABASENAME with the name of the database to use.
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $DBconn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $DBconn->set_charset('utf8mb4');
    $code = $_GET['id'];
    $sql = "SELECT * FROM `urls` WHERE Code = $code";
    $result = $DBconn->query($sql);
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $url = $row['URL'];
    }else{
        $url = $_SERVER['HTTP_REFERER'];
    }
    header("Location: $url");
?>
