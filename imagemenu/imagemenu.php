

<?php
$select = $_POST["select"];
switch ($select) {
    case "rectangle":
      recTangle();
        break;
    case "triangle":
        triAngle() ;
        break;
    case "triangle1";
        triAngle1() ;
        break;
    default:
        break;
}
    function recTangle() {
        for ($i = 0; $i < 3; $i++) {
            $arr[$i] = [];
            for ($j = 0; $j < 7; $j++) {
                $arr[$i][$j] = '*';
            }
            // $arr[$i][$j] .= "<br>";
        }
        
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 7; $j++) {
                echo $arr[$i][$j];
            }
            echo '<br>';
            // $arr[$i][$j] .= "<br>";
        }
    }
    function triAngle() {
        for ($i = 0; $i < 5; $i++) {
            $arr[$i] = [];
            for ($j = 0; $j < $i; $j++) {
                $arr[$i][$j] = '*';
            }
            // $arr[$i][$j] .= "<br>";
        }
        
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo $arr[$i][$j];
            }
            echo '<br>';
            // $arr[$i][$j] .= "<br>";
        }
    }
    function triAngle1() {
        for ($i = 7; $i >= 1; $i--) {
            $arr[$i] = [];
            for ($j = 1; $j <= $i; $j++) {
                $arr[$i][$j] = '*';
            }
            // $arr[$i][$j] .= "<br>";
        }
        
        for ($i = 7; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $arr[$i][$j];
            }
            echo '<br>';
            // $arr[$i][$j] .= "<br>";
        }
    }
?>

<?php require "index.php" ?>




