<?php
        // CONNECTION STRING
        include ("DBaddress.php");

        // Check connection using try/catch statement
        try  {
            $conn = new PDO($dsn, $username, $password);
            
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            
             echo "Connection is successful<br><br>\n\r";
        }

        catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "An error occurred: $error_message" ;
        } // end try catch
    ?>