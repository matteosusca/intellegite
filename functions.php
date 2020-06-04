<?php
  function cripta($key, $message){
    $alf = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $a = 0;
    $message = str_split($message);
    for ($i=0; $i<count($message);$i++){
      if(!(in_array($message[$i],$alf))){
        continue;
      }
      for ($j=0; $j<count($alf);$j++)
        if($alf[$j] == $message[$i]){
          $alfLett = $j;
          break;
        }
      $newLetter = $alfLett+(int)$key[$a];
      if($newLetter>=count($alf)){
        $newLetter-=count($alf);
      }
      $message[$i]=$alf[$newLetter];
      $a++;
      if($a == strlen($key)){
        $a=0;
      }
    }
    return implode($message);
  }

  function decripta($key, $message){
    $alf = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $a = 0;
    $message = str_split($message);
    for ($i=0; $i<count($message);$i++){
      if(!(in_array($message[$i],$alf))){
        continue;
      }
      for ($j=0; $j<count($alf);$j++)
        if($alf[$j] == $message[$i]){
          $alfLett = $j;
          break;
        }
      $newLetter = $alfLett-(int)$key[$a];
      if($newLetter<0){
        $newLetter+=count($alf);
      }
      $message[$i]=$alf[$newLetter];
      $a++;
      if($a == strlen($key)){
        $a=0;
      }
    }
    return implode($message);
  }

  function saveLog($msg, $username){
    include("connection.php");
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO logs (username, message) VALUES ('".$username."','". $msg."')";
      // use exec() because no results are returned
      $conn->exec($sql);
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

 ?>
