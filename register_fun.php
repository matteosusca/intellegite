<?php
  include("connection.php");
  $user_reg = $_POST['user_reg'];
  $pass_reg = $_POST['pass_reg'];
  $conf_pass_reg = $_POST['conf_pass_reg'];
  $connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  $query = "SELECT * FROM logins WHERE User='".$user_reg."'";
  $result = $connection->query($query);
  if($user_reg=="" || $pass_reg=="" || $conf_pass_reg==""){
    header("location:register.php?reg_state=2");
  }
  else if($pass_reg!=$conf_pass_reg){
    header("location:register.php?reg_state=0"); //password non corrispondenti
  }
  else if($result->rowCount()>=1){
    header("location:register.php?reg_state=1"); //utente già registrato
  } else{
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO logins (User, Password) VALUES ('".$user_reg."','". $pass_reg."')";
    // use exec() because no results are returned
    $connection->exec($sql);
    header("location:index.php?stat=0"); //registrato con successo
  }
 ?>
