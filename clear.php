<html>
    <head>
        <title> Grocery Store</title>
        <link rel="stylesheet" href="CSS/customedCart.css" type="text/css">
        <script src="JS/jquery.min.js"></script>
        <script src="JS/notification.js"></script>
        <base target="bottom">
    </head>
    <body onload="return clear()">
        <div id="title">
            <?php
                // session destroy will remove all the products stored in session. Thus empty the cart
                session_start();
                session_destroy();
            ?>
        </div>
        <div id="clear-message">
            <?php
                echo "<h3>Cart Emptied.<h3>";
                echo '<a href="shoppingcart.php">Return to cart</a>';
            ?>
        </div>
    </body>
</html>
