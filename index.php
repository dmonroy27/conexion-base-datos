<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<h1>Formulario de contacto</h1>
	<form action="validar.php" method="POST">
		<label for="nombre">nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>

		<label for="email">autor:</label>
		<input type="text" id="email" name="autor" required><br><br>

		<label for="telefono">precio:</label>
        <input type="text" id="email" name="precio" required><br><br>

		<div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name= "disponible">
      <option selected>si disponible</option>
      <option>no disponible</option>
    </select>
  </div> <br><br>

		<input type="submit" value="Enviar">
		<button><a href="mostar.php">Mostar datos</a></button>
	</form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


</body>
</html>