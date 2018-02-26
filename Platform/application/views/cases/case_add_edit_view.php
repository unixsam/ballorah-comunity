<?php
if($action=='add'){
  $key = $type;
}

if($action == 'edit'){
  $key = $data['id'];
}
if(@$data['type']){
  $type = $data['type'];
}
if($action == 'save'){
	$action = 'add';
}

?>

            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                <a href="<?php echo base_url('cases'); ?>">List Cases</a>
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
                  "name" => "case",
                  "method" => "post",
                  "autocomplete" => "off",
                  "accept-charset" => "utf-8",
                );
                echo form_open_multipart("cases/".$action."/".$key."/save", $attributes);
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
                <div class="row">
                  
                	
                
					<div class="field-col col-lg-3">
                		<?php
                		echo form_label('Customer Type', 'customer_type');

                    if(set_value('customer_type')){
                      $customer_type_default = set_value('customer_type');
                    }elseif(@$data['customer_type']){
                      $customer_type_default = $data['customer_type'];
                    }else{
                      $customer_type_default = '0';
                    }
			
                		
                		$customer_types = array(
                				'0'	=> 'All',
                				'1'	=> 'Indevidual',
                				'2'	=> 'Company',
                				'3'	=> 'Insurance Company',
                				'4'	=> 'Internal',
                		);
						
						
						$attr = array(
								'class'            => 'form-control select2'
						);
						
						
						
						echo form_dropdown('customer_type', $customer_types, $customer_type_default, $attr);

                		?>
                	</div>
				<div class="field-col col-lg-3">
                		<?php
                		echo form_label('customer', 'customer');
                    if(set_value('customer')){
                      $customer_default = set_value('customer');
                    }elseif(@$data['customer']){
                      $customer_default = $data['customer'];
                    }else{
                      $customer_default = '';
                    }
                		
                		$attr = array(
                				'class'            => 'form-control',
                				'id'            => 'customer'
                		);
                		$customers=array(0=>'Select Customer')+$customers;
                		echo form_dropdown('customer', $customers, $customer_default, $attr);

                		?>
                	</div>
                	<div class="field-col- col-lg-3">
                	<?php
                		echo form_label('Vehicle', 'vehicle');
                		
					if(set_value('vehicle')){
						$vehicle_default = set_value('vehicle');
					}elseif(@$data['vehicle']){
						$vehicle_default = $data['vehicle'];
					}else{
						$vehicle_default = '';
					}
						
					$attr = array(
						'class'	=> 'form-control',
						'id'		=> 'vehicle'
					);
					$vehicles=array(0=>'Select Vehicle')+$vehicles;
					echo form_dropdown('vehicle', $vehicles, $vehicle_default, $attr);

                	?>
                	</div>
                	
                	<div class="field-col col-lg-3">
                		<?php
                		echo form_label('mileage_kph', 'mileage_kph');

                    if(set_value('mileage_kph')){
                      $mileage_kph_default = set_value('mileage_kph');
                    }elseif(@$data['mileage_kph']){
                      $mileage_kph_default = $data['mileage_kph'];
                    }else{
                      $mileage_kph_default = '';
                    }

                		$mileage_kph_data = array(
  						        'name'          => 'mileage_kph',
  						        'id'            => 'mileage_kph',
  						        'value'         => $mileage_kph_default,
                      'placeholder'   => 'mileage_kph',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($mileage_kph_data);

                		?>
                	</div>
				<div class="field-col checkbox-col  col-lg-3">
                		<input type="checkbox" name="send_sms"  id="send_sms" value="1" data-plugin="switchery" data-color="#00b19d" data-size="small" <?php echo (@$data['send_sms']==1)? "checked": ''; ?> <?php echo set_checkbox('send_sms', '1'); ?> />
                		<?php echo form_label('Send SMS', 'send_sms'); ?>
                	</div>

				<div class="field-col col-lg-3">
                		<?php
                		echo form_label('sms_contact', 'sms_contact');

                    if(set_value('sms_contact')){
                      $sms_contact_default = set_value('sms_contact');
                    }elseif(@$data['sms_contact']){
                      $sms_contact_default = $data['sms_contact'];
                    }else{
                      $sms_contact_default = '';
                    }

                		$sms_contact_data = array(
  						        'name'          => 'sms_contact',
  						        'id'            => 'sms_contact',
  						        'value'         => $sms_contact_default,
                      'placeholder'   => '',
                      'maxlength'     => '15',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control phone',
                    );

						echo form_input($sms_contact_data);

                		?>
                	</div>
	</div>	</div>	</div>	</div>

<div class="row">
              <div class="col-lg-12">
                <div class="widget widget-auto">
                <div class="row">
                
                	<div class="field-col col-lg-12">
                		<input type="checkbox" name="has_accident"  id="has_accident" value="1" data-plugin="switchery" data-color="#00b19d" data-size="small" <?php echo (@$data['has_accident']==1)? "checked": ''; ?> <?php echo set_checkbox('has_accident', '1'); ?> />
                		<?php echo form_label('Has accident?', 'has_accident'); ?>
                	</div>
<div class="field-col col-lg-4">
                		<?php
                		echo form_label('accident_report_no', 'accident_report_no');

                    if(set_value('accident_report_no')){
                      $accident_report_no_default = set_value('accident_report_no');
                    }elseif(@$data['accident_report_no']){
                      $accident_report_no_default = $data['accident_report_no'];
                    }else{
                      $accident_report_no_default = '';
                    }

                		$accident_report_no_data = array(
  						        'name'          => 'accident_report_no',
  						        'id'            => 'accident_report_no',
  						        'value'         => $accident_report_no_default,
                      'placeholder'   => 'accident_report_no',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($accident_report_no_data);

                		?>
                	</div>
<div class="field-col col-lg-4">
                		<?php
                		echo form_label('accident_report_date', 'accident_report_date');

                    if(set_value('accident_report_date')){
                      $accident_report_date_default = set_value('accident_report_date');
                    }elseif(@$data['accident_report_date']){
                      $accident_report_date_default = $data['accident_report_date'];
                    }else{
                      $accident_report_date_default = '';
                    }

                		$accident_report_date_data = array(
  						        'name'          => 'accident_report_date',
  						        'id'            => 'accident_report_date',
  						        'value'         => $accident_report_date_default,
                      'placeholder'   => 'accident_report_date',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control datepicker',
                    );

						echo form_input($accident_report_date_data);

                		?>
                	</div>
<div class="field-col col-lg-4">
                		<?php
                		echo form_label('accident_report_expiry_date', 'accident_report_expiry_date');

                    if(set_value('accident_report_expiry_date')){
                      $accident_report_expiry_date_default = set_value('accident_report_expiry_date');
                    }elseif(@$data['accident_report_expiry_date']){
                      $accident_report_expiry_date_default = $data['accident_report_expiry_date'];
                    }else{
                      $accident_report_expiry_date_default = '';
                    }

                		$accident_report_expiry_date_data = array(
  						        'name'          => 'accident_report_expiry_date',
  						        'id'            => 'accident_report_expiry_date',
  						        'value'         => $accident_report_expiry_date_default,
                      'placeholder'   => 'accident_report_expiry_date',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control datepicker',
                    );

						echo form_input($accident_report_expiry_date_data);

                		?>
                	</div>
	</div>	</div>	</div>	</div>

<div class="row">
              <div class="col-lg-12">
                <div class="widget widget-auto">
                <div class="row">             	

                	
                <div class="col-lg-12">
                		<?php
                		echo form_label('remarks', 'remarks');

                    if(set_value('remarks')){
                      $remarks_default = set_value('remarks');
                    }elseif(@$data['remarks']){
                      $remarks_default = $data['remarks'];
                    }else{
                      $remarks_default = '';
                    }

                		$remarks_data = array(
                				'name'          => 'remarks',
                				'id'            => 'remarks',
                				'value'         => $remarks_default,
                      'placeholder'   => 'remarks',
                      'maxlength'     => '1500',
                		  'rows'     => '4',
                		  'cols'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_textarea($remarks_data);

                		?>
                	</div>


                	
                </div>
			</div>
		</div>
	</div>

	
			<div class="row">
              <div class="col-lg-12">
				<?php echo form_hidden('workplace_no', 0);?>
                	<button class="btn btn-turquoise pull-right" type="submit">Save</button>
                	<button class="btn btn-danger pull-right" type="reset">Reset</button>
			  </div>
			</div>
          <?php echo form_close(); ?>
          </div>
          <!-- Main Container End -->
