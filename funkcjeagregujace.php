<html>
<head>
   <title>Daniel Wilk 2Ti</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css">
<?php

   function wszystko($nr,$sql){
      require("connect.php");

      echo("<b><br/><br/>".$nr."</b>");
      echo("<b><br/><br/>".$sql."</b>");
      $result = $conn->query($sql);

      echo("<br/><br/><table border=1>");
      echo("<th>ID</th>");
      echo("<th>Imie</th>");
      echo("<th>Dzial</th>");
      echo("<th>Zarobki</th>");
      while($row = $result->fetch_assoc()){
          echo("<tr>");
              echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td");
          echo("</tr>");
      }
      echo("</table>");
   }

   wszystko("Pracownicy tylko z dzialu 2","SELECT  * FROM pracownicy WHERE dzial=2");

?>
