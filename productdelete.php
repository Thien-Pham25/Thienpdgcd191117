<?php
    $host = "ec2-52-7-168-69.compute-1.amazonaws.com";
    $dbname = "ddo3aus679kv6d";
    $user = "iupvxhmesegzjq";
    $password = "0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb";
    $connection_string = "host=". $host . " port=5432 dbname=" . $dbname . " user=" . $user. " password=".$password;
    $dbServer = pg_connect($connection_string);

    $product_id = $_GET['id'];

    $query = "DELETE FROM product WHERE product_id = $product_id";
    
    $result = pg_query($dbServer, $query);
    
    if ($data) 
    {
        echo "<script>alert('Edited succesfully!, Refresh');</script>";
        header('refresh: 3; url=productform.php');
    } 
    else 
    {
        echo ("ERROR + $query") . pg_errormessage($query);
    }

    pg_close($dbServer)
    ?>



