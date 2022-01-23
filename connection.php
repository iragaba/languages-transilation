<?php
$server="localhost";
$user ="root";
$pass ="";
$db ="db creation";
$conn =mysqli_connect($server,$user,$pass,$db);
if($conn){
    //echo "connected"."</br>";
}
    else {
        echo "not connected".mysqli_error($conn);
        

}
