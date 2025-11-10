<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airdb";
$tbname="air";
$conn=mqsqli_connect($servername,$username,$password,$dbname);
if(!conn)
{
    die("Connection Failed".mysqli_connect_error());
}
else{
    echo"<br><h2 align=center>FLIGHT DETAILS</h2><br>";
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
       echo"<tr><td>$row[From]</td>";
       echo"<td>$row[Airline]</td>";
       echo"<td>$row[DEPA]</td>";
       echo"<td>$row[ad]</td>";
       echo"<td>$row[too]</td>";
       echo"<td>$row[fn]</td>";
       echo"<td>$row[ter]</td></tr>";
    }
echo"</table>";
}
else
{
    echo"0 result";
}
mysqli_close($conn);
?>



