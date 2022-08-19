<?php 

    if (isset($_GET['pagina-pagina'])) {
        $nombrepagina = "BELMA | ".$_GET['pagina-pagina'];
    }else{
        $nombrepagina = "BELMA | Inicio";
    }

    //head de la pagina
    require "template/head.php";

    //menu de la pagina
    require "template/menu.php";

    if(empty($_GET['pagina-pagina'])){
        require "template/cuerpo-inicio.php";
    }else{
        if($_GET['pagina-pagina'] == "inicio"){
            require "template/cuerpo-inicio.php";
        }

        if($_GET['pagina-pagina'] == "nosotros" ||
           $_GET['pagina-pagina'] == "proyectos" ||
           $_GET['pagina-pagina'] == "contacto"
        )
        {
            require "secciones/".$_GET['pagina-pagina'].".php";
        }else{
            //header("Location: https://belma.kdonbox.com/errores/error404.php");
        }
    }

    //require "template/cuerpo-inicio.php";    

    //footer de la pagina
    require "template/footer.php";

?>