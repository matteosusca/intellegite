<!DOCTYPE html>

<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="loginBody">
    <div class="login">
      <br><h1>Login</h1>
      <div class="error_mess">
        <?php
        session_start();
        if(isset($_GET["stat"])){
          if($_GET["stat"]==0){
            echo "<h3>REGISTRATO CON SUCCESSO!!!<br>FAI IL TUO PRIMO ACCESSO!!!";
          } else if($_GET["stat"]==1){
            echo "<h3>INSERISCI USERNAME E PASSWORD!!!";
          } else if($_GET["stat"]==2){
            echo "<h3>USERNAME O PASSWORD ERRATI!!!";
          } else if($_GET["stat"]==3){
            echo "<h3>LOGOUT EFFETTUATO!!!";
          }
        }
       ?>
     </div>
      <form action="login.php" method="post">
        <input class="logform" type="text" name="username" placeholder="Username"><br>
        <input class="logform" type="password" name="password" placeholder="Password"><br>
        <button type="submit" name="button" class="login_button">Login</button>
      </form>
      <p>Non hai un account? <a href="register.php" style="color: black">Registrati</a></p><br>
    </div>
  </body>
</html>
