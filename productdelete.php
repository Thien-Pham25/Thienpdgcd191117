<?php
$connect = pg_connect
("host=ec2-52-7-168-69.compute-1.amazonaws.com
dbname=ddo3aus679kv6d
port=5432
user=iupvxhmesegzjq
password=0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb");

    $connect = new mysqli($host, $dbname, $user, $password);
    if ($connect->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $pg_connect = "DELETE FROM product WHERE product_id=1";

    if ($conn->query($pg_connect) === TRUE) 
    {
        echo "Record deleted successfully";
    } 
    else 
    {
        echo "Error deleting record: " . $conn->error;
    }
     
    $connect->close();
    ?>



