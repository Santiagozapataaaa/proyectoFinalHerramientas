<?php 

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'dbo.fenrir');

    try {
        $db = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }

?>