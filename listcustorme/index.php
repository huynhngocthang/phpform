<?php
$customerlist = array(
   "1" => array(
       "ten" => "Mai Văn Hoàn",
       "ngaysinh" => "1983-08-20",
       "diachi" => "Hà Nội",
       "anh" => "Images/p1.jpg"
   ),
    "2" => array(
        "ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Bắc Giang",
        "anh" => "Images/chó Khỉ.jpg"
),
    "3" => array(
        "ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Nam Định",
        "anh" => "Images/giac.png"
),
    "4" => array(
        "ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Hà Tây",
        "anh" => "Images/trau.png"
),
     "5" => array(
        "ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983-08-19",
        "diachi" => "Đà Nẵng",
        "anh" => "Images/p1.jpg"        
) 
);
    foreach($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '50px' height ='50px'/></td>";
        echo "</tr>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th,td {
            padding: 7px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        img {
            border-radius: 5px;
        }
    </style>
</head>
<body>
<table>
    <h1>Danh sách khách hàng</h1>
    <tr>
        <th>tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>  
        <th>Ảnh</th>
    </tr>
    <tr>
        <td>Mai Văn Hoàn</td>
        <td>1983-08-20</td>
        <td>Hà Nội</td>
        <td><img src="Images/p1.jpg" style="width:55px;height:55px" alt="p1"></td>
    </tr>
    <tr>
    <td>Nguyễn Văn Nam</td>
        <td>1983-08-21</td>
        <td>Bắc Giang</td>
        <td><img src="Images/chó Khỉ.jpg" style="width:55px;height:55px" alt="p1"></td>
    </tr>
    <tr>
    <td>Nguyễn Thái Hòa</td>
        <td>1983-08-22</td>
        <td>Nam Định</td>
        <td><img src="Images/giac.png" style="width:55px;height:55px" alt="p1"></td>
    </tr>
    <tr>
    <td>Trần Đăng Khoa</td>
        <td>1983-08-17</td>
        <td>Hà Tây</td>
        <td><img src="Images/trau.png" style="width:55px;height:55px" alt="p1"></td>
    </tr>
    <tr>
    <td>Nguyễn Đình Thi</td>
        <td>1983-08-19</td>
        <td>Đà Nẵng</td>
        <td><img src="Images/p1.jpg" style="width:55px;height:55px" alt="p1"></td>
    </tr>
</table>    

</body>
</html>