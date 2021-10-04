<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
    <style>
        body {
            background-image: url("bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
            margin-top: 20%;
            margin-left: 30%;
        }

        input,
        select {
         
            padding: 1%;
          
            text-align: center;
            outline-color: violet;
        }.inp{
            width: 12%;
        }

        h2 {
            margin-left: 30%;
            color: blue;
        }

        marquee {
            margin-right:50%;
        }

        h1 {
            font-family: 'Courier New', Courier, monospace;
            color: black;
        }.temp{
            width: 40px;
            text-align: center;
        }.temp1{
            width: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <form action="" method="POST">
        <marquee direction="right">
            <h1>Temperature Converter</h1>
        </marquee>
        <input type="text" name="value" Placeholder="Enter a Value "class="inp">
        <select name="Temperature">
            <option value="empty">Select</option>
            <option value="fha">Fharenheit</option>
            <option value="centi">Centigrade</option>
            <option value="kelvin">kelvin</option>
        </select>
        <input type="submit" value="Calculate" name="login">
        <?php
        $result="";
        $symbol="";
    if (isset($_POST['login'])) {
        $result = 0;
        $value1 =(float) ($_POST['value']);
        $select = $_POST['Temperature'];
        if ($select == "fha") {
            $result = (9.0 / 5) * $value1 + 32;
            $symbol="°f";
        } else if ($select == "centi") {
            $result = ($value1 - 32) * (5 / 9);
            $symbol="°c";
        } else if ($select == "kelvin") {
            $result = $value1 + 273.15;
            $symbol="°k";
        } else if ($select == "empty") {
           /// echo "<h2> Invalid Entered value Plz Try Again !";
        }
    }

    ?>
    <input type="text"placeholder="Result"value="<?php echo$result; ?>"class="temp">
    <input type="text"placeholder="Result"value="<?php echo$symbol; ?>"class="temp1">
    </form>
</body>

</html>