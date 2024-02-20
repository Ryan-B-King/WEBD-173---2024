<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment</title>
    <?php include ("styles.php"); ?>
</head>
<body>
    <?php 
        include ("connectDB.php");
        include ("logo.php");
        include ("cart.php");
        include ("navbar.php");
    ?>
    <h1>Equipment</h1>

    <!-- Add to cart -->
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/emfreader.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "EMF Reader" />
        <input type = "hidden" name = "amount" value = "20.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/evprecorder.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "EVP Recorder" />
        <input type = "hidden" name = "amount" value = "25.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/nightvisioncamera.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Night Vision Camera" />
        <input type = "hidden" name = "amount" value = "200.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/ghostlightballs.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Ghost Light Balls" />
        <input type = "hidden" name = "amount" value = "20.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/spiritbox.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Spirit Box" />
        <input type = "hidden" name = "amount" value = "60.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/lazergridpen.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Lazer Grid Pen" />
        <input type = "hidden" name = "amount" value = "35.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
</body>
</html>