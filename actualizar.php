<?php
include("conexion2.php");
$conn = conectar();
$id = $_GET['id'];
$usu = $_GET['usu'];

$sql = "SELECT * FROM fechas WHERE fech_id = '$id' AND fech_usu_id = '$usu'";
$query = mysqli_query($conn, $sql);
$actividad = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style3.css">
    <title>Editar evento</title>
</head>
<body>
<section class="modal-update">
        <div class="modal-container">
          <div class="datos">
            <form action="update.php" method="POST" class="form-modal">
                <h2 class="form-title datos">
                  Editar evento
                </h2>
                <input style="display: none;" type="text" name="fech_id" id="fech_id" value="<?php echo $actividad['fech_id'] ?>">
                <input style="display: none;" type="text" name="fech_usu_id" id="fech_usu_id" value="<?php echo $actividad['fech_usu_id'] ?>">
                <br>
                <label for="fech_titulo">Nombre del evento:</label>
                <input type="text" name="fech_titulo" id="fech_titulo" value="<?php echo $actividad['fech_titulo'] ?>">
                <br>
                <label for="fech_dia">Dia del evento:</label>
                <input type="date" name="fech_dia" id="fech_dia" value="<?php echo $actividad['fech_dia'] ?>">
                <br>
                <label for="fech_hora">Hora del evento:</label>
                <input type="time" name="fech_hora" id="fech_hora" value="<?php echo $actividad['fech_hora'] ?>">
                <br>
                <label for="fech_des">Descripción del evento:</label>
                <input type="text" name="fech_des" id="fech_des" value="<?php echo $actividad['fech_des'] ?>">
                <br>
                <div class="btn-form">
                  <button class="btn-form-ind add" type="submit" @onclick="Location.redirect('index.php')">
                    Editar evento <i class="fa-solid fa-floppy-disk"></i>
                  </button>
                </div>
              </form>
            </div>
        </div>
      </section>
      <script src="JS/app.js"></script>
      <script src="https://kit.fontawesome.com/a552314827.js" crossorigin="anonymous"></script>
</body>
</html>