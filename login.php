<?php
session_start();
$message = "";
if (isset($_POST['btn_submit'])) {
    if ($_POST['email'] != '' && $_POST['password'] != '') {
        include_once 'beans/Employe.php';
        include_once 'services/EmployeService.php';
        $es = new EmployeService();
        $cin = $es->findByEmail($_POST['email']);
        $em = $es->findById($cin);
        if ($em->getPassword() == md5($_POST['password'])) {
            $_SESSION['employe'] = $em->getCin();
            $_SESSION['photo'] = $em->getPhoto();
            $_SESSION['nom'] = $em->getNom().' '.$em->getPrenom();
            $_SESSION['role'] = $em->getRole();
            $_SESSION['email'] = $em->getEmail();
            header('Location:./index.php');
        }
        else{
          header('Location:./login.php?error=invalid');
        }
    } else {
        header('Location:./login.php?error=vide');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title Page-->
        <title>GESTION CLASSES ET FILIERES - Login</title>

        <!-- Fontfaces CSS-->
        <link href="style/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="style/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="./">
                                    <span class="h2 text-dark" Style="color:red"><em>BIENVENUE</em></span>
                                </a>
                            </div>
                            <div class="login-form">
                              <?php
                                if(isset($_GET['error'])){
                                    if($_GET['error']=="invalid")
                                        echo '<div class="alert alert-danger" role="alert">Mote de passe ou Email incorrect!</div>';
                                    if($_GET['error']=="vide")
                                        echo '<div class="alert alert-danger" role="alert">Quelque champ est vide</div>';
                                }if(isset($_GET['success'])){
                                    if($_GET['success']=="verifyok")
                                        echo '<div class="alert alert-success" role="alert">Votre mot de passe est chang?? avec succ??s</div>';
                                }
                               ?>
                                <form action="" method="POST" id="checkLogin" >
                                    <div class="form-group">
                                        <label style="color:red">Adresse Email</label>
                                        <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label style="color:red">Password</label>
                                        <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login-checkbox float-right">
                                        <label>
                                            <a href="./forget.php">Mot de passe oubli???</a>
                                        </label>
                                    </div>
                                    <button id="connect" name="btn_submit" class="btn au-btn--block btn-outline-success" type="submit">Connexion</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>


        <!-- Main JS-->
        <script src="js/main.js"></script>
        <script src="script/main.js" type="text/javascript"></script>
    </body>

</html>
<!-- end document-->


<style>

.page-content--bge5 {
    background-image: url("img/ata.jpg");
    background-size : cover;
    
    height: 100vh;
}

.login-content {
    background-color: transparent;
    padding: 30px 30px 20px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}
.alert-danger {
    color: #ffffff;
    background-color: #827070 !important;
    border-color: #ff001b !important;
    
}
.alert {
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 3px dashed transparent;
    border-radius: .44rem;
}
.btn {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 33px;
}
.btn {
    
    border: 2px dotted #e2e2e2;
    }
.btn-outline-success {
    color: #000000;
}

background-color: transparent;



</style>
