<html>
  <head>
  <link rel="stylesheet" href="CSS/customedcheckout.css" type="text/css">
  <base target="bottom">
</head>
<body>



<?php
session_start();

error_reporting(0);


$name = $_REQUEST['customerName'];
$address = $_REQUEST['customerAddress'];
$suburb = $_REQUEST['customerSuburb'];
$state= $_REQUEST['customerState'];
$country = $_REQUEST['customerPostcode'];
$email = $_REQUEST['customerEmail'];




?>

<div id='end'>
<?php
  echo "<br><br>$name, <br> Thank you for shopping at ParknShop!<br>";
  echo "The order will be delivered shortly.<br><br>";
  echo '<a href="index.html" target="_top">Return Home</a>';
  session_destroy();
?>
</div>
</body>