<?php
if($action=='add'){
	if(set_value('type')){
		$type = set_value('type');
	}
  $key = $type;
  $bc= 'Add Customers';
}

if($action == 'edit'){
  $key = $data['id'];
  $bc= 'Edit Customers';
}
if(@$data['type']){
  $type = $data['type'];
}
if($action == 'save'){
  $action = 'add';
  $type = set_value('type');
  $key = $type;
}
?>
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                <a href="<?php echo base_url('customers'); ?>">List Customers</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                <?php echo $bc; ?>
                <i class="icon-angle-right"></i>
              </li>
              <li class="pull-right no-text-shadow" style="display: none">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change calendar date range">
                  <i class="icon-calendar"></i> <span></span> <i class="icon-angle-down"></i>
                </div>
              </li>
            </ul>


            <!-- BEGIN FORM-->
              <?php
                $attributes = array(
                  "name" => "customer",
                  "method" => "post",
                  "autocomplete" => "off",
                  "accept-charset" => "utf-8",
                );
                echo form_open_multipart("customers/".$action."/".$key."/save", $attributes);
              ?>
			<div class="row">

          <div class="col-lg-12">
            <?php echo $this->session->flashdata('msg'); ?>
    			   <?php echo validation_errors(); ?>
              <button class="btn btn-turquoise pull-right" type="submit">Save</button>
              <button class="btn btn-danger pull-right" type="reset">Reset</button>
			  	</div>
			</div>
			<div class="row">
              <div class="col-lg-12">
                <div class="widget widget-auto">
                <h4 class="header-title">Customer Details</h4>
                <div class="row">
                  <?php if($type==1 || $type==0){?>
                	<div class="col-lg-12">
                		<input type="checkbox" name="is_driver"  id="is_driver" value="1" data-plugin="switchery" data-color="#00b19d" data-size="small" <?php echo (@$data['is_driver']==1)? "checked": ''; ?> <?php echo set_checkbox('is_driver', '1'); ?> />
                		<?php echo form_label('Is Driver?', 'is_driver'); ?>
                	</div>
                  <?php }else{
                    echo form_hidden('is_driver', 0);
                  }?>
                	<div class="field-col col-lg-6">
                	<?php if($type==1 || $type==0){?>
                		<div class="col-lg-2 nopadding">
	                		<?php
	                		echo form_label('Title', 'title');

	                		$attr = array(
	                				'class'            => 'form-control select2'
	                		);

                      if(set_value('title')){
                        $title_default = set_value('title');
                      }elseif(@$data['title']){
                        $title_default = $data['title'];
                      }else{
                        $title_default = '1';
                      }
							        echo form_dropdown('title', $title, $title_default,$attr);

	                		?>
                		</div>
                		<?php }else{
                			echo form_hidden('title', 0);
                		}?>
                		<div class="<?php echo (($type==1 || $type==0) ? 'col-lg-10' : 'col-lg-12');?> nopadding">
	                		<?php
	                		echo form_label('Name', 'name');
                      if(set_value('name')){
                        $name_default = set_value('name');
                      }elseif(@$data['name']){
                        $name_default = $data['name'];
                      }else{
                        $name_default = '';
                      }
	                		$name_data = array(
  							        'name'          => 'name',
  							        'id'            => 'name',
  							        'value'         => $name_default,
                        'placeholder'   => 'Name',
  							        'maxlength'     => '50',
  							        'size'          => '',
  							        'style'         => '',
                        'class'         =>  'form-control',
                      );

							        echo form_input($name_data );

	                		?>
                		</div>
                	</div>


					<?php if($type==1 || $type==0){?>
					<div class="field-col col-lg-3">
                		<?php
                		echo form_label('Gender', 'gender');
                		$options = array(
                				'1'         => 'Male',
                				'2'        => 'Female',
                		);

                		$attr = array(

                				'class'            => 'form-control select2'
                		);
                    if(set_value('gender')){
                      $gender_default = set_value('gender');
                    }elseif(@$data['gender']){
                      $gender_default = $data['gender'];
                    }else{
                      $gender_default = '1';
                    }
                		echo form_dropdown('gender', $options, $gender_default,$attr);

                		?>
                	</div>
                	<?php }else{
                		echo form_hidden('gender', 0);
                	}?>
                	<?php if($type==2 || $type==3 || $type==0){?>
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('Company Registration No.', 'company_reg_no');
                    if(set_value('company_reg_no')){
                      $company_reg_no_default = set_value('company_reg_no');
                    }elseif(@$data['company_reg_no']){
                      $company_reg_no_default = $data['company_reg_no'];
                    }else{
                      $company_reg_no_default = '';
                    }
                		$company_reg_no_data = array(
						        'name'          => 'company_reg_no',
						        'id'            => 'company_reg_no',
						        'value'         => $company_reg_no_default,
                    'placeholder'   => 'Company Registration No.',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                    'class'         =>  'form-control',
						);

						echo form_input($company_reg_no_data);

                		?>
                	</div>
                	<?php }else{
                		echo form_hidden('company_reg_no', 0);
                	}?>

                	<?php if($type==1 || $type==0){?>
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('Nationality', 'nationality');

                		$attr = array(
                				'class'            => 'form-control select2'
                		);
                    if(set_value('nationality')){
                      $nationalities_default = set_value('nationality');
                    }elseif(@$data['nationality']){
                      $nationalities_default = $data['nationality'];
                    }else{
                      $nationalities_default = 'QA';
                    }
						        echo form_dropdown('nationality', $nationalities, $nationalities_default,$attr);

                		?>
                	</div>
                	<?php }else{
                		echo form_hidden('nationality', 0);
                	}?>

                  <div class="field-col <?php echo ($type==4 ? 'col-lg-6' : 'col-lg-3');?>">
                		<?php
                  		echo form_label('Email', 'email');
                      $email_default = '';
                      if(set_value('email')){
                        $email_default = set_value('email');
                      }


                      if(@$data['email']){
                        $email_default = $data['email'];
                      }
                  		$email_data = array(
                        'name'          => 'email',
                        'id'            => 'Email',
                        'value'         => $email_default,
                        'placeholder'   => 'email@company.com',
                        'maxlength'     => '50',
                        'size'          => '',
                        'style'         => '',
                        'class'         =>  'form-control',
                      );

                    echo form_input($email_data);

                  ?>
                	</div>
                	<div class="field-col col-lg-3">
	                	<?php echo form_label('Phone', 'phone');?>
                    <?php
                    if(set_value('phone')){
                      $phone_default = set_value('phone');
                    }elseif(@$data['phone']){
                      $phone_default = $data['phone'];
                    }else{
                      $phone_default = '';
                    }
                     ?>
                		<input id="phone_sel" name="phone_sel" type="tel" class="phone form-control" placeholder="000000000" value="<?php echo $phone_default ?>" />
                    <input id="phone" name="phone" type="hidden" value="<?php echo $phone_default ?>"/>
                  </div>

                	<div class="field-col col-lg-3">
	                	<?php echo form_label('Fax', 'fax_no'); ?>
                    <?php
                    if(set_value('fax_no')){
                      $fax_no_default = set_value('fax_no');
                    }elseif(@$data['fax_no']){
                      $fax_no_default = $data['fax_no'];
                    }else{
                      $fax_no_default = '';
                    }
                     ?>
                		<input id="fax_no_sel" name="fax_no_sel" type="tel" class="phone form-control" placeholder="000000000" value="<?php echo $fax_no_default ?>" />
                    <input id="fax_no" name="fax_no" type="hidden" value="<?php echo $fax_no_default ?>"/>
                	</div>

                	<div class="field-col col-lg-3">
	                	<?php echo form_label('Mobile', 'mobile'); ?>
                    <?php
                    if(set_value('mobile')){
                      $mobile_default = set_value('mobile');
                    }elseif(@$data['mobile']){
                      $mobile_default = $data['mobile'];
                    }else{
                      $mobile_default = '';
                    }
                     ?>
                		<input id="mobile_sel" name="mobile_sel" type="tel" class="phone form-control" placeholder="000000000" value="<?php echo $mobile_default ?>"/>
                    <input id="mobile" name="mobile" type="hidden" value="<?php echo $mobile_default ?>"/>
                	</div>



                	<?php if($type==1 || $type==0){?>
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('RP/ID/Passport', 'rp_id_passport_no');

                    if(set_value('rp_id_passport_no')){
                      $rp_id_passport_no_default = set_value('rp_id_passport_no');
                    }elseif(@$data['rp_id_passport_no']){
                      $rp_id_passport_no_default = $data['rp_id_passport_no'];
                    }else{
                      $rp_id_passport_no_default = '';
                    }

                		$rp_id_passport_no_data = array(
						        'name'          => 'rp_id_passport_no',
						        'id'            => 'rp_id_passport_no',
						        'value'         => $rp_id_passport_no_default,
                		'placeholder'   => 'rp_id_passport_no',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                		'class'         =>  'form-control',
						);

						echo form_input($rp_id_passport_no_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3 col-md-6 col-md-3 ">
            			<?php
            				echo form_label('date_of_birth', 'date_of_birth');

                    if(set_value('date_of_birth')){
                      $date_of_birth_default = set_value('date_of_birth');
                    }elseif(@$data['date_of_birth'] && @$data['date_of_birth'] !='0000-00-00 00:00:00'){
                      $date_of_birth_default = nice_date($data['date_of_birth'], 'd/m/Y');
                    }else{
                      $date_of_birth_default = '';
                    }

                      		$date_of_birth_data = array(
		                        'name'        => 'date_of_birth',
		                        'class'       =>  'form-control datepicker',
		                        'id'          => 'date_of_birth',
		                        'value'       => $date_of_birth_default,
		                        'placeholder' => 'DD/MM/YYY',
		                        'size'        => '',
		                        'style'       => '',
								            'onClick'     => ''
							);

							echo form_input($date_of_birth_data);
						?>

					</div>

					<div class="field-col col-lg-3">
                		<?php
                		echo form_label('driving_license_no', 'driving_license_no');

                    if(set_value('driving_license_no')){
                      $driving_license_no_default = set_value('driving_license_no');
                    }elseif(@$data['driving_license_no']){
                      $driving_license_no_default = $data['driving_license_no'];
                    }else{
                      $driving_license_no_default = '';
                    }

                		$driving_license_no_data = array(
						        'name'          => 'driving_license_no',
						        'id'            => 'driving_license_no',
						        'value'         => $driving_license_no_default,
                		'placeholder'   => 'driving_license_no',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                		'class'         =>  'form-control',
						);

						echo form_input($driving_license_no_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('class_of_license', 'class_of_license');

                    if(set_value('class_of_license')){
                      $class_of_license_default = set_value('class_of_license');
                    }elseif(@$data['class_of_license']){
                      $class_of_license_default = $data['class_of_license'];
                    }else{
                      $class_of_license_default = '';
                    }

                		$class_of_license_data = array(
                      'name'          => 'class_of_license',
						          'id'            => 'class_of_license',
                      'value'         => $class_of_license_default,
                      'placeholder'   => 'class_of_license',
                      'maxlength'     => '100',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

                    echo form_input($class_of_license_data);

                		?>
                	</div>
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('Passing Date', 'passing_date');

                    if(set_value('passing_date')){
                      $passing_date_default = set_value('passing_date');
                    }elseif(@$data['passing_date'] && @$data['passing_date'] !='0000-00-00 00:00:00'){
                      $passing_date_default = nice_date($data['passing_date'], 'd/m/Y');

                    }else{
                      $passing_date_default = '';
                    }

                		$passing_date_data = array(
						        'name'          => 'passing_date',
						        'id'            => 'passing_date',
						        'value'         => $passing_date_default,
                				'placeholder'   => 'DD/MM/YYY',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($passing_date_data);

                		?>
                	</div>
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('Type of license', 'type_of_license');

                    if(set_value('type_of_license')){
                      $type_of_license_default = set_value('type_of_license');
                    }elseif(@$data['type_of_license']){
                      $type_of_license_default = $data['type_of_license'];
                    }else{
                      $type_of_license_default = '';
                    }

                		$type_of_license_data = array(
						        'name'          => 'type_of_license',
						        'id'            => 'type_of_license',
						        'value'         => $type_of_license_default,
                    'placeholder'   => 'type_of_license',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                    'class'         =>  'form-control',
						);

						echo form_input($type_of_license_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3 col-md-6 col-md-3 ">
            			<?php
            				echo form_label('Expiry Date', 'expiry_date');

                    if(set_value('expiry_date')){
                      $expiry_date_default = set_value('expiry_date');
                    }elseif(@$data['expiry_date'] && @$data['expiry_date'] !='0000-00-00 00:00:00'){

                      $expiry_date_default = nice_date($data['expiry_date'], 'd/m/Y');
                    }else{
                      $expiry_date_default = '';
                    }

                      		$expiry_date_data = array(
		                        'name'        => 'expiry_date',
		                        'class'       =>  'form-control datepicker',
		                        'id'          => 'expiry_date',
		                        'value'       => $expiry_date_default,
		                        'placeholder' => 'DD/MM/YYY',
		                        'size'        => '',
		                        'style'       => '',
								'onClick'     => ''
							);

							echo form_input($expiry_date_data);
						?>

					</div>
					<?php }else{
                		echo form_hidden('rp_id_passport_no', 0);
                		echo form_hidden('date_of_birth', Null);
                		echo form_hidden('class_of_license', 0);
                		echo form_hidden('type_of_license', 0);
                		echo form_hidden('expiry_date', Null);
                	}?>
                  <?php if($type!=4){?>


					<div class="field-col col-lg-3">
                		<?php
                		echo form_label('delivery_option', 'delivery_option');

                    if(set_value('delivery_option')){
                      $delivery_option_default = set_value('delivery_option');
                    }elseif(@$data['delivery_option']){
                      $delivery_option_default = $data['delivery_option'];
                    }else{
                      $delivery_option_default = '';
                    }

                		$delivery_option_data = array(
                      'name'          => 'delivery_option',
                      'id'            => 'delivery_option',
                      'value'         => $delivery_option_default,
                      'placeholder'   => 'delivery_option',
                      'maxlength'     => '100',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

                    echo form_input($delivery_option_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('delivery_type', 'delivery_type');

                    if(set_value('delivery_type')){
                      $delivery_type_default = set_value('delivery_type');
                    }elseif(@$data['delivery_type']){
                      $delivery_type_default = $data['delivery_type'];
                    }else{
                      $delivery_type_default = '';
                    }

                		$delivery_type_data = array(
  						        'name'          => 'delivery_type',
  						        'id'            => 'delivery_type',
  						        'value'         => $delivery_type_default,
                      'placeholder'   => 'delivery_type',
                      'maxlength'     => '100',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($delivery_type_data);

                		?>
                	</div>
                  <?php }else{
                        		echo form_hidden('delivery_option', 0);
                        		echo form_hidden('delivery_type', 0);
                        	}?>

				</div>
			</div>
		</div>
	</div>
    <div class="row">
		<div class="col-lg-12">
			<div class="widget widget-auto">
				<h4 class="header-title">Address Detail</h4>
                <div class="row">
                	<div class="col-lg-12">
                		<?php
                		echo form_label('address', 'address');

                		$address_data = array(
						        'name'          => 'address',
						        'id'            => 'address',
						        'value'         => '',
                				'placeholder'   => 'address',
                				'cols'			=>	'40',
                				'rows'			=>	'3',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_textarea($address_data);

                		?>
                	</div>
                </div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="widget widget-auto">
				<h4 class="header-title">Accounting Detail</h4>
                <div class="row">
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('account_code', 'account_code');

                		$account_code_data = array(
						        'name'          => 'account_code',
						        'id'            => 'account_code',
						        'value'         => '',
                				'placeholder'   => 'account_code',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($account_code_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('payment_term', 'payment_term');

                		$payment_term_data = array(
						        'name'          => 'payment_term',
						        'id'            => 'payment_term',
						        'value'         => '',
                				'placeholder'   => 'payment_term',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($payment_term_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('credit_limit', 'credit_limit');

                		$credit_limit_data = array(
						        'name'          => 'credit_limit',
						        'id'            => 'credit_limit',
						        'value'         => '',
                				'placeholder'   => 'credit_limit',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($credit_limit_data);

                		?>
                	</div>

             		<div class="field-col col-lg-3">
                		<?php
                		echo form_label('ar_account', 'ar_account');

                		$ar_account_data = array(
						        'name'          => 'ar_account',
						        'id'            => 'ar_account',
						        'value'         => '',
                				'placeholder'   => 'ar_account',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($ar_account_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('default_tax_type', 'default_tax_type');

                		$default_tax_type_data = array(
						        'name'          => 'default_tax_type',
						        'id'            => 'default_tax_type',
						        'value'         => '',
                				'placeholder'   => 'default_tax_type',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($default_tax_type_data);

                		?>
                	</div>

                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('billing_address', 'billing_address');

                		$billing_address_data = array(
						        'name'          => 'billing_address',
						        'id'            => 'billing_address',
						        'value'         => '',
                				'placeholder'   => 'billing_address',
						        'maxlength'     => '100',
						        'size'          => '',
						        'style'         => '',
                				'class'         =>  'form-control',
						);

						echo form_input($billing_address_data);

                		?>
                	</div>

                </div>
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-lg-12">
              		<?php
              			echo form_hidden('type', $type);
              			echo form_hidden('code', 0);
              		?>
                	<button class="btn btn-turquoise pull-right" type="submit">Save</button>
                	<button class="btn btn-danger pull-right" type="reset">Reset</button>
			  </div>
			</div>
          <?php echo form_close(); ?>
          </div>
          <!-- Main Container End -->
