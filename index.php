<?php
    
    session_start();

    // Verificamos si hay sésion de usuairo
    
    if (isset($_SESSION["uso_nombre"])){
        //print "<p>Bien venido $_SESSION[uso_nombre] <P>\n";
    }else {
        header('Location: acceder.php');
    }

    include_once 'conexion.php';
    

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
  </head>
<body>
    <div class="menu-izquierdo">

      <div class="parte-superior">
        <div class="usuario">
          <div>
            <img src="./IMG/user.png" class="usu-img">
          </div>
          <div class="usu-nombre"><?php print "<p>$_SESSION[uso_nombre]</p>" ?></div>
        </div>
        <div class="boton-div">
          <a href="./cerrar_sesion.php">
          <button class="cerrar-sesion">
            Cerrar sesión
          </button>
          </a>
        </div>
      </div>

      <!-- API -->
      <div class="parte-inferior">
        <div class="clima">
          <div></div>
          <div class="clima-container">
            <div class="clima-icon-div" id="icono">
              <i class="fas fa-cloud clima-icon" ></i>
            </div>
            <div class="clima-info">
              <h3><span class="temperatura" id="temperatura">23</span>°</h3>
              <h4 id="locacion">Salamanca</h4>
              <h6>humedad: <span class="humedad" id="humedad">64</span>%</h6>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="principal">
      <div class="mes">
        <div class="botones">
          <button class="sig-ant-btn">
            <i class="fa-solid fa-angle-left fa-2xl">
              <a href="#"></a>
            </i>             
          </button>
          <button class="sig-ant-btn"> 
            <i class="fa-solid fa-angle-right fa-2xl">
              <a href="#"></a>
            </i>
          </button>
        </div>
        <div class="mes-nombre">
          Diciembre
        </div>
        <div class="agregar">
          <button class="btn-agregar">
            <i class="fa-solid fa-plus fa-2xl">
            </i>
          </button>
        </div>
      </div>
      <div class="entradas">
        <div class="entrada">
          <div class="ent-header">
            <div class="ent-titulo"><p> Lorem acilis. Facilis, perferendis!</p></div>
            <div class="ent-det">
              <div class="hora-fech">
                <div class="ent-fecha">10-12-22</div>
                <div class="ent-hora">18:00:00</div>
              </div>
              <div class="btns-ent">
                <button class="btn-ent"> <i class="fa-solid fa-pen-to-square fa-xl"></i> </button>
                <button class="btn-ent"> <i class="fa-solid fa-trash fa-xl"></i> </i></button>
              </div>
          </div>
          </div>
          <div class="ent-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minus, necessitatibus quia laudantium incidunt ratione sapiente, eius provident perferendis voluptatibus dicta culpa et doloribus sint iure voluptas maiores vel aspernatur!
          </div>
          
        </div>
      </div>
      <section class="modal">
        <div class="modal-container">
          <form action="agregar_evento.php" method="POST" class="form-modal">
            <h2 class="form-title">
              Agregar un evento
            </h2>
            <br>
            <label for="fech_titulo">Nombre del evento:</label>
            <input type="text" name="fech_titulo" id="fech_titulo">
            <br>
            <label for="fech_dia">Dia del evento:</label>
            <input type="date" name="fech_dia" id="fech_dia">
            <br>
            <label for="fech_hora">Hora del evento:</label>
            <input type="time" name="fech_hora" id="fech_hora">
            <br>
            <label for="fech_des">Descripción del evento:</label>
            <input type="text" name="fech_des" id="fech_des">
            <br>
            <div class="btn-form">
              <button class="btn-form-ind add" type="submit">
                Agregar evento &nbsp;<i class="fa-solid fa-floppy-disk"></i>
              </button>
              <button class="btn-form-ind cancel">
                Cancelar &nbsp;<i class="fa-solid fa-ban"></i>
              </button>
            </div>
          </form>
        </div>
      </section>

    </div>
</body>

<script src="JS/app.js"></script>
<script src="https://kit.fontawesome.com/a552314827.js" crossorigin="anonymous"></script>

</html>

<script src="">
/*const temperatura = document.getElementById('temperatura')
const locacion = document.getElementById('locacion')
const humedad = document.getElementById('humedad')
const icono = document.getElementById('icono')
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'a8d432fe82msh50f66b4c9ea71a8p1c0219jsn2698bb179dfa',
		'X-RapidAPI-Host': 'open-weather13.p.rapidapi.com'
	}
};
fetch('https://open-weather13.p.rapidapi.com/city/latlon/20.507182/-101.193211', options)
	.then(response => response.json())
    .then(response => {
        console.log(response)
        temp = response
        pintarTemperatura(temp)
    })
    .catch(err => console.error(err));


const pintarTemperatura = tempe =>{
    temperatura.innerHTML = '<span class="temperatura" id="temperatura">'+Math.round(tempe.main.temp-273)+'</span>'
    locacion.innerHTML = '<h4 id="locacion">'+tempe.name+'</h4>'
    humedad.innerHTML = '<span class="humedad" id="humedad">'+tempe.main.humidity+'</span>'
    if(tempe.weather[0].main == 'Rain')
    {
      icono.innerHTML = '<i class="fas fa-cloud clima-icon" id="icono"></i>'
    }
    else if(tempe.weather[0].main == 'Wind')
    {
      icono.innerHTML = '<i class="fas fa-wind clima-icon" id="icono"></i>'
    }else 
    {
      icono.innerHTML = '<i class="fas fa-sun clima-icon" id="icono"></i>'
    }

}    
*/
</script>