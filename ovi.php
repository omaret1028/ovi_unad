<section  style="width:75%; height:100%; overflow-y:hidden;">
  <section class="filaform" style="width:100%; height:60%">
    <article class='celdaform' style="width:65%; height:100%">
      <video width="100%" height="100%" controls>
        <source src="ovi.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        El navegadpor no tiene soporte para la etiqueta "<video>" de HTML
      </video>
    </article>
    <article class='celdaform' style="width:35%; height:100% overflow-y:auto; border:1px solid black;">
      <h4>Código de Conexiones PHP</h4>
      <div style="overflow-y:auto; height:calc(100% - 40px); width:100%;">
      <?php
      echo "Conectamos con la base de datos y almacenamos la conexión en la variable conexión <br/>
        conexion = mysql_connect('localhost', 'root', 'root')<br>
         //creamos una condicional IF para estar seguros de que hemos conectado correctamente <br><br>
         if(!$ conexion){<br>
           echo 'No se ha podido conectar con el servidor' . mysql_error();<br>
         }else {echo 'Hemos conectado al servidor <br />';}<br>
         //seleccionamos la base de datos a la que conectarlos, el primer parametro es nuestra BD y el segundo la conexión <br><br>
         $ db_seleccionada = mysql_select_db('post_webioss', $ conexion);<br><br>

         //Escribimos una condicional para que en el caso de que tengamos un error al conectar nos muestre un mensaje<br><br>
         if(!$ db_seleccionada){<br>
           echo 'Hay un problema al seleccionar la base de datos' . mysql_error();<br>
         }else{<br>
            echo 'Conectado correctamente a la base de datos <br />';
         }<br><br>

         //cerramos la conexion SIEMPRE<br>
         mysql_close($ conexion);<br><br>
         ?><br><br>

      Código utilizado para conectarme a una base de datos Postgres desde una página web utilizando php:<br>

      //conectarse a una base de datos llamada 'nombredb'<br>
      $ dbcon = pg_connect('dbname=nombredb');<br><br>

      // conectarse a una base de datos llamada ' nombredb ' en 'localhost' por el puerto '5432'<br>
      $ dbcon = pg_connect('host=localhost port=5432 dbname= nombredb');<br><br>

      //conectarse a una base de datos llamada 'nombredb' en el host 'host' con el nombre de usuario y password<br>
      $ dbcon = pg_connect('host=host port=5432 dbname= nombredb user=usuario password=clave');<br><br>

      //conectarse por el puerto 5432 a una base de datos llamada 'nombredb' en el host 'host' con el nombre de usuario y password<br>
      $ conn_string = 'host=host port=5432 dbname=nombredb user=usuario password=clave';<br>
      $ dbcon = pg_connect($ conn_string);<br><br>

      Código utilizado para conectarme a una base de datos mysql desde una página web utilizando php PDO:<br>
      <php<br>
       $ mbd = new PDO('mysql:host=localhost;dbname=prueba', $ usuario, $ contraseña);<br><br>
      >";
      ?>
    </div>
    </article>
  </section>
  <section class="filaform" style="width:100%; height:30%; overflow-y:auto;">
    <article class='celdaform' style="width:100%;">
      <div>
        <h3>Descripción General del OVI</h3>
        <p>En este OVI vamos a profundizar en los tipos de conexiones TCp y HTTP, porque se hace necesarias las conexiones persitentes y hablaremos de los tipos de conexión que podemos usar teniendo como ente controlador y gestor de conexiones a PHP.</p>
          <p>En la web un usuario podría abrir y cerrar una conexión para cada petición que se envía a un servidor; pero a medida que el número de solicitudes de usuario por página creció, también lo hizo los gastos indirectos generados por protocolos de comunicación como TCP y las estructuras de datos en memoria necesaria para establecer cada conexión.</p>
        <p>Para evitar la congestión y saturación de servidores por solicitudes surgio la idea de las conexiones persistentes, que utiliza una única conexión para enviar y recibir múltiples peticiones, en lugar de abrir una nueva para cada par petición/respuesta. El uso de conexiones persistentes es muy importante para mejorar el rendimiento de las aplicaciones sobre HTTP ya que evitan el arranque lento del control de congestión de TCP.</p>
        <p>En resumen, las conexiones persistentes reducen el uso de memoria, el uso de CPU, la congestión de la red, la latencia, y en general mejoran la respuesta de una página con el tiempo.</p>

      <div>
    </article>
  </section>
</section>
<aside class='celdaform' style="width:25%; height:100%; border:1px solid black; overflow-y:auto;">
  <h4>Videos Recomendados</h4>
  <iframe src="https://www.youtube.com/embed/5b0qw606eMI" frameborder="1" allowfullscreen style="
    width: -webkit-fill-available;"></iframe>
  <hr/>
  <iframe src="https://www.youtube.com/embed/YD4r2DYRXD4" frameborder="1" allowfullscreen style="
    width: -webkit-fill-available;"></iframe>
  <hr/>
  <iframe src="https://www.youtube.com/embed/lJlQSfBITnw" frameborder="1" allowfullscreen style="
    width: -webkit-fill-available;"></iframe>
  <hr/>
  <iframe src="https://www.youtube.com/embed/4ISqhGgpl1k" frameborder="1" allowfullscreen style="
    width: -webkit-fill-available;"></iframe>
  <hr/>
</aside>
