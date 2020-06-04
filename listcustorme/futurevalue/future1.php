<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top {
            display:flex;
            width: 50%;
            background-color: wheat;
        }
    </style>
</head>
<body>
    
<div class="top">
    <form action="#" method="post">
    <input type="text" name="dautu" placeholder="số tiền đầu tư ban đầu"> <br> <br>
    <input type="text" name="laisuat" placeholder="lãi suất năm %"> <br> <br>
    <input type="text" name="nam" placeholder="số năm đầu tư"> <br> <br>
    <input type="submit" value="Calculate" <?php if(isset($future)) $future  ?>>
    </form>
</div>

    
</body>
</html>