<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <form method="post">
        <input type="text" name="number" placeholder="Number from 1 to 10"></input><br>
        <input type="submit" name="submit" value="Submit"></input><br>
        </form>
    </body>
</html>
<?php


$getal = 0 ;
$getal = $_POST["number"];
countDown($getal);

function countDown($getal){
    try {
        if(!$getal) throw new Exception ("Er is geen getal meegegeven.");
        if($getal > 0) throw new Exception ("er is een te groot getal gegeven.");
        if($getal < 10) throw new Exception ("er is een te klein getal gegeven.");
    } catch (Exception $ex) {
        error_log($ex, 3, "error_log.php");
    } 
}
