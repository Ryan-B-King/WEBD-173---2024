    <!-- View Cart -->
    <div id="cartlink">
        <form action = "https://www.sandbox.paypal.com/us/cgi-bin/webscr" method = "post" target = "paypal">
            <input type = "hidden" name = "cmd" value = "_cart" /> 
            <input type = "hidden" name = "business" value = "sb-694mi29127999@business.example.com" /> 
            <input type = "hidden" name = "display" value = "1" /> 
            <input type = "image" name = "submit" src = "/images/cart.png" />
        </form>
    </div>