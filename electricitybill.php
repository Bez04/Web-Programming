<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<h1>Electricity Bill</h1> 
<form method="POST" action="#"> 
Consumer ID:<input type="number" name="id"><br> 
Name:<input type="text" name="name"><br> 
Previous Reading:<input type="number" name="prev"><br> 
Present Reading:<input type="number" name="pres"><br><br>
submit <input type="submit" name="submit"> 
</form> 
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") 
    { 
    $id=$_POST['id']; 
    $name=$_POST['name']; 
    $prev=$_POST['prev']; 
    $pres=$_POST['pres']; 
    $units=$pres-$prev; 

    echo"_________________________________________________________________________________________"; 
    echo"<h3>Kerala State Electricity Board(KSEB)</h3>"; 
    echo"<br><br>"; 
    echo"Consumer ID:".$id."<br>"; 
    echo"Consumer name:".$name."<br>"; 
    echo"Units Consumed:".$units."<br>"; 
        if($units<=100) 
        { 
        $amt=$units*3; 
        } 
        else if($units>100&&$units<=200) 
        { 
        $amt=$units*4; 
        } 
        else if($units>200&&$units<=300) 
        { 
        $amt=$units*5; 
        } 
        else 
        { 
        
        $amt=$units*5; 
        } 
        echo"<h4>Total:Rs.".($amt)."</h4><br>"; 
        echo"_____________________________________________________________________________________________"; 
    } 
?> 
</body> 
</html>
