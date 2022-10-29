<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php

$servername = "db";
 $db = "milestone";
 $username = "Birate";
 $password = "gagaarthur";
 
 $conn = mysqli_connect($servername, $username, $password ,$db);
 $query = "SELECT name FROM students";
 $result = mysqli_query($conn,$query);
 $record = mysqli_fetch_assoc($result);

echo "<h2>" . $record['name'] .  " has reached milestone 1 !!! </h2>";


 if(!$conn){
 echo "failed to connect" . mysqli_connect_error();
exit();

};

?>
    
</body>
</html>

