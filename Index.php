<script type="text/javascript">
function insertarcontenido(url,contenedor){
  $.ajax({
    type: "POST",
    data:{},
    url: url,
    dataType: "html",
    success: function(html) {
      $(contenedor).html(html);
    },error: function(xhr, textStatus, errorThrown){
      console.log("No se pudo insertar contendido");
    }
  });
}
</script>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>OVI Conexiones PHP</title>
  <meta charset="UTF-8">
  <meta name="description" content="OVI Unidad 2 - Conexiones a bases de datos utilizando PHP">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Omat Traslaviña">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("plantillas/head.php"); ?>
  <script type="text/javascript">
  $(document).ready(function(){
    controlesmenu();
    insertarcontenido('ovi.php','.espacio-trabajo');
  });
  </script>
</head>
<body style="font-size:12px !important">
  <div class="menu">
    <div class="cont-logo">
      <img style="width:90%;height:100%;" src="img/logo.png">
    </div>
    <?php include("plantillas/menu.php"); ?>
  </div>
  <div class="panel-derecho">
    <header>
      <div class="img_header" style="float:left;">
        <h1>OVI CONEXIONES A BASE DE DATOS MYSQL USANDO PHP</h1>
      </div>
    </header>
    <div class="espacio-trabajo"></div>
  </div>
</body>
</html>
