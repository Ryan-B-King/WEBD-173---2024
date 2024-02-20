<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel</title>
    <?php include ("styles.php"); ?>
</head>
<body>
    <?php 
        include ("connectDB.php");
        include ("logo.php");
        include ("cart.php");
        include ("navbar.php");
    ?>
    <h1>Apparel</h1>

    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/utilityvest.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Utility Vest" />
        <input type = "hidden" name = "amount" value = "50.00" />
        <input type = "hidden" name = "on0" value = "size" />
            <select name = "os0">
            <option value = "">Select a Size</option>
            <option value = "small">Small</option>
            <option value = "medium">Medium</option>
            <option value = "large">Large</option>
            </select> <br><br>
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br> 
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/cargopants.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Cargo Pants" />
        <input type = "hidden" name = "amount" value = "60.00" />
        <input type = "hidden" name = "on0" value = "size" />
            <select name = "os0">
            <option value = "">Select a Size</option>
            <option value = "small">Small</option>
            <option value = "medium">Medium</option>
            <option value = "large">Large</option>
            </select> <br><br>
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/utilitybelt.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Utility Belt" />
        <input type = "hidden" name = "amount" value = "45.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/shirt.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "T-Shirt" />
        <input type = "hidden" name = "amount" value = "20.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/backpack.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Backpack" />
        <input type = "hidden" name = "amount" value = "70.00" /> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
    <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="/images/ghostcap.png"/><br/>
        <input type = "hidden" name = "add" value = "1" /> 
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "item_name" value = "Ghost Cap" />
        <input type = "hidden" name = "amount" value = "20.00" />
        <input type = "hidden" name = "on0" value = "size" />
            <select name = "os0">
            <option value = "">Select a Size</option>
            <option value = "small">Small</option>
            <option value = "medium">Medium</option>
            <option value = "large">Large</option>
            </select> <br><br> 
        <input type = "hidden" name = "no_shipping" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "/images/addtocart.png" />
    </form> 
    <br><br>
</body>
</html>