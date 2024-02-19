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
        include ("navbar.php");
    ?>
    <h1>Equipment</h1>

<!-- Add to cart -->
<form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
    <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages/_2008000/ff_2008580_xl.jpg&w=500"/><br/>
    <input type = "hidden" name = "add" value = "1" /> 
    <input type = "hidden" name = "cmd" value = "_cart" /> 
    <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
    <input type = "hidden" name = "item_name" value = "EMF Reader" />
    <input type = "hidden" name = "amount" value = "25.00" /> 
    <input type = "hidden" name = "no_shipping" value = "2" /> 
    <input type = "hidden" name = "currency_code" value = "USD" /> 
    <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
    <input type = "image" name = "submit" src = "http://mm214.com/buttons/addtocart.gif" />
</form> 


    <!-- <form action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" target = "paypal">
        <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages/_2008000/ff_2008580_xl.jpg&w=500"/><br/><br/><br/>
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "upload" value = "1" /> 
        <input type = "hidden" name = "item_name_1" value = "EMF Reader" /><input type = "hidden" name = "amount_1" value = "25.00" /> 
        <input type = "hidden" name = "quantity_1" value = "1" /> 
        <input type = "hidden" name = "on0_1" value = "size" />
            <select name = "os0_1">
            <option value = "">Select a Size</option>
            <option value = "small">Small</option>
            <option value = "medium">Medium</option>
            <option value = "large">Large</option>
            </select><br/><br/>
        <input type = "hidden" name = "on1_1" value = "material" />
            <select name = "os1_1">
            <option value = "">Select a Material</option>
            <option value = "spandex">Spandex</option>
            <option value = "wool">wool</option>
            <option value = "cotton">cotton</option>
            </select> -->
        <!-- <br/><br/>

        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <br/><br/><br/><br/>
        <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages/_1939000/ff_1939175_full.jpg&w=500"/><br/><br/><br/>

        <input type = "hidden" name = "item_name_2" value = "Red Sox Jersey" /><input type = "hidden" name = "amount_2" value = "299.99" /> 
        <input type = "hidden" name = "quantity_2" value = "1" /> 
        <input type = "hidden" name = "on0_2" value = "size" />
        <select name = "os0_2">
        <option value = "">Select a Size</option>
        <option value = "small">Small</option>
        <option value = "medium">Medium</option>
        <option value = "large">Large</option>
        </select><br/>
        <input type = "hidden" name = "on1_2" value = "material" />
        <select name = "os1_2">
        <option value = "">Select a Material</option>
        <option value = "spandex">Spandex</option>
        <option value = "wool">wool</option>
        <option value = "cotton">cotton</option>
        </select><br/>

        <input type = "hidden" name = "no_shipping_2" value = "2" /> 
        <input type = "hidden" name = "currency_code" value = "USD" /> 
        <input type = "hidden" name = "bn" value = "PP-ShopCartBF" /> 
        <input type = "image" name = "submit" src = "http://mm214.com/buttons/buynow.gif" />
    </form> -->
    <br/><br/><br/><br/>


    <!-- View Cart -->
    <form action = "https://www.sandbox.paypal.com/us/cgi-bin/webscr" method = "post" target = "paypal">
        <input type = "hidden" name = "cmd" value = "_cart" /> 
        <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
        <input type = "hidden" name = "display" value = "1" /> 
        <input type = "image" name = "submit" src = "http://mm214.com/buttons/viewcart.gif" />
    </form>
    <br/><br/><br/><br/>

</body>
</html>