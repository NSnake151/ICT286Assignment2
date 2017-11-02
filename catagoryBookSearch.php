<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','X31873958','DayOneIsH2020', 'X31873958');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	echo "oops";
}

$sql="SELECT * FROM Textbook WHERE productDescription = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ISBN</th>
<th>Title</th>
<th>Publisher</th>
<th>Author</th>
<th>Description</th>
<th>Price</th>
<th>Quantity</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['isbn'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['productDescription'] . "</td>";
	echo "<td>" . $row['publisher'] . "</td>";
	echo "<td>" . $row['author'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>