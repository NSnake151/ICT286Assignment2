<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','X31873958','DayOneIsH2020', 'X31873958');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	echo "oops";
}

$sql="SELECT * FROM Textbook WHERE isbn = '".$q."'";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql);
$quant = mysqli_fetch_array($result1);

if ($result != "" && $quant['quantity'] > 0)
{
	mysqli_query($con,"UPDATE Textbook SET quantity = quantity - 1 WHERE isbn = '$q'");


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
}
else 
{
	echo "<script>";
	echo "alert('product sold out');";
	echo "</script>";
	
	mysqli_close($con);
}

?>