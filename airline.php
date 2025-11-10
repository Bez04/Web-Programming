<html>
    <head></head>
    <title></title>
    <body>
<form method="POST" action="#">
     From<input type="text" name="fro"><br>
     Airline<input type="text" name="airline"><br>
     Departure <input type="date" name="dd"><br>
     Arrival<input type="date" name="ad"><br><br>
     Too<input type="text" name="too"><br><br>
     Flight Number<input type="number" name="fn"><br><br>
     Terminal<input type="number" name="ter"><br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airdb";
$tbname="air";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed".mysqli_connect_error());
}
else
{
echo"<br><h2 align=center>FLIGHT DETAILS</h2><br/>";
}

$from=$_POST['fro'];
$airlines=$_POST['airline'];
$deptime=$_POST['dd'];
$arrtime=$_POST['ad'];
$to=$_POST['too'];
$from=$_POST['fn'];
$terminal=$_POST['ter'];
$query="INSERT INTO air(fro,airline,dd,ad,too,fn,ter)VALUES('".$from."','".$airlines."','".$deptime."','".$arrtime."','".$to."','".$from."','".$terminal."')";
$res=mysqli_query($conn,$query);
if($res)
{
    echo"submitted succesfully";
}
else
{
    echo"error";
}


$sql="SELECT*FROM air";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
echo"<table border=2 align=center>";
echo"<tr><th>From</th>";
echo"<th>Airline</th>";
echo"<th>Departure Date</th>";
echo"<th>Arrival Date</th>";
echo"<th>To</th>";
echo"<th>Flight Number</th>";
echo"<th>Terminal</th></tr>";
while($row=mysqli_fetch_assoc($res))
{
echo"<tr><td>$row[fro]</td>";
echo"<td>$row[airline]</td>";
echo"<td>$row[dd]</td>";
echo"<td>$row[ad]</td>";
echo"<td>$row[too]</td>";
echo"<td>$row[fn]</td>";
echo"<td>$row[ter]</td></tr>";
}
echo"</table>";
}
else
{
echo"0 results";
}
mysqli_close($conn);
?>
