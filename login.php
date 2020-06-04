<?php
  if( empty($_POST["username"]) || empty($_POST["password"]) ){
    header("location:index.php?stat=1");
    exit;
  } else {
    include("connection.php");
    echo "<script>console.log('Im in');</script>";
    $connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);




    $uname=$_POST['username'];
    $password=$_POST['password'];


    $query = "SELECT * FROM logins WHERE User='".$uname."' AND Password='".$password."'";
    $result = $connection->query($query);

    if($result->rowCount()==1){
       session_start();
       $_SESSION["login"]="OK";
       $_SESSION["username"]=$_POST['username'];
       header("location:main.php");

    }
    else{
     header("location:index.php?stat=2");

    }
  }
?>
