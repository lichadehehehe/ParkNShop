<html>
<head>
    
    <link rel="stylesheet" href="CSS/customedCart.css" type="text/css">

    <script src="JS/notification.js"></script>

    <script src="JS/jquery.min.js"></script>

</head>

<body>
    <div  id="title">
        
        <form action="clear.php" method="post">
            <input type="submit" id="clear" value="Clear"/>
        </form>
        
        <form action="checkout.php" method="post">
            <input type="submit" id="checkout" value="Checkout" onclick="return display_cart()"/>
        </form>
        
    </div>
    
    <div>
<?php

session_start();
	print "<table id = 'list'> <tr> <th> Product ID</th> <th> Product Name </th> <th>Unit Quantity</th> <th> Unit Price ($)</th> <th> Units </th> <th> Value ($) </th> ";


if(isset($_SESSION['products']))
{
	$cartPrice = 0;
	for ($i=0;$i<sizeof($_SESSION['products']);$i++)    
    //display products of cart
	{
		print "<tr> <td align = 'center'>"
        . $_SESSION['id'][$i]
        . "</td>";
		print "<td align = 'center'>"
        . $_SESSION['products'][$i]
        ."</td> ";
		print "<td align = 'center'>"
        . $_SESSION['quant'][$i]
        ."</td>";
		print "<td align = 'center'>"
        . $_SESSION['price'][$i] 
        ."</td>";
		print "<td align = 'center'>"
        . $_SESSION['quantity'][$i]
        ."</td>";
		$tmp = $_SESSION['price'][$i]*$_SESSION['quantity'][$i];
		print "<td align = 'center'> "
        .number_format($tmp,2) 
        ."</td></tr>";
        // add the product price to the cart total
		$cartPrice += $tmp;     

	}


    //print total price in the shopping cart

        print "</table>";
        print "<br>";
        print "<table id='total'>";
        echo "<tr> <td>Total: AU$ "
              .number_format($cartPrice,2)
              ."</td></tr></table></div>";
}
else
    //print welcome sign if the cart is empty
{
	echo "<h1> Welcome to ParknShop! </h1>";
}

?>

</body>
</html>