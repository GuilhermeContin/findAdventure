<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kids Control</title>
        <?php echo Asset::css(
        array(
            "bootstrap.min.css",
            "bootstrap-responsive.min.css",
            "theme.css"
        )
    ); ?>
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?= Uri::create("home/index"); ?>">Kids Control </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Filhos
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Meu Perfil</a></li>
                                    <li><a href="#">Editar Perfil</a></li>
                                    <li><a href="#">Configurações da Conta</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Desconectar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                            	<li class="active"><a href="<?= Uri::create("home/index"); ?>"><i class="menu-icon fa fa-home fa-lg"></i>Home
                                </a></li>
                                <li><a href="<?= Uri::create("aplicativos/index"); ?>"><i class="menu-icon fa fa-android fa-lg"></i>Aplicativos
                                </a></li>
                               	<li><a href="<?= Uri::create("localizacao/index"); ?>"><i class="menu-icon fa fa-compass fa-lg"></i>Localiza&ccedil;&atilde;o</a>
                                </li>
                                <li><a href="#"><i class="menu-icon fa fa-whatsapp fa-lg"></i>WhatsApp <span class="badge pull-right btn-success">42</span> </a></li>
                                <li><a href="#"><i class="menu-icon fa fa-facebook fa-lg"></i>Facebook Messenger <span class="badge pull-right btn-primary">42</span> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; <?= date("Y") ?> Kids Control </b> Todos direitos reservados.
            </div>
        </div>
        <?php echo Asset::js(
        array(
            "jquery-1.9.1.min.js",
            "jquery-ui-1.10.1.custom.min.js",
            "bootstrap.min.js",
        	"flot/jquery.flot.js",
        	"flot/jquery.flot.resize.js",
        	"datatables/jquery.dataTables.js",
        	"common.js"
        )
    ); ?>
      
    </body>
