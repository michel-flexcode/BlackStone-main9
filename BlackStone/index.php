<!DOCTYPE html>
<?php

include("session_control/seguridad.php");
include("functions/traductor.php");
include("connection.php");

$section = "dashboard";
?>

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BackStone - Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/faces/black-stone-transaprent.png" />
  </head>
  <body>


    <div class="container-scroller">

    <?php
      include("nav.php");
    ?>
      

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/bs.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="<?php echo lang("Search Reports"); ?>">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" aria-expanded="false" href="insert_report.php">+ <?php echo lang("Create New Report");?> </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0"><?php echo lang("Messages");?></h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="https://microjoan.com/" target="_blank">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/microjoan.png" href="https://microjoan.com/" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">MicroJoan</p>
                      <p class="text-muted mb-0">  <?php echo lang("Now");?> </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item" href="future_news.php" target="_blank">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/news.png" href="future_news.php" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">System</p>
                      <p class="text-muted mb-0">  <?php echo lang("Now");?> </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/black-stone.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">blackstone9</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0"><?php echo lang("Profile");?></h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="editar_perfil.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"><?php echo lang("Settings"); ?></p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="cerrar_sesion.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"><?php echo lang("Log out"); ?></p>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">

            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5><?php echo lang("Recorded vulnerabilities"); ?></h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php

                          $sentencia = "select * from vulnerabilities";    
                          $consulta = mysqli_query($connection, $sentencia) or die("Error de conexión en tabla vulnerabilities");
                          $_vulnerabilities = 0;
                          //vamos a recorrer la consulta y guardar los datos 
                          while($file2= mysqli_fetch_array($consulta)){
                              $_vulnerabilities ++;
                          }

                          ?>
                          <h2 class="mb-0"><?php echo $_vulnerabilities;?></h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-bug text-primary ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5><?php echo lang("Registered companies"); ?></h5>
                    <div class="row">

                    <?php

                      $sentencia = "select * from companies";    
                      $consulta = mysqli_query($connection, $sentencia) or die("Error de conexión");
                      $_companies = 0;
                      //vamos a recorrer la consulta y guardar los datos 
                      while($file3= mysqli_fetch_array($consulta)){
                          $_companies ++;
                      }
                    ?>

                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $_companies; ?></h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-account-card-details text-danger ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">

                    <?php

                      $sentencia = "select * from reports";    
                      $consulta = mysqli_query($connection, $sentencia) or die("Error de conexión");
                      $_reports = 0;
                      //vamos a recorrer la consulta y guardar los datos 
                      while($file3= mysqli_fetch_array($consulta)){
                          $_reports ++;
                      }
                    ?>

                    <h5><?php echo lang("Reports made"); ?></h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $_reports; ?></h2>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-file-document-box text-success ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo lang("Vulns in database");?></h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>
                    <h4 class="card-title pt-5"><?php echo lang("Last two reports");?></h4>
                    <?php

                      $sentencia_infor = "select * from reports order by date limit 2";  
                      $consulta_infor = mysqli_query($connection, $sentencia_infor) or die("Error de conexión");
                      
                      $quantity_reports = 0;
                      $cantidad_vulnerabilities_report = 0;

                      while($file_infor = mysqli_fetch_array($consulta_infor)){

                        $id_infor=$file_infor['id'];
                        $vulnerabilities=$file_infor['vulnerabilities'];
                        $name_doc=$file_infor['name_doc'];
                        $date_proy=$file_infor['date'];
                        
                        $separador = ",";
                        $vulns_separadas = explode($separador, $vulnerabilities);//aqui obtenemos los id de cada una de las vulns del report
            
                        foreach ($vulns_separadas as $vuln){//obtenemos el id de la vulnerability

                          $cantidad_vulnerabilities_report ++;
                        }
                        
                        $date_texto = lang('Date:');
                        
                        echo "
                          <center>
                            <div class='d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3' style='background: #12151e; width:350px'>
                              <div class='text-md-center text-xl-left'>
                                <h6 class='mb-1'><a class='text-decoration-none text-white' href='edit_report.php?id=".$id_infor."'>".$name_doc."</a></h6>
                                <p class='text-muted mb-0'>".$date_texto." ".$date_proy."</p>
                              </div>
                              <div class='align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0'>
                                <h6 class='font-weight-bold mb-0'><i class='mdi mdi-file-document-box' style='font-size: 15pt; color: #ffab00;' ></i></h6>
                              </div>
                            </div>
                          </center>";
                      }
                    ?>
                  
                  </div>
                </div>
              </div>

              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1"><?php echo lang("Your clients"); ?></h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">


                            <?php
                              $sentencia = "select * from companies order by id";    
                              $consulta = mysqli_query($connection, $sentencia) or die("Error de conexión en tabla clientes");

                              //vamos a recorrer la consulta y guardar los datos 
                              while($file3= mysqli_fetch_array($consulta)){

                                  $id_company=$file3['id'];
                                  $name=$file3['name'];
                                  $web=$file3['web'];
                                  $logo=$file3['logo'];
                                
                                  if($logo > ''){
                                    $logo_listado = "<img src='".$logo."' style='border-radius:30px'>";
                                  }else{
                                    $logo_listado = "<img src='logos_clientes/bksnologo.jpg' style='border-radius:30px'>";
                                  }

                                  if($logo == "logos_clientes/"){
                                    $logo_listado = "<img src='logos_clientes/bksnologo.jpg' style='border-radius:30px'>";
                                  }

                                  
                                  $sentencia_infor = "select * from reports where audited_company_id=".$id_company;  
                                  $consulta_infor = mysqli_query($connection, $sentencia_infor) or die("Error de conexión");
                                  
                                  $vulnerabilities_scopes = 0;
                                  $quantity_reports = 0;

                                  while($file_infor = mysqli_fetch_array($consulta_infor)){
                                    $id_report=$file_infor['id'];
                                    $quantity_reports ++;
                                    
                                    $cantidad_objetivos_report = "select * from scope where id_report=".$id_report;  
                                    $consulta_objetivos_report = mysqli_query($connection, $cantidad_objetivos_report) or die("Error de conexión");
                                    
                                    while($file_scope = mysqli_fetch_array($consulta_objetivos_report)){
                                        $id_scope=$file_scope['id'];

                                        $cantidad_vulns_scope = "select * from scope_vulnerabilities where id_scope=".$id_scope;  
                                        $consulta_vulns_scope = mysqli_query($connection, $cantidad_vulns_scope) or die("Error de conexión");
                                    
                                        while($file_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){
                                          $id_scope=$file_vulns_scope['id'];

                                          $vulnerabilities_scopes ++;
                                        }
                                    }
                                  }

                                
                                  
                                  $vulnerabilities_encontradas = lang("Vulnerabilities found");

                                  echo $listado_clientes ="<div class='preview-item border-bottom'>
                                            <div class='preview-thumbnail'>
                                              <div class='preview-icon'>
                                                ".$logo_listado."
                                              </div>
                                            </div>
                                            <div class='preview-item-content d-sm-flex flex-grow'>
                                              <div class='flex-grow'>
                                                <h6 class='preview-subject'><a class='text-decoration-none text-white' href='editar_clientes.php?id=".$id_company."'>".$name."</a></h6>
                                                <p class='text-muted mb-0'>".$web."</p>
                                              </div>
                                              <div class='me-auto text-sm-right pt-2 pt-sm-0'>
                                                <p class='text-muted'>".$quantity_reports." ".lang("Reports made")."</p>
                                                <p class='text-muted mb-0'>".$vulnerabilities_scopes." ".$vulnerabilities_encontradas."</p>
                                              </div>
                                            </div>
                                          </div>";
                              }

                            ?>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>

          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <?php echo lang("Free Hacking reporting tool from ");?> <a href="https://microjoan.com/" target="_blank">MicroJoan</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <?php

            $sentencia_vulns = "select * from vulnerabilities";  
            $consulta_vulns = mysqli_query($connection, $sentencia_vulns) or die("Error de conexión");

            $total_vulns = 0;
            $total_bajas = 0;
            $total_medias = 0;
            $total_altas = 0;
            $total_muy_altas = 0;

            while($file_vulns = mysqli_fetch_array($consulta_vulns)){
                $total_vulns ++;

                $gravedad_vuln = $file_vulns['level'];

                if($gravedad_vuln == 1){
                  $total_bajas ++;
                }

                if($gravedad_vuln == 2){
                  $total_medias ++;
                }

                if($gravedad_vuln == 3){
                  $total_altas ++;
                }

                if($gravedad_vuln == 4){
                  $total_muy_altas ++;
                }
                
            }

            function obtenerPorcentaje($cantidad, $total) {
              $porcentaje = ((float)$cantidad * 100) / $total; // Regla de tres
              $porcentaje = round($porcentaje, 0);  // Quitar los decimales
              return $porcentaje;
            }

            $cantidad_bajas = obtenerPorcentaje($total_bajas, $total_vulns);
            $cantidad_medias = obtenerPorcentaje($total_medias, $total_vulns);
            $cantidad_altas = obtenerPorcentaje($total_altas, $total_vulns);
            $cantidad_muy_altas = obtenerPorcentaje($total_muy_altas, $total_vulns);

            echo "
            <script>
                    if ($('#transaction-history').length) {
                      var areaData = {
                        labels: ['".lang("Low")."', '".lang("Medium")."','".lang("High")."', '".lang("Very High")."'],
                        datasets: [{
                            data: [".$cantidad_bajas.", ".$cantidad_medias.", ".$cantidad_altas.", ".$cantidad_muy_altas."],
                            backgroundColor: [
                              '#0090e7','#00d25b','#ffab00', '#8f5fe8'
                            ]
                          }
                        ]
                      };
                      var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        segmentShowStroke: false,
                        cutoutPercentage: 70,
                        elements: {
                          arc: {
                              borderWidth: 0
                          }
                        },      
                        legend: {
                          display: false
                        },
                        tooltips: {
                          enabled: true
                        }
                      }
                      var transactionhistoryChartPlugins = {
                        beforeDraw: function(chart) {
                          var width = chart.chart.width,
                              height = chart.chart.height,
                              ctx = chart.chart.ctx;
                      
                          ctx.restore();
                          var fontSize = 1;
                          ctx.font = fontSize + 'rem sans-serif';
                          ctx.textAlign = 'left';
                          ctx.textBaseline = 'middle';
                          ctx.fillStyle = '#ffffff';
                      
                          var text = '', 
                              textX = Math.round((width - ctx.measureText(text).width) / 2),
                              textY = height / 2;
                      
                          ctx.fillText(text, textX, textY);

                          ctx.restore();
                          var fontSize = 0.75;
                          ctx.font = fontSize + 'rem sans-serif';
                          ctx.textAlign = 'left';
                          ctx.textBaseline = 'middle';
                          ctx.fillStyle = '#6c7293';

                          var texts = '', 
                              textsX = Math.round((width - ctx.measureText(text).width) / 1.92),
                              textsY = height / 1.7;
                      
                          ctx.fillText(texts, textsX, textsY);
                          ctx.save();
                        }
                      }
                      var transactionhistoryChartCanvas = $('#transaction-history').get(0).getContext('2d');
                      var transactionhistoryChart = new Chart(transactionhistoryChartCanvas, {
                        type: 'doughnut',
                        data: areaData,
                        options: areaOptions,
                        plugins: transactionhistoryChartPlugins
                      });
                    }
            </script>";

        
        ?>
  </body>
</html>