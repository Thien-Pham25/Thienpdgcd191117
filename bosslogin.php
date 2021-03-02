<?php
$account = pg_connect
("host=ec2-52-7-168-69.compute-1.amazonaws.com
dbname=ddo3aus679kv6d
port=5432
user=iupvxhmesegzjq
password=0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb
sslmode=prefer");

if ($account === false) 
{
  die("ERROR: Could not connect to the database server!");
} 
else 
    {
        echo ("Connect successfully! ");

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM Boss WHERE username = '$username' AND \"password\" = '$password'";
        $result = pg_query($account, $query);
        $count = pg_num_rows($result);
        if ($count == 1) 
        {
            session_start();
            $_SESSION["username"] = $username;
            header('url=bossviewdata.php');
        } 
        else 
        {
            echo ("Wrong username or password. Please try again!") . pg_errormessage($query);
            header('refresh: 2; url=/bosslogin.php'); //wrong reset
        }
    }
pg_close($account);


