<br>
<h1>Tabla listado por Apellidos</h1>

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
			$mostrar -> MostrarEmpleadosC();
		?>

	</tbody>

</table>