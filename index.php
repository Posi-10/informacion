<?php
  require_once 'app/configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <?php
      require_once 'app/dependencias.php';
    ?>
  </head>
  <body>
    <?php
      if(isset($_GET['vista_solicitada'])){
        switch($_GET['vista_solicitada']){
          case 'inicio':{
            require_once 'view/inicio.php';
            break;
          }
          default:{
            require_once 'view/error_404.php';
            break;
          }
        }
      }else{
        require_once 'view/inicio.php';
      }
    ?>
  </body>
</html>