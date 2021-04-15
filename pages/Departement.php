<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
  if(isset($_SESSION['employe'])){

 ?>
<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header card-color">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Gestion des filieres</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="code">Code : </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="text" id="code" required>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="libelle">Libelle : </label>
                    <input class="form-control" type="text" id="libelle" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-success mt-3 mb-3" id="btn">Ajouter</button>
                </div>
            </div>
            <div class="row table-responsive m-auto rounded">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-uppercase bg-light">
                            <th scope="col">Id</th>
                            <th scope="col">Code</th>
                            <th scope="col">Libelle</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col">Modifier</th>
                        </tr>
                    </thead>
                    <tbody id="table-content">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="script/departement.js" type="text/javascript"></script>
<?php

}else{
  header("Location: ../index.php");
}
 ?>
<style>
body {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.625;
    background-image: url("img/azer.jpg");
    
    color: #666;
    background-color: #f7f7f7;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.card-color {
    background-color: #73a0fb;
    color: #fe4141;
}


.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #000000;}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #fd0000;
}

</style>