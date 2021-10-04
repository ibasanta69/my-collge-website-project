<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="tab.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="pushcss.css" />
    <style>
        li {
            margin-left: 1%;
            display: inline-table;
        }

        .formfill {
            margin-top: 20%;
            margin-left: 35%;
            width: 100%;
        }

        .lll {

            border-radius: 9px;
            width: 30%;
            padding: 4%;
            margin-left: 10%;
            border: none;
            border: 1px solid lightgreen;
            text-align: center;
            margin: 1%;

        }

        .xxx {
            width: 29.5%;
            padding: 4%;
            margin: 1%;
            margin-left: 5%;
            border: none;
            border-radius: 9px;
            transition-duration: 0.5s;
            border: 1px solid lightgreen;
            outline: none;
            text-align: center;
        }

        input,
        select {
            background-color: rgb(250, 250, 250);
        }

        .mmm {
            width: 38%;
            padding: 4%;
            margin: 1% 4.5%;
            border-radius: 9px;
            transition-duration: 0.5s;
            outline: none;
            border: none;

            border: 1px solid lightgreen;
        }

        * {
            margin: 0%;
            padding: 0%;
        }

        .form {

            display: inline-flex;
            background-color: lightblue;
            border: 2px solid black;
            width: 80%;
            border-radius: 10px;
            padding: 10%;
            border: 1px solid lightgreen;
            margin-left: 3%;
            margin-top: 5%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .formfill {

            background-color: lightblue;
            width: 90%;
            border-radius: 10px;
            padding: 5%;
            border: 0.5px solid lightgreen;
            margin-left: 3%;
            margin-top: 5%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        input {
            padding: 4%;
            outline: none;
            text-align: center;
            margin: 1%;
            border: 1px solid lightgreen;
            font-size: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            border-radius: 5px;
        }

        .delete {
            margin-left: 5%;
            transition-duration: 0.5s;
        }

        .delete:hover {
            background-color: salmon;
        }

        table {
            display: inline-flex;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            border: 1px solid lightgreen;
            margin: 0% 8%;
            background-color: lightblue;
            border-radius: 10px;
            padding: 10px;
        }



        td {
            border: 0.5px solid black;
            border-spacing: 10%;
            padding: 7px;
            font-family: monospace;
            background-color: rgb(250, 250, 250);
            text-align: center;
            border-radius: 5px;
        }

        th {
            border: 0.5px solid black;
            border-spacing: 10%;
            border-radius: 3px;
            padding: 7px;
            width: 22%;
            text-align: center;
            font-family: monospace;
            background-color: lightgray;
        }

        pre {
            text-align: center;
            font-weight: bolder;
            font-family: monospace;
        }

        .up {
            padding: 4%;
            width: 45%;
            text-align: center;
        }

        .updatedata {
            position: absolute;
            background-color: lightblue;
            border: 2px solid black;
            width: 20%;
            border-radius: 10px;
            padding: 1.4%;
            border: 1px solid lightgreen;
            margin-left: 0.8%;
            margin-top: 1%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }

        body {
            background-color: lightskyblue;
        }

        .up1 {
            padding: 3.5%;
            transition-duration: 0.5px;
            width: 40%;
            outline: none;
            border: 1px solid lightgreen;
            border-radius: 10px;
            text-align: center;

        }

        #loop {
            background-color: #F9ECFF;
        }

        h1 {
            text-align: center;
            font-weight: bolder;
            color: black;
            font-size: 37px;
            margin-left: 18%;
            font-family: cursive;
        }

        .hh {
            margin-left: 20%;
            margin-right: 5%;
        }
    </style>
</head>

<body>
    <!---<script>
               alert(window.print());
                       </script>
 <h1> background: #ecf0f3;</h1>-->
    <div class="banner">
        <ul>
            <li>
                <form action="" method="POST" class="form">
                    <input type="text" placeholder="Enter symbol" name="value1" />
                    <input type="submit" Value="Delete" name="proccessing" class="delete" id="loop" />
                </form>
                <br>
                <form action="" method="POST" class="formfill">

                    &nbsp <input type="text" placeholder="First name" name="first" class="lll" />
                    &nbsp &nbsp <input type="text" placeholder="Last name" name="second" class="lll" />
                    <br>
                    <input type="text" placeholder="Symbol" name="symbol" class="xxx" />
                    &nbsp<input type="number" placeholder="age" name="age" class="xxx" style="margin-left:5.8%;" /><br>
                    <input type="number" placeholder="ID" name="id" class="xxx" />
                    &nbsp<input type="number" placeholder="Contact" name="contact" class="xxx" style="margin-left:5.8%;" /><br>
                    <input type="text" placeholder="Address" name="live" class="xxx" />
                    &nbsp<input type="text" placeholder="School" name="college" class="xxx" style="margin-left:5.8%;" /><br>
                    <select name="select" class="mmm">
                        <option value="">---sex---</option>
                        <option value="m">male</option>
                        <option value="f">female</option>
                    </select>
                    <input type="submit" value="Submit" name="process" class="mmm" id="loop" /><br>
                    <hr>
                    <pre>SEE SUBJECT MARKS</pre>
                    <hr>
                    &nbsp <input type="number" placeholder="Nepali" name="nepali" class="lll" />
                    &nbsp &nbsp <input type="number" placeholder="English" name="english" class="lll" />
                    <br>
                    <input type="number" placeholder="Math" name="math" class="xxx" />
                    &nbsp<input type="number" placeholder="Science" name="science" class="xxx" style="margin-left:5.8%;" /><br>
                    <input type="number" placeholder="Opt Math" name="opt" class="xxx" />
                    &nbsp<input type="number" placeholder="Social Std" name="social" class="xxx" style="margin-left:5.8%;" /><br>
                    <input type="number" placeholder="health Pop" name="health" class="xxx" />
                    &nbsp<input type="number" placeholder="computer" name="computer" class="xxx" style="margin-left:5.8%;" />
                </form>
                <form action="" method="POST" class="updatedata">
                    <input type="text" Placeholder="change value" name="firstvalue" class="up" />
                    <select name="choose" class="up1">
                        <option value="">---select---</option>
                        <option value="firstname">Firstname</option>
                        <option value="lastname">Lastname</option>
                        <option value="age">Age</option>
                        <option value="gender">Gender</option>
                        <option value="slevel">School</option>
                        <option value="contact">contact</option>
                        <option value="addresss2">Lives In</option>
                    </select>
                    <input type="text" Placeholder="Enter ID" name="Secondvalue" class="up" />
                    <input type="submit" value="Update" name="processing" class="up1" id="loop" />
                </form>
            </li>
            <li>
                <h1>SEE RESULT RECORDS</h1>
                <HR class="hh"><br>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "push";
                $conn = mysqli_connect($servername, $username, $password, $databasename);
                if (!$conn) {
                    die("UnSuccessfully connected." . mysqli_connect_errno());
                } else {
                    $sql = "SELECT * FROM student";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Symbol</th>";
                            echo "<th>Firstname</th>";
                            echo "<th>Lastname</th>";
                            echo "<th>Age</th>";
                            echo "<th>Gender</th>";
                            echo "<th>Percent%</th>";
                            echo "<th>Grade</th>";
                            echo "<th>School </th>";
                            echo "<th>Contact</th>";
                            echo "<th>Live In</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['symbol'] . "</td>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['age'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>" . $row['percent'] . "</td>";
                                echo "<td>" . $row['grade'] . "</td>";
                                echo "<td>" . $row['school'] . "</td>";
                                echo "<td>" . $row['contact'] . "</td>";
                                echo "<td>" . $row['live'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
                }
                mysqli_close($conn);
                ?>
            </li>


        </ul>

</body>

</html>
<?php
if (isset($_POST['processing'])) {
    $myid = $_POST['Secondvalue'];
    $mytext = $_POST['firstvalue'];
    $mychoose = $_POST['choose'];
    $hostsname = "localhost";
    $myuser = "root";
    $mypassword = "";
    $mydatabasename = "push";
    $conn = mysqli_connect($hostsname, $myuser, $mypassword, $mydatabasename);
    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    } else {
        $sql = "update student set $mychoose='$mytext' where symbol=$id";
        if (mysqli_query($conn, $sql)) {
            print("<script> window.location.href='https://localhost/web/per.php';</script>");
        } else {
            print "failed update" . mysqli_connect_error($conn);
        }
    }
    mysqli_close($conn);
}

?><?php
    $grade = "";
    if (isset($_POST['process'])) {
        $symbol = ($_POST['symbol']);
        $fname = ($_POST['first']);
        $lname = ($_POST['second']);
        $gender = ($_POST['select']);
        $age = ($_POST['age']);
        $school = ($_POST['college']);
        $live = ($_POST['live']);
        $id = ($_POST['id']);
        $Contact = ($_POST['contact']);
        //---------------------------------------i'am veru=y tired !
        //-------------------studentE Marks
        $math = ($_POST['math']);
        $science = ($_POST['science']);
        $social = ($_POST['social']);
        $health = ($_POST['health']);
        $opt = ($_POST['opt']);
        $neapli = ($_POST['nepali']);
        $english = ($_POST['english']);
        $computer = ($_POST['computer']);
        $tolalmarks = $english + $computer + $science + $health + $math + $opt + $neapli + $social;
        $percent = ((float)($tolalmarks / 8));
        if ($percent >= 90 && $percent <= 100) {
            $grade = 'A+';
        } else if ($percent >= 80 && $percent <= 90) {
            $grade = 'A';
        } else if ($percent >= 70 && $percent <= 80) {
            $grade = 'B+';
        } else if ($percent >= 60 && $percent <= 70) {
            $grade = 'B';
        } else if ($percent >= 50 && $percent <= 60) {
            $grade = 'C+';
        } else if ($percent >= 40 && $percent <= 50) {
            $grade = 'C';
        } else if ($percent >= 30 && $percent <= 40) {
            $grade = 'D+';
        } else if ($percent >= 20 && $percent <= 30) {
            $grade = 'D';
        } else if ($percent >= 10 && $percent <= 20) {
            $grade = 'E+';
        } else if ($percent >= 0 && $percent <= 10) {
            $grade = 'E';
        } else {
            $grade = "Try Again !";
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "push";
        $link = mysqli_connect($servername, $username, $password, $database);
        if (!$link) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        } else {

            $sql = "INSERT INTO student (id,symbol,firstname, lastname,age,gender,percent,grade,school,contact,live) VALUES
    ('$id','$symbol','$fname','$lname','$age','$gender','$percent','$grade','$school','$Contact','$live');";

            if (mysqli_query($link, $sql)) {
                print("<script> window.location.href='https://localhost/web/per.php';</script>");
            } else {
                print "";
            }
        }
        mysqli_close($link);
    }
    ?>
<?php
if (isset($_POST['proccessing'])) {
    $id = $_POST['value1'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "push";
    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if (!$conn) {
        die("Connection Failed." . mysqli_connect_error());
    } else {
        $sql = "delete from student where id=$id"; //The Program Is COded By Basanta Chaudhary
        if (mysqli_query($conn, $sql)) {
            print("<script> window.location.href='https://localhost/web/per.php';</script>");
        } else {
            echo "Unsuccessfully Delete." . mysqli_connect_error($conn);
        }
    }
    mysqli_close($conn);
}
?>