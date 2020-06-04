
 <?php
     require_once  "temlemb.php";
    if(!empty($_POST['sanpham'])&&!empty($_POST['discount'])&&!empty($_POST['money'])){
        $sanpham = $_POST["sanpham"];
        $money = $_POST["money"];
        $discount = $_POST["discount"];
        // if($money=='') echo 'rong'; else{
        $DiscountAmount = $money * $discount * 0.1 ;
        $DiscountPrice = $money - $DiscountAmount ;
        echo ($sanpham. "<br>" . "số tiền ban đầu là :" . $money . "<br>" . "chiếu khấu :" . $discount) . "<br>" . "số tiền đã chiết khấu :" . $DiscountAmount . "<br>" . "số tiền đã chiết khấu:" . $DiscountPrice;
    }
    
    

 
 
 
 ?>