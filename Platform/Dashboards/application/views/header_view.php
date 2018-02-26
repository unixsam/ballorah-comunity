<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured pro admin theme">
        <meta name="author" content="PHPTux">

        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

        <title><?php echo $title; ?></title>

        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <?php if($morris){ ?>
          <!--Morris Chart CSS -->
		      <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris/morris.css'); ?>">
        <?php } ?>
        <?php if(@$datepicker){ ?>
		<link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
		<?php } ?>

		<?php if(@$select2){ ?>
		<link href="<?php echo base_url('assets/plugins/select2/dist/css/select2.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/plugins/select2/dist/css/select2-bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <?php }?>

        <?php if(@$switchery){ ?>
        	<link href="<?php echo base_url('assets/plugins/switchery/switchery.min.css'); ?>" rel="stylesheet"  type="text/css"/>
		<?php }?>

		<?php if(@$custombox){ ?>
        	<link href="<?php echo base_url('assets/plugins/custombox/dist/custombox.min.css'); ?>" rel="stylesheet"  type="text/css"/>
		<?php }?>

        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/intl-tel-input/css/intlTelInput.css"'); ?>">
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

<body class="<?php echo $body_class; ?>">
  <!-- Begin page wrapper -->
  <div id="wrapper">
