<?php
$cricket = array("Virat", "Dhoni", "Sachin", "Sehwag");

echo "<h3>Displaying Names in Table Format</h3>";
echo "==========================<br/>";

echo "<br>Names of cricket players as stored in an array:<br/>";
print_r($cricket);

echo "<br><br>Names of cricket players displayed in a table:<br/>";
echo "<table border='2' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Player Names</th></tr>";

foreach ($cricket as $player) {
    echo "<tr><td>$player</td></tr>";
}

echo "</table>";
?>