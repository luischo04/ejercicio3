<main>
        <div class="container">
            <h1 class="text-center">Registrar empleados</h1>
            <form class="form" method="POST" action="">
                <div class="col-12">
                    <label for="idEmpleado" class="form-label">Id</label>
                    <input type="text" class="form-control" id="idEmpleado" name="idEmpleadoR" >
                </div>
                <div class="col-12">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombreR">
                </div>
                <div class="col-12">
                    <label for="apePaterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apePaterno" name="apePaternoR">
                </div>
                <div class="col-12">
                    <label for="apeMaterno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apeMaterno" name="apeMaternoR">
                </div>
                <div class="col-12">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimientoR">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </main>

<?php $registrar = new EmpleadoC(); $registrar->RegistrarEmpleadoC(); ?>;