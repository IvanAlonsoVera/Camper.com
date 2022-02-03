<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="fondo img-fluid">
	<div class="container-fluid">
		<div class="container p-2">
			<nav class="nav nav-pills flex-column flex-sm-row bg-success p-2 text-white bg-opacity-75 rounded-3">
				<a class="menu flex-sm-fill text-sm-center nav-link" href="index.html"><img src="img/logo.png" width="30px"></a>
  				<a class="menu flex-sm-fill text-sm-center nav-link text-dark" href="html/alquiler.html">Alquiler</a>
  				<a class="menu flex-sm-fill text-sm-center nav-link text-dark" href="html/galeria.html">Galeria</a>
  				<a class="menu flex-sm-fill text-sm-center nav-link text-dark" href="html/conocenos.html">Conocenos</a>
			</nav>
		</div>
	</div>
	<form class="bg-success bg-opacity-75 rounded-3 container col-6 ">
		<div class="row m-3 ">
			<select class="p-3 m-3 col form-select form-select-lg mb-3" aria-label=".form-select-lg example">
				<option selected>Tipo de Vehiculo</option>
				<option value="car">Carretera</option>
				<option value="mix">Mixto</option>
				<option value="off">Offroad</option>
			</select>
			<select class="p-3 m-3 col form-select form-select-lg mb-3" aria-label=".form-select-lg example">
			<option selected>Ocupantes</option>
				<option value="car">Una persona</option>
				<option value="mix">Dos personas</option>
				<option value="off">Tres personas</option>
				<option value="off">Cuatro personas</option>
			</select>
		</div>
		<div class="row m-3">
            <input type="date" class="p-3 m-3 col rounded-3" name="Inicio"><label class="rounded-3 p-3 m-3 col text-center fecha" for="Inicio"> Entrada</label><br>
            <input type="date" class="p-3 m-3 col rounded-3" name="Final"><label class="rounded-3 p-3 m-3 col text-center fecha" for="Final"> Salida</label>
		</div>
		<div class="row m-3 p-3">
			<input type="submit" value="Buscar" class="boton ">
		</div>
	</form>
</body>
</html>
