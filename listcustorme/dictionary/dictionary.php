    <?php
    $dictionary = array (
        "hello" => "xin chào",
        "love you" => "yêu bạn",
        "book" => "quyển sách",
        "the door" => "cái cửa",
        "home stay" => "khách sạn"
    );
   
    $text;
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $searchwod = $_POST["search"];
        $flag=0;
        foreach($dictionary as $key => $value) {
            if($searchwod===$key) {
            $text="<p>" ."từ :" . $key . "có nghĩa là :" . $value. "</p>";
            $flag = 1;
            }
            } if($flag === 0) {
            $text= "<p>" ."không tìm thấy từ này". "</p>";
            }
    }
       
    ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            width: 30%;
            height: 140px;
        }
        header {
            padding-left: 400px;
        }
        input {
            border: 2px solid wheat;
        }
    </style>
</head>
<body>
    <header>
        <div class="bot_top">
            <fieldset>
                <h1>Từ điển Anh-Việt</h1>
                <form action="" method="post">
                    <input type="text" name="search" placeholder="Nhập từ cần tìm">
                    <input type="submit" value="Tìm">
                    <p><?php if(isset($text)) echo $text;  ?></p>
                </form>     
            </fieldset>
           
        </div>
    </header>
</body>
</html>