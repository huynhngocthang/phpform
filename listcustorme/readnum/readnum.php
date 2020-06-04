<?php
   $request= $_POST["name1"];
   if($request>=0 && $request<10) {
       switch($request) {
           case 1:
            echo ("one");
           break;
           case 2:
            echo ("two");
           break;
           case 3:
            echo ("three");
           break;
           case 4:
            echo ("for");
           break;
           case 5:
            echo ("fine");
           break;
           case 6:
            echo ("six");
           break;
           case 7:
            echo ("seven");
           break;
           case 8:
            echo ("eight");
           break;
           case 9:
            echo ("night");
           break;
           case 10:
            echo ("out of ability");
           break;
           default:
            break;
       } 
   } elseif($request>=10 && $request<20) {
      switch($request) {
        case 10:
            echo ("night");
           break;
           case 11:
            echo ("elevent");
           break;
           case 12:
            echo ("tweteen");
           break;
           case 13:
            echo ("threeten");
           break;
           case 14:
            echo ("forteen");
           break;
           case 15:
            echo ("fineteen");
           break;
           case 16:
            echo ("sixteen");
           break;
           case 17:
            echo ("seven teen");
           break;
           case 18:
            echo ("eightteen");
           break;
           case 19:
            echo ("nighteen");
           break;
           default:
            break;
      }
   } else {
       echo "out of ability" ;
   }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            background-color:turquoise;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name1" placeholder="nhập số cần đọc">
        <input type="submit" value="nhấn đây">
    </form>
    <p></p>
</body>
</html>