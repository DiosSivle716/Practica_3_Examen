<?php
$con=mysqli_connect('localhost','root', '', 'profile') or die('error en la concexion del servidor');
$where = "";
if (!empty($_POST)) {
$valor = $_POST['campo'];
if (!empty($valor)) {
$where = "WHERE Nombre LIKE '%$valor%'";
    }
}

$sql = "SELECT `ID`, `Nombre`, `Correo`, `Contraseña`, `Matricula`, `Grupo`, `Comentario` FROM `datos` $where";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Registro</title>
  </head>
  <body>
    <style>
    body{
      background: #010038;
    }
    .busca {
      border-radius: 5px;
    }
    .sometxt{
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
.mydiv{
  position: relative;
  margin: 3% auto 0;
  width: 40%;
  height: 30px;
  background: linear-gradient(90deg, #000, #323232);
}
.baticol h3 {
  background: linear-gradient(90deg, #000, #323232);
}
.animate-bg:before, .animate-bg:after{
  content: '';
  position: absolute;
  left: -8px;
  top: -8px;
  background: linear-gradient(120deg, #79fb00, #8d01a0, #031ba5, #ff004c, #e6036d, #fb0094, #ff6600, #04c2e4, #adad02, #00c3ff);
  background-size: 300%;
  width: calc(100% + 16px);
  height: calc(100% + 16px);
  z-index: -1;
  animation: BGgradient 15s ease infinite;
}

@@keyframes BGgradient {
  0%{
    background-position: 0% 200%;
  }
  50% {
    background-position: 200% 0%;
  }
  100% {
    background-position: 0% 330%;
  }
}
.animate-bg:after{
  filter: brightness(1.4);
  filter: drop-shadow(16px 16px 20px rgba(248, 220, 97));
  filter: blur(15px);
}

    form button{
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 5%;
      height: 30px;
      background: rgba(49, 49, 49);
      color: white;
      font-size: 10px;
      font-weight: 500;
      border: none;
      cursor: pointer;
      text-transform: uppercase;
      transition: .3s ease all;
      border-radius: 5px;
      position: relative;
    overflow: hidden;
    }
    form button span{
      position: relative;
      z-index: 2;
      transition: .3s ease all;
    }
    form button.btn-1::after {
      content: "";
      width: 100%;
      height: 100%;
      background-image: linear-gradient(to left, #7F06FF, #39DBFF);
      position: absolute;
      z-index: 1;
      top: -40px;
      left: 0;
      transition: .3s ease-in-out all;

    }
    button.btn-1:hover::after {
      top: 0;
    }
    table{
      background-image: linear-gradient(to left, #9A0F98,#EA0599);
    }
thead{
background: #71DFE7;
}
tr {
  border-color: purple;
}
th{
border-color: purple;
}
td{
border-color: purple;
}


    </style>
<div class="row">
<div class="col baticol">
  <div class="mydiv animate-bg">
  <CENTER><h4 class="sometxt"><font>Consulta de Registros</font></h4><CENTER></div>
</div>
</div>

<br>

<CENTER><div class="row">
  <div class="col batcol">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <font color="white"><b>Nombre: </b></font><input class="busca" type="text" id="campo" name="campo" value="" />
    <button class="btn-1" type="submit" name="Buscar" id="buscar"><span><font color="white">Buscar</font></span></button>
    </form>
  </div>
</div></CENTER>

<br>
<div class="lol">
<div class="row table-responsive">
  <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Matricula</th>
          <th>Grado/Grupo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $resultado->fetch_array()) {

        ?>
        <tr>
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['Nombre']; ?></td>
          <td><?php echo $row['Correo']; ?></td>
          <td><?php echo $row['Matricula']; ?></td>
          <td><?php echo $row['Grupo']; ?></td>
          <td><a href="eliminar.php?id=<?php echo $row['ID'];?>" class="table__item__link"><img src="https://media.discordapp.net/attachments/767615312601677824/915036222169178152/pngwing.com.png" height="35px" with="35px"><img></a></td>
        </tr>
        <?php } ?>
      </tbody>
  </table>
</div>
  </div>

<!--- scrips--->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="confirmar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!---fin script--->
  </body>
</html>
