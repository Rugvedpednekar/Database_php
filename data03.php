<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="school";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die ("Connection failed ". mysqli_connect_error());
}

$sql = "SELECT rollno,fname,lname,marks FROM class";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        echo "$row[rollno] ";
        echo "$row[fname] ";
        echo "$row[lname] ";
        echo "$row[marks] ";
        echo "<br>";
    }
}
else{
    echo "result is 0";
}
