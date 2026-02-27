<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aula02.css">
    <title>AULA 02</title>
</head>
<body>
   <h1> Aula 02 - PHP + HTML <h1>
   <?php
      $nome = "Kaique";
      echo "<p style='color:red;'>Bem-Vindo... $nome</p>";
      // LAÇO DE REPETIÇÃO - CONTAR DE 1 A 5




      echo "<ul>";

      for ($i=1; $i <= 5; $i++) { 
        echo "<il> $i </li>  ";
      }
      echo"</ul>";
   ?> 


</body>
</html>