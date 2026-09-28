<!DOCTYPE html>
<html>
<head>
<title>¡Resultados de datos!</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dive2">
<h1>Resultados</h1>

<img src="imagen.jpg">

<p>Nombre: <?php echo $_POST['nombre']; ?></p>
<p>Edad: <?php echo $_POST['edad']; ?></p>
<p>Ciudad: <?php echo $_POST['ciudad']; ?></p>
<p>Pasatiempo favorito: <?php echo $_POST['pasatiempo']; ?></p>
<h2>¡Bien Hecho!</h2>
<button onclick="mostrarPopup()">Ingresar nuevos datos</button>
</div>

<script src="script.js"></script>
<script src="app.js"></script>

</body>
</html>
