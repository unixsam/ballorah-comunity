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
<body>

	<body>
    <div class="row">&nbsp;</div>
    <div class="row">
      <div class="col-sm-12 text-center">
        <?php
        $hidden = array('username' => 'Joe', 'member_id' => '234');
        $attributes = array('class' => 'email', 'id' => 'myform');
        echo form_open('email/send', $attributes, $hidden);

        $data = array('name'  => 'John Doe','email' => 'john@example.com','url'   => 'http://example.com');
        echo form_hidden($data);

        $data = array(
          'name'      => 'username',
          'id'        => 'username',
          'value'     => 'johndoe',
          'maxlength' => '100',
          'size'      => '50',
          'style'     => 'width:50%'
        );
        echo form_input($data);

        echo form_password($data);

        echo form_upload($data);

        echo form_textarea($data);


        $attributes = array(
          'id'    => 'address_info',
          'class' => 'address_info'
        );

        echo form_fieldset('Address Information', $attributes);

        $data = array(
          'name'      => 'username',
          'size'      => '10',
          'style'     => 'width:30%',
          'id'        =>  "shirts",
          'onChange'  => "some_function()",
        );
        $options = array(
          'small'         => 'Small Shirt',
          'med'           => 'Medium Shirt',
          'large'         => 'Large Shirt',
          'xlarge'        => 'Extra Large Shirt',
        );

        $shirts_on_sale = array('small', 'large');
        echo "<br />";
        echo form_dropdown('shirts', $options, 'large');
        echo "<br />";
        echo form_dropdown('shirts', $options, $shirts_on_sale, $data);
        echo "<br />";
        echo form_multiselect('shirts', $options, $shirts_on_sale, $data);


        echo "<p>fieldset content here</p>\n";
        echo form_fieldset_close();


        $data = array(
        'name'          => 'newsletter',
        'id'            => 'newsletter',
        'value'         => 'accept',
        'checked'       => TRUE,
        'style'         => 'margin:10px',
        'onClick' => 'some_function();'
      );

      echo form_checkbox($data);
      echo "<br />";
      echo form_radio($data);

      $attributes = array(
        'class' => 'mycustomclass',
        'style' => 'color: #000;'
      );

      echo form_label('What is your Name', 'newsletter', $attributes);
      echo "<br />";
      echo form_submit('mysubmit', 'Submit Post!');
      echo "<br />";
      echo form_reset('reset', 'Reset form!');
      echo "<br />";
      $data = array(
        'name'          => 'button',
        'id'            => 'button',
        'value'         => 'true',
        'type'          => 'reset',
        'content'       => 'Reset button',
        'onClick'         => "some_function()"
      );
      echo form_button($data);
      echo "<br />";


        ?>
      </div>
    </div>
	</body>
</html>
