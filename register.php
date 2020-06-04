<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="mainBody">
    <div class="top-bar">
      <table style="width: 100%">
        <tr>
          <td><p>Intellegite - A cryptography web application</p></td>
          <td style="text-align:right"><a  href="index.php"><button class="logout_button">Torna al Login</button></a></td>
        </tr>
      </table>
    </div>
    <div class="mainDiv">

      <form action="register_fun.php" method="post">
        <table>
          <?php
           echo "<tr><td>";
            if(isset($_GET["reg_state"])){
              switch ($_GET["reg_state"]) {
                case 0:
                  echo "Le Password non corrispondono";
                  break;
                case 1:
                  echo "L'utente è gia esistente";
                  break;
                case 2:
                  echo "Compila tutti i campi";
                  break;

                default:
                  // code...
                  break;
              }
            }
            echo "</td></tr>";
           ?>
          <tr>
            <td>Username:</td>
            <td><input class="mainForm" type="text" name="user_reg"></td>
          </tr>
          <tr>
            <td>Password: </td>
            <td><input class="mainForm" type="password" name="pass_reg"></td>
          </tr>
          <tr>
            <td>Conferma Password: </td>
            <td><input class="mainForm" type="password" name="conf_pass_reg"></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="submit" name="button" class="register_button">Login</button></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
