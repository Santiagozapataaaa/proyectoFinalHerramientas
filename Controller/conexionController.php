<?php 

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'dbo.fenrir');

    try {
        $conn = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }

?>