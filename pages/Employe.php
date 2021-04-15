<?php
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
    }
  if(isset($_SESSION['employe'])){

 ?>
<div class="container-fluid">
    <div class="card bg-white" >
        <div class="card-header card-color">
            <p class="h2 text-center text-uppercase font-weight-bold pt-2">Gestion des Etudiants</p>
        </div>
        <div class="card-body container-fluid" >
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="cin"><strong><mark><em>cin</em></mark></strong> </label>
                    <input class="" type="text" id="id" hidden>
                    <input class="form-control" type="text" id="cin" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="nom"><strong><mark><em>nom</em></mark></strong> </label>
                    <input class="form-control" type="text" id="nom" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="prenom"><strong><mark><em>prenom</em></mark></strong> </label>
                    <input class="form-control" type="text" id="prenom" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="email"><strong><mark><em>email</em></mark></strong> </label>
                    <input class="form-control" type="email" id="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="telephone"><strong><mark><em>telephones</em></mark></strong></label>
                    <input class="form-control" type="tel" id="telephone" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="adresse"><strong><mark><em>adresses</em></mark></strong></label>
                    <input class="form-control" type="text" id="adresse" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="password"><strong><mark><em>password</em></mark></strong> </label>
                    <input class="form-control" type="password" id="password" required>

                </div>
                <div class="col-sm-6 mb-2">
                    <label for="role"><strong><mark><em>roles:</em></mark></strong> </label>
                    <input class="form-control" type="text" id="role" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <label for="departement"><strong><mark><em>filieres</em></mark></strong> </label>
                    <select id="departement" class="custom-select" ></select>
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="fonction"><strong><mark><em>classes:</em></mark></strong>   </label><br>
                    <select id="fonction" class="custom-select" ></select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="photo">Photo : </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" required>
                        <label class="custom-file-label" for="photo">Choose file...</label>
                    </div>
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
                            <th scope="col">Photo</th>
                            <th scope="col">Cin</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">classes</th>
                            <th scope="col">filieres</th>
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
<script src="script/employe.js" type="text/javascript"></script>
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
</style>
