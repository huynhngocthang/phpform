<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            width: 20%;
            height: 100px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Hiển Thị Loại Hình</legend>
        <form action="imagemenu.php" method="post">
           <select name="select" >
               <option value="rectangle">hình chữ nhật</option>
               <option value="triangle">hình tam giác vuông</option>
               <option value="triangle1">hình tam giác cân</option>
           </select> <br> <br>
           <input type="submit" value="print">
        </form>
    </fieldset>    


</body>
</html>