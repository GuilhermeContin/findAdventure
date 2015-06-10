<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kids Control</title>
	<?php echo Asset::css(
        array(
            "bootstrap.min.css",
            "bootstrap-responsive.min.css",
            "theme.css",
        	"font-awesome.css"
        )
    ); ?>
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="<?= Uri::create("home/index"); ?>">
			  		Kids Control
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="#">
							Cadastre-se
						</a></li>

						

						<li><a href="#">
							Esqueceu sua senha?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="<?= Uri::create("login/do_login"); ?>" method="post">
						<div class="module-head">
							<h3>Conecte-se</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Conectar</button>
									<label class="checkbox">
										<input type="checkbox"> Lembrar de mim
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; <?= date("Y") ?> Kids Control </b> Todos direitos reservados.
		</div>
	</div>
	<?php echo Asset::js(
        array(
            "jquery-1.9.1.min.js",
            "jquery-ui-1.10.1.custom.min.js",
            "bootstrap.min.js"
        )
    ); ?>
</body>