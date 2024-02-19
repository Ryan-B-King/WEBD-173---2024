<?php 
    include ("styles.php");
    $nav = array (
        "onSale.php"=>"On Sale",
        "equipment.php"=>"Equipment",
        "apparel.php"=>"Apparel",
        "accessories.php"=>"Accessories",
        "community.php"=>"Community"
    );
?>

<div class="navbar">
    <?php 
        foreach($nav as $key=>$val){
            echo("<a href='$key'>$val</a>");
        };
    ?>
</div>