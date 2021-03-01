<?php
$connect = pg_connect
("host=ec2-52-7-168-69.compute-1.amazonaws.com
dbname=ddo3aus679kv6d
port=5432
user=iupvxhmesegzjq
password=0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb
sslmode=prefer");

    if ($connect === false) 
    {
        die("ERROR: Could not connect to the database server!");
    } 
    else 
    {
  //echo ("Connect successfully!");
        $product_id = $_GET['id'];
    }
//echo ("Connect successfully!");
        $query = "DELETE FROM product WHERE PRODUCTID='$product_id'";
        $data = pg_query($connect, $query);
    if ($data) 
    {
        echo "<script>alert('Edited succesfully!, Refresh');</script>";
        header('refresh: 3; url=productform.php');
    } 
    else 
    {
        echo ("ERROR + $query") . pg_errormessage($query);
    }
    pg_close($connect);