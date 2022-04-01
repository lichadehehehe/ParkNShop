<html>
<head>
    
<link rel="stylesheet" href="CSS/somethingelse.css" type="text/css">

<script src="JS/jquery.min.js"></script>

<script src="JS/notification.js"></script>


<base target="bottom">

</head>




<body>
    <div style="height:75; "></div>
    
    <h1 style="color:yellow;">Product Information</h1>
      
<?php



//use local database
$connection = mysqli_connect('127.0.0.1', 'root', '', 'assignment1');
//use amazon services
//$connection = mysqli_connect('aa1qihia0auklk8.c7st6aysmqsr.us-east-1.rds.amazonaws.com', 'uts', 'internet', 'assignment1');


if(isset($_GET) && !empty($_GET)){
    
} else {
    header("Location: productinformation.php");
}
$var = $_GET['id'];




$product_array = "SELECT * FROM products WHERE product_id='$var'";

$result = mysqli_query($connection,$product_array);


if(mysqli_num_rows($result) == 1){
    echo "<div id='pDisplay'>";
    echo "<form name='prodForm' action='session.php' method ='get'>";
    $row = mysqli_fetch_assoc($result);                    
    echo "<table id='productInformation'>";
    echo "<tr><td><b>Product ID:</b></td><td>" 
          . $row['product_id'] 
          . "</td></tr><tr><td><b> Product Name:</b></td><td>"
          . $row['product_name'] 
          . "</td></tr><tr><td><b>Price:</b></td><td>"
          . $row['unit_price'] 
          . "</td></tr><tr><td><b>Unit Quanity:</b></td><td>"
          . $row['unit_quantity'] 
          . "</td></tr><tr><td><b>In Stock:</b></td><td>"
          .$row['in_stock']
          . "</td></tr> ";


    echo"<tr><td>Order # <input type='number' id='quantity' name='quantity' value='1' min='1' max='100'></td><td><input type='submit' value='Add' id= 'add' onclick='return displayCart()'></td></tr> ";
    echo"</table>";
    echo "<input type = 'hidden' id = 'prodId' name = 'prodId' value ='"
        .$row['product_id']
        ."'>";
    echo "<input type = 'hidden' id = 'unitQuant' name = 'unitQuant' value ='"
        .$row['unit_quantity']
        ."'>";
    echo "<input type = 'hidden' id = 'form_products' name = 'form_products' value ='"
         .$row['product_name']
         ."'>";
    echo "<input type ='hidden' id = 'form_prod_price' name = 'form_prod_price' value ='"
        .$row['unit_price']
        ."'>";
    echo "<br>";
    echo"</form></div>";
}


else if(!($result))
{
    echo "<h1> Welcome to ParknShop! </h1> ";
}
mysqli_close($connection);

?>
</body>
</html>