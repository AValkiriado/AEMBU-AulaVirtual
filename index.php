<?php
//comencem la sessio
 session_start();

 //Base de dades
include 'config.php';
$conectar = mysqli_connect($host,$user,$clave,$db);
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
//Si estàs loginat
if (isset($_SESSION['username'])) {
    $errorLogin = "";
    $username = $_SESSION['username'];
    //Consultem les dades de l'usuari email
    $consulta = mysqli_query($conectar,"SELECT nom, cognoms, dni, tutor_dni, imatge from Usuari where username = \"$username\"");
    $array = mysqli_fetch_assoc($consulta);
    $any='2022-2023';

    $_SESSION['nom']=$array['nom'];
    $id = $username;
    $_SESSION['cognoms']=$array['cognoms'];
    $_SESSION['dni']=$array['dni'];
    $_SESSION['tutor_dni']=$array['tutor_dni'];
    $_SESSION['imatge']=$array['imatge'];

    //Include per get
    if (isset($_GET['espai'])) $requested_page = $_GET['espai'];
    else  $requested_page = "home";


    switch($requested_page) {
        case "admin":
           if($_SESSION['tipo']!=3){ header("location: /index.php?espai=home");}
           switch($_GET['admin']) {
                case "classe":
                    include("template/adminClasse.php");
                    break;
                case "usuari":
                    include("template/adminUsuari.php");
                    break;
                case "grup":
                    include("template/adminGrup.php");
                    break;
                case "tramit":
                    include("template/adminTramit.php");
                    break;
                case "noticia":
                    include("template/adminNoticia.php");
                    break;
                case "esdeveniment":
                    include("template/adminEsdeveniment.php");
                    break;
                case "CreateEsdeveniment":
                    include("template/CreateEsdeveniment.php");
                    break;
                case "EsdevenimentToGrup":
                    include("template/EsdevenimentToGrup.php");
                    break;
                case "RemoveEsdevenimentToGrup":
                    include("template/RemoveEsdevenimentToGrup.php");
                    break;
                case "deleteEsdeveniment":
                    include("template/deleteEsdeveniment.php");
                    break;
                case "VeureEsdeveniments":
                    include("template/VeureEsdeveniments.php");
                    break;
                case "UsrToGrup":
                    include("template/UsrToGrup.php");
                    break;
                case "modUsr":
                    include("template/ModUsr.php");
                    break;
                case "CreateUsr":
                    include("template/CreateUsr.php");
                    break;
                case "CreateClasseInd":
                    include("template/crearclasseInd.php");
                    break;
                case "CreateClasseGrup":
                    include("template/CreateClasseGrup.php");
                    break;
                case "UsrToClass":
                    include("template/UsrToClass.php");
                    break;
                case "GrupToClass":
                    include("template/GrupToClass.php");
                    break;
                case "CreateEsdeveniment":
                    include("template/CreateEsdeveniment.php");
                    break;
                case "VeureClass":
                    include("template/VeureClass.php");
                    break;
                case "VeureUsuari":
                    include("template/VeureUsuari.php");
                    break;
                case "CreateGrup":
                    include("template/CreateGrup.php");
                    break;
                case "VeureGrup":
                    include("template/VeureGrup.php");
                    break;
                case "RemoveUsrToGrup":
                    include("template/RemoveUsrToGrup.php");
                    break;
                case "inventari":
                    include("template/inventari.php");
                    break;
                case "CreateInv":
                    include("template/CreateInv.php");
                    break;
                case "InvToUsr":
                    include("template/InvToUsr.php");
                    break;
                case "VeureInv":
                    include("template/VeureInv.php");
                    break;
                case "editarEsdeveniment":
                    include("template/editarEsdeveniment.php");
                    break;
                default:
                    include("template/Admin.php");
            }
            break;
        case "home":
            include("template/home.php");
            break;
        case "conf":
            include("template/confUser.php");
            break;
        case "selectImg":
            include("template/selectImage.php");
            break;
        case "imgClasse":
            include("template/imgClasse.php");
            break;
        case "classe":
            include("template/VistaClasse.php");
            break;
        case "editarClasse":
            include("template/EditaClasse.php");
            break;
        case "tramits":
            include("template/tramits.php");
            break;
        case "notificacions":
            include("template/notificacions.php");
            break;
        case "esdeveniment":
            include("template/esdeveniments.php");
            break;
        case "dretsideures":
            include("template/normesConsells.php");
            break;
        case "chpwd":
            include("template/chpwd.php");
            break;
        default:
            include("template/404.php");
    }
}
else if($_GET['espai']=="errorLogin"){
     $errorLogin = "dades incorrectes";
     include("template/login.php");
}
else {
    //Redirect a login
    include("template/login.php");
}
?>
