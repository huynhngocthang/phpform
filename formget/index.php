<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username=$_POST['username'];
        $word=$_POST['word'];
    }
    if($username ==='admin' && $word ==='admin') {
        echo "<h1>welcome <span style='color:red'>".$username."to website";
    } else {
        echo "<h1>Login Error";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
    <fieldset style="width:300px; height:250px; background-color:beige">
        <form action="" method="post" class="hello">
            <h1>login</h1>
            <input type="text" name="username" placeholder="username"> 
            <input type="password" name="word" placeholder="password">
            <input type="submit" value="Sign in">
        </form>
    </fieldset>
    
    
</body>
</html>