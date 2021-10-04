
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data show</title>
    <link rel="stylesheet" href="table.css">
    <style>
body{
    background-color:#c8cfdb;
}
table{
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    border:1px solid lightgreen;
    margin: 5% 35%;
    background-color:#fcfcfc;
    border-radius: 10px;
    padding: 20px;
}
td,th{
    border:1px solid lightgray;
    border-spacing:10%;
    padding: 10px;
    text-align: center;border-radius: 5px;
}#banner{
    background-color:lightblue;
    height:23%;
    width:40%;
}
        </style>
</head>
<body>
    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "ibasanta";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("UnSuccessfully connected." . mysqli_connect_errno());
}
else {
    $sql = "SELECT * FROM indu";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            echo "<table>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>First_name</th>";
            echo "<th>Last_name</th>";
            echo "<th>Age</th>";
            echo "<th>Gender</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        // Free result set
        //  mysqli_free_result($result);
        }
        else {
            echo "No records matching your query were found.";
        }
    }
    else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
// Close connection
mysqli_close($conn);
?>
</body>
</html>
