<?php
$con = pg_connect
("host=ec2-52-7-168-69.compute-1.amazonaws.com
dbname=ddo3aus679kv6d
port=5432
user=iupvxhmesegzjq
password=0d633c625519042f54ca84dc367630ba07f2028784c6a03108b94aa49376a7bb
sslmode=prefer");

$query = "select product_id, product_name, product_price, product_amount from product ;";
$result = pg_query($con, $query);
$resultCheck = pg_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATN Shop - VIEW ATN SHOP DATA</title>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body id="bd-view-page">
  <div class="form-title">
    <h1 style="font-weight: 700;">VIEW SHOP DATA </h1>
  </div>
  <link rel ="stylesheet" type="text/css" href="style.css">
  <div class="container">
    <div class="col" style="padding-top:0px;">
      <table id="view-data" class="table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($resultCheck > 0) {
            while ($row = pg_fetch_assoc($result)) {
          ?>
              <tr>
                <td>
                  <?php echo $row['product_id']; ?>
                </td>
                <td>
                  <?php echo $row['product_name']; ?>
                </td>
                <td>
                  <?php echo $row['product_price']; ?>
                </td>                
                <td>
                  <?php echo $row['product_amount']; ?>
                </td>
                <td>
                  <div class="btn-group" data-toggle="buttons"><a href="/productdelete.php?id=$result[product_id]" class="btn btn-primary btn-sm">Delete</a></div>
                </td>
              </tr>
          <?php
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
      </table>
      <a href="./logout.php">
        <h3 id="sign-out"> LOG OUT </h3>
      </a>
    </div>
</body>

</html>