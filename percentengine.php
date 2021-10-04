<?php
            $grade = "";
            if (isset($_POST['process'])) {
                $symbol = ($_POST['symbol']);
                $fname = ($_POST['first']);
                $lname = ($_POST['second']);
                $gender = ($_POST['select']);
                $age = ($_POST['age']);
                $school = ($_POST['college']);
                $live = ($_POST['live']);
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
                $database = "pert";
                $link = mysqli_connect($servername, $username, $password, $database);
                if (!$link) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                } else {

                    $sql = "INSERT INTO student (symbol,firstname, lastname,age,gender,percent,grade,school,live) VALUES
                ('$symbol','$fname','$lname','$age','$gender','$percent','$grade','$school','$live');";

                    if (mysqli_query($link, $sql)) {
                        print("<script> window.location.href='https://localhost/web/per.php';</script>");
                    } else {
                        print "";
                    }
                }
                mysqli_close($link);
            }
