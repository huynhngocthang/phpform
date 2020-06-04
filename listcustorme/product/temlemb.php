<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top_top {
            background-color: wheat;
            display: flex;
            width: 50%;
        }
        .top_top form  {
            padding-left: 25%;
        }
        
    </style>
</head>
<body>
    <div class="top_top">
    <form action="product.php" method="post">
        <input type="text" name="sanpham" placeholder="mô tả sản phẩm"> <br> <br>
        <input type="text" name="money" placeholder="nhập giá của sản phẩm"> <br> <br>
        <input type="text" name="discount" placeholder="chiếu khấu theo %"> <br> <br>
        <input type="submit" value="Calculate Discount" style="background-color: brown;">
    </form>
    </div>
</body>
</html>