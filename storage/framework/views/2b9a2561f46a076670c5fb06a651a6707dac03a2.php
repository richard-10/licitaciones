<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>



     <?php echo Html::style('css/bootstrap.css'); ?>



</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height: 77px; background: rgba(255, 255, 255, 0.65)">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="height: 70px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"> <img src="images/log.png" width="170"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menuR" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a style="color:black; font-weight: bold; font-size: 13px;" href="#" class="aR">INCOTEC</a>
                    </li>
                    <li>
                        <a style="font-family:Arial; color:black; font-weight: bold; font-size: 13px;" href="#">SERVICIOS</a>
                    </li>
                    <li>
                        <a style="color:black; font-weight: bold; font-size: 13px;" href="#">PRODUCTOS</a>
                    </li>
                     <li>
                        <a style="color:black; font-weight: bold; font-size: 13px;" href="#">GESTIÓN DE CONOCIMIENTO</a>
                    </li>
                    <li>
                        <a style="color:black; font-weight: bold; font-size: 13px;" href="#">CONTÁCTANOS</a>
                    </li>
                    <li class="active">
                        <a style="color:black; font-weight: bold; font-size: 13px;" href="#">PROVEEDOR</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> <br><br><br><br><br>


    <!-- Page Content -->
    <div class="container-fluid">





        <?php echo $__env->yieldContent('contenido'); ?>






        <!-- Footer -->
        <footer>

        </footer>

    </div>
    <!-- /.container -->










    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>


</body>

</html>
