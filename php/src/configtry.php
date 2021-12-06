<?php
    define('DB_SERVER','140.83.34.95');
    define('DB_USER','root');
    define('DB_PASS','Morfeen13');
    define('DB_NAME','dbutssister');

    $connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    if (mysqli_connect_errorno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_errorno();
    }
?>