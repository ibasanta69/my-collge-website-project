<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "pert";
                $conn = mysqli_connect($servername, $username, $password, $databasename);
                if (!$conn) {
                    die("UnSuccessfully connected." . mysqli_connect_errno());
                } else {
                    $sql = "SELECT * FROM student";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>Symbol</th>";
                            echo "<th>firstname</th>";
                            echo "<th>Lastname</th>";
                            echo "<th>Age</th>";
                            echo "<th>Gender</th>";
                            echo "<th>Percent%</th>";
                            echo "<th>Grade</th>";
                            echo "<th>School </th>";
                            echo "<th>Live In</th>";
                            echo "</tr>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";

                                echo "<td>" . $row['symbol'] . "</td>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['age'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>" . $row['percent'] . "</td>";
                                echo "<td>" . $row['grade'] . "</td>";
                                echo "<td>" . $row['school'] . "</td>";
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