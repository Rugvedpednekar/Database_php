<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="school";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die ("Connection failed ". mysqli_connect_error());
}

$sql = "INSERT INTO class (fname,lname,marks)
VALUES  ('Abhi' , 'Rakesh' , 73 )";

if(mysqli_query($conn,$sql)){
    echo " New record created Successfully ";
}
else{
    echo "error" .$sql."<br>". mysqli_error($conn);
}

?>
