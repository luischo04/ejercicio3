<br>
<h1>Tabla listado por Apellidos</h1>

<form action="" method="post">
    <input type="text" name="idEmpleado" id="idEmpleado">
    <button type="submit">Buscar</button>
</form>

<table class="table">
		
	<thead>
			
		<tr>
			<th>idEmpleado</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Fecha de nacimiento</th>
		</tr>

	</thead>

	<tbody>

		<?php
			$mostrar = new EmpleadoC();
			$mostrar -> MostrarEmpleadosPorIdC();
		?>

	</tbody>

</table>