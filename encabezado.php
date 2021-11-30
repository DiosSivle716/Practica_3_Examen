<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="estilo2.css">
<link rel="stylesheet" href="estiloform.css">
  <title>Elvis Fierro Martinez!</title>
  </head>
  <body background="https://fondosmil.com/fondo/27744.jpg">
   <CENTER><font size="40" color="purple"><div class="nombre">

   </div></font></CENTER>


<CENTER><header>
<h1> <img src="http://api.chaoticunited.net/img/logo/cu_logo_2021_web.png" width="600" height="100"><h1><br>Welcome
  <nav>
<a href="">INICIO</a>
<a href="">SOPORTE</a>
<a href="">CREDITOS</a>
<a href="">CONTACTO</a>
</nav>
</header></CENTER>

<CENTER>  <div class="row">
  <div class="col-xxl baticol">
    <h4><font color="white">WE MAKE IT HAPPEN </font><h4>
</div>
</div>
<br>
<br>
<br>
  <CENTER>  <div class="row">
    <div class="col-xxl baticol2"><h4><font color="whithe"><img src="https://media.discordapp.net/attachments/767615312601677824/908071414119141386/pngwing.com.png?width=460&height=522" width="25" height="25" aling="left">
      Minecraft Registration</font></h4>
   <p>Our Minecraft server for Vanilla Minecraft is our longest-standing service.
      It was introduced in 2011, and has been the flagship project for CU ever since.</p>
    </div>

    <div class="col-xxl baticol2"><h4><font color="whithe"><img src="https://media.discordapp.net/attachments/767615312601677824/908522398431715398/pngwing.com_1.png" width="25" height="25" aling="left">
      Chaotic Launcher</h4></font>
   <p>The main hub of the entire community.
   Any important announcements and community discussion of all sorts end up here. We also help our members with server related issues through there!</p>
  </div>

    <div class="col-xxl baticol2"><h4><font color="whithe"><img src="https://media.discordapp.net/attachments/767615312601677824/908522404224069662/pngwing.com.png?width=523&height=523" width="25" height="25" aling="left">
      Servers</h4></font>
   <p>All of our servers are managed by our staff team!
      We make sure they are continuously updated with new features and suggestions made by the community!.</p>
    </div></CENTER>

 <!---divicion de columna pa--->

  <div class="row">
    <div class="col-xxl baticol3">
       <p><button aling="left" class="boton btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><span><font color="white">Register</font></span></button></p>
     </div>

      <div class="col-xxl baticol3">
    <p><button class="boton btn-1" onclick="window.open('https://tlauncher.org/en/')"><span><font color="white">Download</font></span></button></p>
    </div>

      <div class="col-xxl baticol3">
       <p><button class="boton btn-1" onclick="window.open('https://www.40servidoresmc.es')"><span><font color="white">Servers</font></span></button></p>
      </div>



  </div></CENTER>


  <!-- Modal -->

<div class="contenedor">
  <div class="modal fade" tabindex="-1" id="modal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><FONT color="black">Bienvenido a CHAOTIC UNITED</FONT></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Este es una pagina prueba para poner aprueba el jquery</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CONTINUAR</button>
          <button type="button" class="btn btn-primary" onclick="window.open('https://youtu.be/vL49i2_JIDY')">REGISTRATE</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade modalform" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <CENTER><form id="formulario" action="" method="post">


              <p>
                <label for="nombre" class="colocar_nombre"> Nombre Completo:
                  <span class="obligatorio">*</span>
                </label>
                  <input type="text" name="Nombre" id="Nombre" required="obligatorio" placeholder="Escribe tu nombre">
              </p>

              <p>
                <label for="correo" class="colocar_correo"> Correo Electronico:
                  <span class="obligatorio">*</span>
                </label>
                  <input type="email" name="Correo" id="Correo" required="obligatorio" placeholder="Escribe tu correo electronico">
              </p>

              <p>
              <label for="contraseña" class="colocar_contraseña">Contraseña
              <span class="obligatorio">*</span>
              </label>
              <input type="password" name="Contraseña" id="Contraseña" required="obligatorio" placeholder="Escribe tu contraseña">
              </p>

              <p>
                <label for="Matricula" class="colocar_matricula">Matricula
                  <span class="obligatorio">*</span>
                </label>
                  <input type="number" name="Matricula" id="Matri"  required="obligatorio" placeholder="Escribe tu matricula">
              </p>

              <p>
                <label for="grupo" class="colocar_grupo"> Grado y Grupo
                  <span class="obligatorio">*</span>
                </label>
                  <input type="text" name="Grupo" id="Grupo"  required="obligatorio" placeholder="Escribe tu grado y grupo">
              </p>

              <p>
                <label for="comentario" class="colocar_comentario">Comentario
                </label>
              <textarea name="Comentario" class="texto_comentario" id="Com" placeholder="Deja aquí tu comentario..."></textarea>
              </p>


<hr>
              <button class="btn-1" type="submit" name="insertar_formulario" id="insertar" onclick="window.open('encabezado.php')"><span><font color="white">Insertar</font></span></button>
              <button class="btn-1" type="reset"><span><font color="white">Eliminar</font></span></button>
              <br>
              <br>
              <button class="btn-1" type="submit" name="Buscar" id="Buscar" onclick="window.open('registro.php')"><span><font color="white">Buscar</font></span></button>
              <span class="obligatorio"> </span>
<br>
<br>
        </form></CENTER>

        <?php
        error_reporting(0);
        session_start();
        header('Location: encabezado.php ');
            $con=mysqli_connect('localhost','root','','profile') or die ('error en la conexion con el servidor');

            $sql="INSERT INTO datos VALUES(NULL,'".$_POST["Nombre"]."','".$_POST["Correo"]."','".$_POST["Contraseña"]."','".$_POST["Matricula"]."','".$_POST["Grupo"]."','".$_POST["Comentario"]."')";

         $resultado=mysqli_query($con,$sql) or die ('error en la query database');

            mysqli_close($con);
        ?>

      </div>
    </div>
  </div>
</div>

<!---final del modal--->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript" ></script>
    <script src="modal.js" type="text/javascript" ></script>
    <script>
      $(document).ready(function(){
          $(".nombre").text("Elvis Fierro Martinez 5V-A");
      });
  </script>
  <script>
    $(".nombre").click(function(){
    $(".nombre").hide(1500);

    });
    </script>
<script type="text/javascript">
  $('#insertar').click(function(){
$.ajax({
url: "",
type: 'POST',
data: $('#formulario').serialize(),
succes: function(res){
}

});

});
</script>
  </body>
</html>
