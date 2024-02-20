<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories</title>
    <?php include ("styles.php"); ?>
</head>
<body>
    <?php 
    include ("connectDB.php");
    include ("logo.php");
    include ("cart.php");
    include ("navbar.php");
    ?>
    <h1>Accessories</h1>

    <!-- Add to cart -->
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/keychain.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Key Chain" />
        <input type = "hidden" name = "amount" value = "20.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/patch.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Embroidered Patch" />
        <input type = "hidden" name = "amount" value = "25.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/bumpersticker.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Bumper Stickers" />
        <input type = "hidden" name = "amount" value = "10.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/plushie.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Ghostie Plushie" />
        <input type = "hidden" name = "amount" value = "40.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/earrings.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Ghost Earrings" />
        <input type = "hidden" name = "amount" value = "25.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/necklace.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Necklace" />
        <input type = "hidden" name = "amount" value = "35.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>

</body>
</html>