<?php
$connect = pg_connect
("host=ec2-52-7-168-69.compute-1.amazonaws.com
dbname=ddo3aus679kv6d
port=5432
user=iupvxhmesegzjq
password=0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb
sslmode=prefer");

    if ($conn->connect_error) 
    {
        die("ERROR: Could not connect to the database server!" . $conn->connect_error);
    } 

//echo ("Connect successfully!");
    $sql = "DELETE FROM product WHERE id=1";
    if ($conn->query($sql) === TRUE) {
        echo "Delete Complete";
    } else {
        echo "Delete Fall" . $conn->error;
    }
     
    $conn->close();
    ?>


 

