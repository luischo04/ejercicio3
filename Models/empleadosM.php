<?php
    require_once "conexionBD.php";

    class EmpleadosM extends Conexion{

        //Registrar empleados
        static public function RegistrarEmpleadosM($datosC, $tablaBD){
            $pdo = Conexion::cBD()->prepare("INSERT INTO $tablaBD(idEmpleado,nombre,apePaterno,apeMaterno,fechaNacimiento) VALUES(:idEmpleado,:nombre,:apePaterno,:apeMaterno,:fechaNacimiento)");

            $pdo -> bindParam(":idEmpleado", $datosC["idEmpleado"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apePaterno", $datosC["apePaterno"], PDO::PARAM_STR);
            $pdo -> bindParam(":apeMaterno", $datosC["apeMaterno"], PDO::PARAM_STR);
            $pdo -> bindParam(":fechaNacimiento", $datosC["fechaNacimiento"], PDO::PARAM_STR);
            
            if($pdo -> execute()){
                return "Bien";
            }else {
                return "Error";
            }

            $pdo -> close();
        }

        static public function MostrarEmpleadosM($tablaBD){
            $pdo = Conexion::cBD()->prepare("SELECT idEmpleado,nombre,apePaterno,apeMaterno, fechaNacimiento FROM $tablaBD ORDER BY apePaterno ");

            $pdo -> execute();

            return $pdo -> fetchAll();

            $pdo -> close();
        }

        //Mostrar empleados
        static public function MostrarEmpleadosPorEdadM($tablaBD){
            $pdo = Conexion::cBD()->prepare("SELECT idEmpleado,nombre,apePaterno,apeMaterno, fechaNacimiento, TIMESTAMPDIFF(YEAR, fechaNacimiento ,CURDATE()) AS edad FROM $tablaBD ORDER BY edad ");

            $pdo -> execute();

            return $pdo -> fetchAll();

            $pdo -> close();
        }

        //Mostrar empleados
        static public function MostrarEmpleadosPorIdM($tablaBD, $idEmpleado){
            $pdo = Conexion::cBD()->prepare("SELECT idEmpleado,nombre,apePaterno,apeMaterno, fechaNacimiento FROM $tablaBD WHERE idEmpleado = $idEmpleado");
            $pdo -> execute();

            return $pdo -> fetchAll();

            $pdo -> close();
        }
    }
?>