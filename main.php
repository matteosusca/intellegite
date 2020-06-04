<!DOCTYPE html>
<?php
  session_start();
  include("check.php");
  check();
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
      <form action="res.php" method="post">
        <input class="operation" id="cripta" type="radio" name="radio" value="cripta">
        <label for="cripta" class="operationLabel">Cripta</label><br>
        <input class="operation" id="decripta" type="radio" name="radio" value="decripta">
        <label for="decripta" class="operationLabel">Decripta</label><br>
        <table>
          <tr>
            <td>Message:</td>
            <td><input class="mainForm" type="text" name="mess"></td>
          </tr>
          <tr>
            <td>Key: </td>
            <td><input class="mainForm" type="number" name="key"></td>
          </tr>
        </table>
        <br><br>
        <button type="submit" name="button" class="operation_button">Esegui</button>
      </form>
    </div>
  </body>
</html>
