<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
    }
  if(isset($_SESSION['employe'])){

 ?>
 <!-- DataTables CSS library -->
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- DataTables JS library -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tabclasse').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax" :"getData.php"

        });

    });
</script>
<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header card-color">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Gestion des classes</p>
        </div>
        <div class="card-body container-fluid" >

                <table id="tabclasse"  class="display" style="width: 100%;">
                    <thead>
                        <tr class="text-uppercase bg-light">
                            <th scope="col">Id</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Filiere</th>
                        </tr>
                    </thead>
                    <tbody >

                    </tbody>
                </table>

    </div>
</div>
<script src="script/fonction.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
<style>
body {
    
    background-image: url("img/azer.jpg");
    
    color: #666;
    background-color: #f7f7f7;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.card-color {
    background-color: #6799fd;
    color: #ff7474;
}

.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #000000
    }

    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #ff0000;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #ff0015 !important;
}
</style>