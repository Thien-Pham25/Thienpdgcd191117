<?php
$connect = pg_connect
("host=ec2-52-7-168-69.compute-1.amazonaws.com
dbname=ddo3aus679kv6d
port=5432
user=iupvxhmesegzjq
password=0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb
sslmode=require");

if ($connect === false) 
{
  die("ERROR: Could not connect to the database server!");
} else {
$product_name = $_POST['product-name'];
$product_price = $_POST['product-price'];
$atn_store = $_POST['atn-store'];
$product_amount = $_POST['product-amount'];
//echo ("Connect successfully!");
}
$query = "INSERT INTO product (product_name, product_price, atn_store, product_amount) 
VALUES('$product_name', '$product_price', '$atn_store', '$product_amount');";
$result = pg_query($connect, $query);
if ($result) {
    echo "<script>alert('Record added succesfully!, Refresh');</script>";
    header('refresh: 3; url=productform.php');
} 
else 
{
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);
