<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured pro admin theme">
        <meta name="author" content="PHPTux">

        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

        <title>WorkPRO</title>

        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/ballorah.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/plugins/modernizr/modernizr.min.js'); ?>"></script>

    </head>
<body>

	<body class="page-login">

			<div class="login-page"></div>
			<div class="clearfix"></div>
			<div class="wrapper-page">
					<div class="text-center">
						<div class="logo">
							<a href="index.html" title="Ballorah">Ball<span>orah</span></a>
							<h5 class="text-muted">----</h5>
						</div>

					</div>
				<div class="widget">
							<div class="text-center">
									<h4 class="text-uppercase font-bold">Sign In</h4>
							</div>
							<div class="panel-body">
									<?php echo form_open("user/login", array("name" => "loginform", "class" => "form-horizontal"));?>
											<div class="form-group ">
													<div class="col-xs-12">
															<input class="form-control" name="email" required="" type="text" value="<?php echo set_value('email'); ?>" placeholder="Email" />
													</div>
											</div>

											<div class="form-group">
													<div class="col-xs-12">
															<input class="form-control" name="password" required="" type="password" value="<?php echo set_value('password'); ?>" placeholder="Password" />
													</div>
											</div>



											<div class="form-group text-center ">
													<div class="col-xs-12">
															<button class="btn btn-custom btn-bordred btn-block" type="submit">Login</button>
													</div>
											</div>

											<div class="form-group">
													<div class="col-sm-12">
															<a href="<?php echo base_url('user/forgot'); ?>" class="text-muted"><i class="fa fa-lock "></i> Forgot your password?</a>
													</div>
											</div>
									<?php echo form_close(); ?>

							</div>
					</div>
					<!-- end card-box-->

					<div class="row">
							<div class="col-sm-12 text-center">
									<p class="text-muted">Don't have an account? <a href="<?php echo base_url('user/register'); ?>" class="text-primary m-l-5"><b>Register Now</b></a></p>
							</div>
					</div>

			</div>
			<?php echo $this->session->flashdata('msg'); ?>
			<?php echo validation_errors(); ?>
			<!-- end wrapper page -->
	</body>
</html>
