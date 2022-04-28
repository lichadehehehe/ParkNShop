<html>
    <head>
        <title> Grocery Store</title>
        <link rel="stylesheet" href="CSS/customedcheckout.css" type="text/css">
        
        <script src="JS/informationvalidate.js" type ="text/javascript"></script>
        <script src="JS/jquery.min.js"></script>
        <base target="bottom">
    </head>

    <body>
        <div id="title">
        	<div style="height:80; "></div>
			
		</div>
        <div>
        <?php

session_start();


echo "
		
		<h2>Checkout</h2>
		
		"; 
	
if(isset($_SESSION['products']))
{	
	print "<table id = 'list'> <tr> 
			<th> Product ID</th> 
			<th> Product Name </th> 
			<th>Unit Quantity</th>
			<th> Unit Price ($)</th> 
			<th> Units in cart </th> 
			<th> Value in Cart ($) </th> ";

	$cartPrice = 0;
	
	for ($i=0;$i<sizeof($_SESSION['products']);$i++)
	{
		echo "<tr> <td align = 'center'>".$_SESSION['id'][$i]. "</td>
		<td align = 'center'>". $_SESSION['products'][$i]."</td>
		<td align = 'center'>".$_SESSION['quant'][$i]."</td>
		<td align = 'center'>". $_SESSION['price'][$i] ."</td>
		<td align = 'center'>". $_SESSION['quantity'][$i]."</td>";
		$tmp = $_SESSION['price'][$i]*$_SESSION['quantity'][$i];
		echo "<td align = 'center'> ".number_format($tmp,2) ."</td></tr>";
		$cartPrice += $tmp;
	}
        echo "
        </table>

		<br>

		<table id='total'>

		<tr> <td> "
		     
		     . " Total: AU$</td> <td align = 'center'> "
		     .number_format($cartPrice,2)
		     ."</td></tr>



		</table>";


		

		//customer input their contact detail below
        //realistically shipment will only delivered nationwide

		echo'<form id = "check_out" name = "check_out" method = "POST" action = "email.php" onsubmit = "return validate_checkout()" >
			<table> <tr> <th colspan = "2" > </th></tr> <tr> <td> Name:<span style = "color:red;">*</span> </td>
			<td> <input type = "text" id = "customerName" name = "customerName"> </td> </tr>
			<tr> <td> Address:<span style = "color:red;">*</span> </td> 
			<td> <input type = "text" id = "customerAddress" name = "customerAddress"> </td> </tr>
			<tr> <td> Suburb:<span style = "color:red;">*</span></td>
			<td> <input type = "text" id = "customerSuburb" name = "customerSuburb"> </td> </tr>
			<tr> <td> State:<span style = "color:red;">*</span> </td>
			<td><input type = "text" id = "customerState" name = "customerState"> </td> </tr>

            <tr> <td> Postcode:<span style = "color:red;">*</span> </td>
			<td><input type = "text" id = "customerPostcode" name = "customerPostcode"> </td> </tr>
            

			<tr> <td> Country: </span>  </td>
			<td> Australia </td> </tr>


			<tr> <td> Email<span style= "color:red;">*</span> </td>
			<td> <input type = "customerEmail" id = "customerEmail" name = "customerEmail"> </td> </tr>
			<tr> <td colspan ="2" align = "center"> <input type = "submit" value = "Confirm" ></td> </tr>
			</table>
		</form></div>';
}?>










<?php

if(!isset($_SESSION['products']))
{
	echo "<h3>Your shopping cart is empty.</h3>";
	echo '<a href="shoppingcart.php">Return to cart</a>';
}
?> 
</div>
</body>
</html>