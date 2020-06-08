<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container_Up {
            padding: 20px 50px 50px 50px;
        }
       .container_Up fieldset {
           width: 50%;
       }
       .container_Up select {
           width: 25%;
       }
    </style>
</head>
<body>
    <header>
        <div class="container_Up">
            <fieldset>
                <h1>Simple Calculator</h1>
                <fieldset>
                    <legend>Calculator</legend>
                    <form action="Calculator.php" method="post">
                        <label for="#">First operand</label> <input type="text" name="first" placeholder="nhập số đầu tiên"> <br> <br>
                        <select name="operand">
                            <option value="sum" >Sum</option>
                            <option value="sub" >Sub</option>
                            <option value="mul" >multip</option>
                            <option value="sha" >share</option>
                        </select> <br> <br>
                        <label for="#">Second operand</label> <input type="text" name="second" placeholder="nhập số thứ hai"> <br> <br>
                        <input type="submit" value="Calculator">
                    </form>
                </fieldset>
            </fieldset>


        </div>
    </header>
</body>
</html