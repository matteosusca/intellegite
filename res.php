<!DOCTYPE html>
<?php include("functions.php");
session_start();
$_SESSION["login"]="OK";
  ?>
<html lang="it" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="mainBody">
    <div class="top-bar">
      <table style="width: 100%">
        <tr>
          <td><p>Intellegite - A cryptography web application</p></td>
          <td style="text-align:right"><a  href="logout.php"><button class="logout_button">Logout</button></a></td>
        </tr>
      </table>
    </div>
      <div class="mainDiv">
        <p><?php
        if(!isset($_POST["radio"])){
          ?>
          Scegli tra le opzioni "Cripta" o "Decripta", poi premi "Esegui"
          <?php
        } else if($_POST["mess"]=="" || $_POST["mess"]==" "){
          ?>
          Inserisci un messaggio da Criptare/Decriptare, poi premi "Esegui"
          <?php
        } else if($_POST["key"]=="" || $_POST["key"]==" "){
          ?>
          Inserisci una chiave di Criptaggio/Decriptaggio, poi premi "Esegui"
          <?php
        } else{
            $choise = $_POST["radio"];
            $message = $_POST["mess"];
            $key = $_POST["key"];
            switch ($choise){
              case 'cripta':
                $res = cripta($key, $message);
                echo "Messaggio Criptato: <br><p class='res'>".$res."</p><br>";
                saveLog($res, $_SESSION["username"]);
                break;
              case 'decripta':
                $res = decripta($key, $message);
                echo "Messaggio Decriptato: <br><p class='res'>".$res."</p><br>";
                break;
              default:
              break;
            }
          }
          ?>

         </p>
         <a href="main.php"><button class="home_button">Home</button></a>
      </div>
  </body>
</html>
