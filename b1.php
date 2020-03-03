<html>
      <head>
      <title>Ingresando valor</title>
      </head>
<body>
  <form method="post" action="b1.php">
  Ingrese el valor del numero:
  <input type="text" name="numero" value="0"><br>
  <input type="submit" value="confirmar">
  </form>
      <?php
          if($_REQUEST['numero'] % 2 == 0)
               {
          echo "El numero ingresado es par <br>"; 
         }
          else
          {
           echo "El numero ingresado es impar";
          }
         if($_REQUEST['numero'] == 0)
         {
          echo "El numero es nulo";
         }
      ?>
</body>
</html>