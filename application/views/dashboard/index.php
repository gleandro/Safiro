<?=$header?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>application/views/dashboard/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>application/views/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>application/views/dashboard/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>application/views/dashboard/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>application/views/dashboard/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

    <div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Safiro - Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i>
                            <b class="caret hidden-sm hidden-xs"></b>
                            <span class="notification hidden-sm hidden-xs">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Irvin Rodrigues ingreso un nuevo Incidente</a></li>
                            <li><a href="#">Giancarlo Culmino "COMPONENTE INACTIVO - SUPEMSA" de Karen Saavedra</a></li>
                            <li><a href="#">Kevin Culmino "INSTALACIÓN DE COMPONENTE REST - SUPEMSA" de Yasmina Lopez</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="display: initial;">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Estidistica de estado</h4>
                            <p class="category">Incidencias</p>
                        </div>
                        <div class="content">
                            <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                            <div class="footer">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Cerrado
                                    <i class="fa fa-circle text-danger"></i> Pendiente
                                    <i class="fa fa-circle text-warning"></i> Activo
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i>Historico
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="header col-md-12">
                            <h4 class="title col-md-10">Estadistica analista</h4>
                            <p class="category col-md-10">Mesa de ayuda</p>
                            <p>
                              <input type="checkbox" id="chk_rep_diario" />
                              <label for="chk_rep_diario">Inicidencias</label>
                          </p>
                      </div>
                      <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="legend_2">
                                <i class="fa fa-circle text-info"></i> Yasmina
                                <i class="fa fa-circle text-danger"></i> Irvin
                                <i class="fa fa-circle text-warning"></i> Karen
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i>Semana 2017/05/01 - 2017/05/08
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<a id="test" class="btn btn-primary text-danger" role="button">Button</a> 

</body>


<script src="<?php echo base_url(); ?>application/views/dashboard/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>application/views/dashboard/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>application/views/dashboard/assets/js/bootstrap-notify.js"></script>


<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->


<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>application/views/dashboard/assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){        
        demo.initChartist();
        demo.showNotification("danger","bottom","right");

        $("#test").click(function(event) {
            demo.initChartist(true,10);
        });

        $("#chk_rep_diario").click(function(event) {
            if ($(this).is(':checked')) {
                $html = '<i class="fa fa-circle text-info"></i> Giancarlo';
                $html +='<i class="fa fa-circle text-danger"></i> Alonso';
                $html +='<i class="fa fa-circle text-warning"></i> Alvaro';

                $data1=[0, 30, 49, 49, 85, 56, 40, 88, 80]
                $data2=[0, 20, 89, 19, 65, 56, 88, 58, 20]
                $data3=[0, 80, 49, 42, 15, 56, 64, 28, 40]
                $datas=[$data1,$data2,$data3]
                demo.initChartist(1,20,$datas);
            }else{
                $html = '<i class="fa fa-circle text-info"></i> Yasmina';
                $html +='<i class="fa fa-circle text-danger"></i> Irvin';
                $html +='<i class="fa fa-circle text-warning"></i> karen';
                demo.initChartist(1,62,null);
            }
            $(".legend_2").html($html);
        });

    });
</script>

</html>