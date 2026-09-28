<!DOCTYPE html>
<html>
<head>
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="dive">
   <h1>Captura de datos personales</h1>
  <br>
  <h2>Ingresa los datos que se te piden</h2>
  <br>
  <p>Mi primera encuesta</p>
  <br>

  <form action="resultados.php" method="POST">

<label>Nombre:</label>
<input type="text" id="nombre" name="nombre">

<br>
<label>Edad:</label>
<input type="number" id="edad" name="edad">

<br>
<label>Ciudad:</label>
<input type="text" id="ciudad" name="ciudad">

<br>
<label>Pasatiempo favorito:</label>
<input type="text" id="pasatiempo" name="pasatiempo">
<br>
<button type="submit">Registrar los datos ingresados</button>
</form>

<script src="script.js"></script>

</body>
</html>