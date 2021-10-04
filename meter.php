<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        body {
            background-color: lightgray;
        }

        form {
            margin-top: 20%;
            margin-left: 20%;
        }

        input {
            padding: 1.7%;
            outline: none;
            text-align: center;
            border: 1.5px solid lightgray;
            transition: 1.2s;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
            font-weight: bolder;
            width:15%;
        }

        select {
            width: 10%;
            border: 1.5px solid lightgray;
            outline: none;
            padding: 1.7%;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
        }

        .result {
            width: 3.1%;
            border-bottom-right-radius: 32%;
            transition: 1.2s;
            border: 1.5px solid lightgray;
            outline: none;

        }

        h2 {
            margin-left: 0%;
            margin-bottom: 5%;
            font-size: 50px;
            text-shadow: 0px 2px 6px rgba(0,0,0,0.88);
            color: white;
           
        }.color{
            background-color: rgb(245, 245, 245);
            transition-duration: 1.5s;
        }.color:hover{
            background-color: mediumpurple;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <h2>Unit Conveter @ibasanta chaudhary</h2>
        <select name="Choose1" style="border-top-left-radius: 32%;">
            <option value="cm">cm</option>
            <option value="m">m</option>
            <option value="km">km</option>
        </select>
        <input type="number" name="First" placeholder="Enter value">
        <select name="Choose2">
            <option value="cm">cm</option>
            <option value="m">m</option>
            <option value="km">km</option>
        </select>
        <input type="submit" name="login" value="Calculate"class="color">
        
        <?php
        $result = "";
        $cha = "";
        if (isset($_POST['login'])) {
            $First_Compare = $_POST['Choose1'];
            $Second_Compare = $_POST['Choose2'];
            $get_ValueFrom_User = $_POST['First'];
            if ($First_Compare == 'cm' && $Second_Compare == 'cm') {
                $result = $get_ValueFrom_User;
                $cha = "cm";
            } else if ($First_Compare == 'cm' && $Second_Compare == 'm') {
                $result =  ($get_ValueFrom_User / 100);
                $cha = "m";
            } else if ($First_Compare == 'cm' && $Second_Compare == 'km') {
                $result =  (($get_ValueFrom_User) / 1000);
                $cha = "km";
                //----------------------------------------------------------------------
            } else if ($First_Compare == 'm' && $Second_Compare == 'cm') {
                $result =  ($get_ValueFrom_User * 100);
                $cha = "cm";
            } else if ($First_Compare == 'm' && $Second_Compare == 'm') {
                $result = $get_ValueFrom_User;
                $cha = "mm";
            } else if ($First_Compare == 'm' && $Second_Compare == 'km') {
                $result =  (($get_ValueFrom_User) / 1000);
                $cha = "km";

                //---------------------------------------------------------------------------

            } else if ($First_Compare == 'km' && $Second_Compare == 'cm') {
                $result =  ($get_ValueFrom_User * 100);
                $cha = "cm";
            } else if ($First_Compare == 'km' && $Second_Compare == 'm') {
                $result =  (($get_ValueFrom_User) * 1000);
                $cha = "mm";
            } else if ($First_Compare == 'km' && $Second_Compare == 'km') {
                $result = $get_ValueFrom_User;
                $cha = "km";
            }
        }
        ?>
        <input type="text" placeholder="0.00" style="width:4%;" value="<?php echo $result;  ?>">
        <input type="text" placeholder="----" class="result" value="<?php echo $cha;  ?>">
    </form>
</body>

</html>