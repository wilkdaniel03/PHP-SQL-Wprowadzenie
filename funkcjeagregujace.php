<?php

   function wszystko($nr,$sql){
      require("connect.php");

      echo("<b><br/><br/>Tabelka nr ".$nr."</b>");
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

   wszystko(1,"SELECT  * FROM pracownicy WHERE dzial=2");

?>
