<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','X31873958','DayOneIsH2020', 'X31873958');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	echo "oops";
}

$sql="SELECT price FROM Textbook WHERE isbn = '".$q."'";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['price'];
    }
}
mysqli_close($con);

?>