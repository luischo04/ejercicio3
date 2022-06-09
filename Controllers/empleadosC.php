<?php
    class EmpleadoC{

        //Registrar empleados
        function RegistrarEmpleadoC(){
            if(isset($_POST["nombreR"])){
                $datosC = array("idEmpleado"=>$_POST["idEmpleadoR"], "nombre"=>$_POST["nombreR"], "apePaterno"=>$_POST["apePaternoR"], "apeMaterno"=>$_POST["apeMaternoR"], "fechaNacimiento"=>$_POST["fechaNacimientoR"]);

                $tablaBD = "empleados";
                $respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

                if($respuesta == "Bien"){
                    header("location:index.php");
                }else{
                    echo "Error";
                }
            }
        }
        //Mostrar empleados
        public function MostrarEmpleadosC(){

            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

            foreach ($respuesta as $key => $value) {
                echo '<tr>
                        <td>'.$value["idEmpleado"].'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["apePaterno"]. " " . $value["apeMaterno"].'</td>
                        <td>'.$value["fechaNacimiento"].'</td>
                    </tr>';
            }
        }

        //Mostrar empleados
        public function MostrarEmpleadosPorEdadC(){

            $tablaBD = "empleados";
            $respuesta = EmpleadosM::MostrarEmpleadosPorEdadM($tablaBD);

            foreach ($respuesta as $key => $value) {
                echo '<tr>
                        <td>'.$value["idEmpleado"].'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["apePaterno"]. " " . $value["apeMaterno"].'</td>
                        <td>'.$value["fechaNacimiento"].'</td>
                        <td>'.$value["edad"].'</td>
                    </tr>';
            }
        }

        public function MostrarEmpleadosPorIdC(){
            if(isset($_POST["idEmpleado"])){
                $idEmpleado = $_POST["idEmpleado"];
                $tablaBD = "empleados";
                $respuesta = EmpleadosM::MostrarEmpleadosPorIdM($tablaBD, $idEmpleado);

                foreach ($respuesta as $key => $value) {
                    echo '<tr>
                            <td>'.$value["idEmpleado"].'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>'.$value["apePaterno"]. " " . $value["apeMaterno"].'</td>
                            <td>'.$value["fechaNacimiento"].'</td>
                        </tr>';
                }
            }
        }
    }
?>