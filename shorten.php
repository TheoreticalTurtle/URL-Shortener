<?php
    $url = $_POST['url'];
      
    // Use get_headers() function
    $headers = @get_headers($url);
      
    // Use condition to check the existence of URL
    
    if(!$headers) {
        echo "URL Doesn't Exist!";
        exit();
    }else{
        $string = substr($headers[0], 8,4);
        preg_match_all('!\d+!', $string, $matches);
        if($matches[0][0] > 399){
            echo "URL Doesn't Exist: $headers[0]";
            exit();
        }
    }
    define('DB_SERVER', 'YOUR_SERVER');// Replace YOUR_SERVER with the path to your server (usually localhost).
    define('DB_USERNAME', 'YOUR_USERNAME');// Replace YOUR_USERNAME with a username that has the access level you want to your database.
    define('DB_PASSWORD', 'YOUR_PASSWORD');// Replace YOUR_PASSWORD with the password for that username.
    define('DB_NAME', 'YOUR_DATABASENAME');// Replace YOUR_DATABASENAME with the name of the database to use.
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $DBconn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $DBconn->set_charset('utf8mb4');
    $sql = "INSERT INTO `urls` (`Code`, `URL`, `DateAdded`) VALUES (NULL, '$url', CURRENT_TIMESTAMP);";
    $result = $DBconn->query($sql);
    $returnURL = "cameronmorrow.com/urlShortener/url.php?id=";
    echo $returnURL.$DBconn->insert_id;
?>