<?php
    class Modelo{
        static public function RutasModelo($rutas){
            if($rutas == "registrar" || $rutas == "listarPorApellidos" || $rutas == "buscarPorId" || $rutas == "listarPorEdad" || $rutas == "editar"){

                $pagina = "Views/Modulos/".$rutas.".php";

            }elseif($rutas == "index"){

                $pagina = "Views/Modulos/registrar.php";

            }else{

                $pagina = "Views/Modulos/registrar.php";

            }

            return $pagina;
        }
    }
?>