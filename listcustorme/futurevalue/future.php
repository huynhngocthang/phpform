<?php require 'future1.php'?>
 <?php
    $present = $_POST["dautu"];
    $percent = $_POST["laisuat"];
    $year = $_POST["nam"];
    $future=$percent + ($present*$percent);
 switch($year) {
     case 2:
        echo $future*2;
     break;
     case 3:
        echo $future*3;
     break;
     case 4:
        echo $future*4;
     break;
     case 5:
        echo $future*5;
     break;
     case 6:
        echo $future*6;
     break;
     case 7:
        echo $future*7;
     break;
     case 8:
        echo $future*8;
     break;
     default: 
    break;
 }
 
 
 ?>