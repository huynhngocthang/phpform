<?php 
    $USD = $_POST["USD"];
    $rate = 23.000;
    
    if ( !empty($USD)) {
        $exchangerate = $USD * $rate ;
    echo $exchangerate . "VND"  ;
    }
?>


<?php require "index.php"  ?>