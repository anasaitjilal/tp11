<?php
if(session_status() != PHP_SESSION_ACTIVE) {
session_start();
}
if ($_SESSION["employe"]) {
    if ($_SESSION['role'] == "Admin") {
?>
<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <title>Gestion Pointage</title>

    <link rel='stylesheet' href='vendor/bootstrap-4.1/bootstrap.min.css'>
    <link rel='stylesheet' href='vendor/font-awesome-5/css/fontawesome-all.min.css'>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/theme.css">
    <link rel="stylesheet" href="style/main.css">
   

   


    <script src='vendor/jquery-3.2.1.min.js'></script>
    <script src='vendor/bootstrap-4.1/popper.min.js'></script>
    <script src='vendor/bootstrap-4.1/bootstrap.min.js'></script>
</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="./" class="h2 pt-2" Style="color:#d6fdff" align="center"><em>MENU</em></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                            src="img/<?php if (isset($_SESSION['photo'])) {
                                        echo $_SESSION['photo'];
                                        } else
                                            echo 'no-photo.png'
                                        ?>"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php
                                        if (isset($_SESSION['nom'])) {
                                            echo $_SESSION['nom'];
                                        }
                                    ?></strong>
                        </span>
                        <span class="user-role"><?php
                                        if (isset($_SESSION['role'])) {
                                            echo $_SESSION['role'];
                                        }
                                    ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>EN LIGNE</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->

                <!-- sidebar-search  -->
                <br/>
                <br/>
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            
                        </li>
                        
                                              
                        <li>
                         <p Style="Font: 18px Verdana; font-weight:italic ; color :#ff4200;"><em>GESTION DES FILIERES ET DES ETUDIANTS</mark></p>
                         </li> 
                         <br/>
                        <table > 
                         <tr> 
                         <td>*******</td>   

                        <td>
                            <a href="./index.php?p=departement" ><i class="zmdi zmdi-hc-1x zmdi-group-work"></i >filieres</a>
                        </td>
                        <td>*****</td>
                        <td>
                            <a href="./index.php?p=fonction"><i class="zmdi zmdi-hc-1x zmdi-settings"></i>classes</a>
                        </td>
                        </tr>
                        <a href="./index.php?p=classe"><i class="zmdi zmdi-hc-1x zmdi-settings"></i>Chercher classes</a>
                       </table>

                        <br/> 
                        <li class="header-menu">
                            <span Style="Font: 18px Verdana; font-weight:italic;color :#ff4200;"><em>          STATISTIQUES</em> </span>
                        </li>
                        <br/>
                        <li>
                            <a href="./index.php?p=statistiques"><i class="zmdi zmdi-hc-1x zmdi-group-work"></i>Classes par filieres </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="./logout.php">
                    <i class="fa fa-power-off"></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid" id="main-content">

                <?php
                    if( isset($_GET['p']) && $_GET['p'] != ""){
                        if($_GET['p']=="departement"){
                            include_once './pages/departement.php';
                        }elseif ($_GET['p']=="employe"){
                            include_once './pages/employe.php';
                        }elseif($_GET['p']=="fonction"){
                            include_once './pages/Fonction.php';
                        }elseif($_GET['p']=="classe"){
                            include_once './pages/Classe.php';
                        }elseif($_GET['p']=="pointage"){
                            include_once './pages/Pointage.php';
                        }elseif($_GET['p']=="historique"){
                            include_once './pages/historique.php';
                        }elseif($_GET['p']=="statistiques"){
                            include_once './pages/statistiques.php';
                        }
                    }else{
                        include_once './pages/statistiques.php';
                    }
                ?>
            </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="script/index.js"></script>

</body>
</html>
<?php
    } else {
        include_once './pages/HistoriqueSimple.php';
    }
} else {
    header('Location:./login.php');
}
?>

<style>  
.chiller-theme .sidebar-wrapper {
    background: #f3fd92;
    background-image: url("img/sara.jpeg");
    background-size : cover;
    
}
.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
.chiller-theme .sidebar-wrapper .sidebar-brand>a,
.chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
.chiller-theme .sidebar-footer>a {
    color: #007bff;
}
.sidebar-wrapper {
    width: 260px;
    height: 100%;
    /* max-height: 100%; */
    position: bottom;
    top: 0;
    left: -300px;
    z-index: 999;
    border-radius: 44px;
}
.page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #ff0000;
}
.sidebar-wrapper .sidebar-brand {
    padding: 10px 20px;
    display: grid;
    align-items: center;
}


</style>