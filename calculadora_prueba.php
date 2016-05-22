<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>

	<header><h1>Calculadora</h1></header>

	<section id="Formulario">
		
		<form action="procesar.php" method="post" name="form">


			<input type="text" name="nom" placeholder="Nombre..">
			<br>
			<input type="text" name="ape" placeholder="Apellido..">
			<br>
			<fieldset>
				<legend>Operacion:</legend>
				<label>
				Suma
				<input type="radio" name="op" value="1">
				</label>
				<br>
				<label>
				Resta
				<input type="radio" name="op" value="2">
				</label>
				<br/>
				<label>
				Multiplicacion
				<input type="radio" name="op" value="3">
				</label>
				<br>
				<label>
				Division
				<input type="radio" name="op" value="4">
				</label>
			</fieldset>
			<br>
			<input type="submit" value="Calcular">
			
		</form>

	</section>

</body>
</html>
