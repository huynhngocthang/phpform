
<?php

$numfirst = $_POST["first"];
// var_dump($numfirst);
$second = $_POST["second"];
function Calculate($firsr, $secod)
{
    $operand = $_POST["operand"];
    // var_dump($operand);

    switch ($operand) {
        case  "sum":
            return   $firsr + $secod;
            break;
        case "sub":
            return     $firsr - $secod;
            break;
        case "mul":
            return   $firsr * $secod;
            break;
        case "sha":
            return   $firsr / $secod;
            break;
        default:
            break;
    }
}
echo 'kết quả :';
$result1 = Calculate($numfirst, $second);
echo $result1;


?>

<?php require "index.php" ?> 
