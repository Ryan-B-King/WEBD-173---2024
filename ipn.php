<?php
    foreach ($_REQUEST as $key => $value){
        $content .= $key.'   '.$value."\n";
    }
    echo $content;
    mail("ghostie@ryanking.studio","Someone bought something!",$content,"Content-Type: text/html");
    mail("ryan13king@gmail.com","Someone bought something!",$content,"Content-Type: text/html");
    //at this point, you have to put any variables you think are awesome into a db.
?>

<!-- ?php
$file = "ipn2.txt";
foreach ($_REQUEST as $key => $value){
    $content .= $key.'   '.$value."\n";
 }
 echo $content;
 $fh = fopen($file,'w');
 fwrite($fh, $content);
 fclose($fh);
?> -->