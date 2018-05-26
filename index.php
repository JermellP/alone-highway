<?php
$connect = mysqli_connect("localhost","root","","alone_highway");

if($connect){
  echo("Database Connected...");
}else{
  echo("Sorry Pal...");
}
?>
