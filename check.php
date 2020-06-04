<?php
  function check(){
  if(!isset($_SESSION["login"])){
    header("location: index.php");
    echo "<script>console.log('Ups');</script>";
  } else if($_SESSION["login"]!="OK"){
    header("location: index.php");
    echo "<script>console.log('Ups2');</script>";
  }
}
 ?>
