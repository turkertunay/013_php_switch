<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="013_switch.php" method="post">
          Grade:
          <input type="text" name="grade"><br>
          <input type="submit">
      </form>
  <?php
      $grade = $_POST["grade"];
      echo $grade, "<br>";

      switch($grade){
        case "A":
          echo "You did amazing!";
          break;
        case "B":
          echo "You did pretty good!";
          break;
        case "C":
          echo "You did poorly";
          break;
        case "D":
          echo "You did very bad";
          break;
        case "F":
          echo "You failed!";
          break;
        default:
          echo "Invalid grade";
      }

  ?>
  </body>
</html>
