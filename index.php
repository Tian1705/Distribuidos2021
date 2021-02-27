<!DOCTYPE html>

<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:Login.php");
	}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link  rel="icon"   href="http://b374db8a2c22.ngrok.io/Distribuidos2020/icon.jpg" type="image/jpg" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="http://b374db8a2c22.ngrok.io/Distribuidos2020/styles.css"/>
    <script src="http://b374db8a2c22.ngrok.io/Distribuidos2020/script.js"></script>
  </head>
  <body>
    <div class="navbar">
          <div class="navbar-inner">
              <div class="nav-collapse">
              <ul class="nav pull-right">
                  <li><a href="">Bienvenido <srtrong>
										<?php
											echo $_SESSION['user']
											?>

                      </srtrong>
                      </a></li>
                  <li><a href="desconectar.php"> Cerrar sesion</a></li>

              </ul>
              </div>
          </div>
        </div>

    <div  class="Numero1">
        <label for="Numero_Uno">Número Uno:</label>
          <input type="number" id="Numero_Uno">
    </div>
    <div class="Numero2">
        <label for="Numero_Dos">Número Dos:</label>
          <input type="number" id="Numero_Dos">
    </div>
    <label for = "Operacion">Operación: </label>
      <select id="Operacion">
        <option value="0">.....</option>
        <option value="1">Suma</option>
        <option value="2">Resta</option>
        <option value="3">Multiplicación</option>
        <option value="4">División</option>
      </select>
 </body>
  <footer>
    <div>
      <button onclick="Enviar()">Calcular el Valor</button>
    </div>
    <div id="resultado">

    </div>
  </footer>
</html>
