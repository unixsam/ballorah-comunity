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
        <link href="<?php echo base_url('assets/css/style.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/plugins/modernizr/modernizr.min.js'); ?>"></script>

    </head>
<body class="page-login">

			<div class="login-page"></div>
			<div class="clearfix"></div>
			<div class="wrapper-page">
					<div class="text-center">
						<div class="logo">
							<a href="index.html" title="Work PRO Dashboard">Work<span>PRO</span></a>
							<h5 class="text-muted">Rapid Workshop Managment System</h5>
						</div>

					</div>
<div class="container">
	<div class="row">
		<div class="col-md-4 well" style="margin-left: 15px;">
			<?php $attributes = array("name" => "signupform");
			echo form_open("user/register", $attributes);?>
			<legend>Signup</legend>

			<div class="form-group">
				<label for="name">First Name</label>
				<input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>

			<div class="form-group">
				<label for="name">Last Name</label>
				<input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>

			<div class="form-group">
				<label for="email">Email ID</label>
				<input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Password</label>
				<input class="form-control" name="password" placeholder="Password" type="password" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Confirm Password</label>
				<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 text-center" style="margin-bottom: 20px;">
		Already Registered? <a href="<?php echo base_url('user/login'); ?>">Login Here</a>
		</div>
	</div>
</div>


<?php echo $this->session->flashdata('msg'); ?>
<?php echo validation_errors(); ?>
</body>
</html>
