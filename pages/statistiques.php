<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
  if(isset($_SESSION['employe'])){
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<canvas id="myChart" width="230" height="100"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                $.ajax({
                url: 'controller/gestionStatistique.php',
                        data: {op: ''},
                        type: 'POST',
                        success: function (data, textStatus, jqXHR) {
                                var x = Array();
                                var y = Array();
                                data.forEach(function (e) {
                                x.push(e.code);
                                        y.push(e.nbr);
                                });
                                showGraph(x, y);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus);
                        }
                });
                        var haha= [
                        'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                        ];
                function showGraph(x, y) {
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: x,
                            datasets: [{
                                    data: y,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                        },
                        options: {
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'right',
                                    labels: {
                                        generateLabels: function (chart) {
                                            return chart.data.labels.map(function (label, i) {
                                                return {
                                                    text: label,
                                                    fillStyle: haha[i],
                                                };
                                            });
                                        }
                                    }
                                },
                                title: {
                                    display: true,
                                    text: 'Nombre des classes par filière'
                                }
                            },
                            scales: {
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Nombre des classes'
                                    }
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Filière'
                                    }
                                }
                            }
                        }
                    });
                }
            </script>
<div class="container-fluid" style="margin-top: 5%;">
    <div class="">
        <p class="h2 text-center text-dark text-uppercase font-weight-bold"><em>CLASSES PAR FILIERES</em> </p>
        <hr class="line-seprate">
        
        <section class="statistic statistic2" >
              <h1>
                <div class="container" >
        
                    <div class="row" >
                     
                        
                        <a style="margin-left: 150px" href="./index.php?p=departement" class="col-md-6 col-lg-3">

                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">...</h2>
                                <span class="desc"><em><mark>FILIERES</mark></em></span>
                                <div class="icon">
                                    <i class="zmdi zmdi-group-work"></i>
                                </div>
                            </div>
                        </a>
                        
                        <a style="margin-left: 200px" href="./index.php?p=fonction" class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">...</h2>
                                <span class="desc"><mark><em>CLASSES</em></mark></span>
                                <div class="icon">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                            </div>

                               
                        </a>
                    </div>
                  
                </div>
          </h1>

            </section>

         
    </div>
</div>

 </div>                 
                                 



<script src="script/statistique.js" type="text/javascript"></script>
<?php
}
else{
  header("Location: ../index.php");
}
 ?>


<style>
.statistic__item--green {
    background: #00b26f;
}

.statistic__item--orange {
    background: aquamarine;
}

.statistic__item--blue {
    background: FloralWhite;
}

.statistic__item--red {
    background: #79532d;
}

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
* {

    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.text-dark {
    color: #ff4c0b!important;
}
</style>
