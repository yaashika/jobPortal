<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>


<?php

$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password);
$dbname=mysqli_select_db($con,"mynew");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$skillset ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $skillset=$_POST['skillset'];

}

$sql="select job from job where skillset='$skillset'";
$query_run9=mysqli_query($con,$sql);
if(mysqli_num_rows($query_run9)>0)
{
  while ($row=mysqli_fetch_assoc($query_run9))
  {
    echo "<div class='jumbotron'>";
    echo "<h1><center>You are Selected for ".$row['job']."</center></h1>";
    echo "</div>";


  }

}
mysqli_close($con);


 ?>
</body>
</html>
