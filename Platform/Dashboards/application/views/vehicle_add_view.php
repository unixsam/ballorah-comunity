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
                <a href="<?php echo base_url('vehicles'); ?>">List Vehicles</a>
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
                echo form_open_multipart("vehicles/".$action."/".$key."/save", $attributes);
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
                  
                	
                	
                <div class="field-col col-lg-3">
                		<?php
                		
                		echo form_label('Vehicle Type', 'vehicle_type');
                		
                		$attr = array(
                				'class'            => 'form-control select2'
                		);
                		
                		if(set_value('vehicle_type')){
                			$vehicle_type_default = set_value('vehicle_type');
                		}elseif(@$data['vehicle_type']){
                			$vehicle_type_default = $data['vehicle_type'];
                		}else{
                			$vehicle_type_default = '1';
                		}
                		echo form_dropdown('vehicle_type', $vehicle_types, $vehicle_type_default,$attr);
                		
                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Plate No.', 'plate_no');

                    if(set_value('plate_no')){
                      $plate_no_default = set_value('plate_no');
                    }elseif(@$data['plate_no']){
                      $plate_no_default = $data['plate_no'];
                    }else{
                      $plate_no_default = '';
                    }

                		$plate_no_data = array(
						'name'          => 'plate_no',
  						        'id'            => 'plate_no',
  						        'value'         => $plate_no_default,
                      'placeholder'   => 'Plate No.',
                      'maxlength'     => '20',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($plate_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-4">
                		<?php
                		echo form_label('Chassis No.', 'chassis_no');

                    if(set_value('chassis_no')){
                      $chassis_no_default = set_value('chassis_no');
                    }elseif(@$data['chassis_no']){
                      $chassis_no_default = $data['chassis_no'];
                    }else{
                      $chassis_no_default = '';
                    }

                		$chassis_no_data = array(
  						        'name'          => 'chassis_no',
  						        'id'            => 'chassis_no',
  						        'value'         => $chassis_no_default,
                      'placeholder'   => 'Chassis No.',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($chassis_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Primary Color', 'primary_colour');

                    if(set_value('primary_colour')){
                      $primary_colour_default = set_value('primary_colour');
                    }elseif(@$data['primary_colour']){
                      $primary_colour_default = $data['primary_colour'];
                    }else{
                      $primary_colour_default = '';
                    }

                		$primary_colour_data = array(
  						        'name'          => 'primary_colour',
  						        'id'            => 'primary_colour',
  						        'value'         => $primary_colour_default,
                      'placeholder'   => 'Primary Color',
                      'maxlength'     => '20',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($primary_colour_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Engine No.', 'engine_no');

                    if(set_value('engine_no')){
                      $engine_no_default = set_value('engine_no');
                    }elseif(@$data['engine_no']){
                      $engine_no_default = $data['engine_no'];
                    }else{
                      $engine_no_default = '';
                    }

                		$engine_no_data = array(
  						        'name'          => 'engine_no',
  						        'id'            => 'engine_no',
  						        'value'         => $engine_no_default,
                      'placeholder'   => 'Engine No.',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($engine_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Engine Model', 'engine_model');

                    if(set_value('engine_model')){
                      $engine_model_default = set_value('engine_model');
                    }elseif(@$data['engine_model']){
                      $engine_model_default = $data['engine_model'];
                    }else{
                      $engine_model_default = '';
                    }

                		$engine_model_data = array(
  						        'name'          => 'engine_model',
  						        'id'            => 'engine_model',
  						        'value'         => $engine_model_default,
                      'placeholder'   => 'Engine Model',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($engine_model_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Engine Capacity (cc)', 'engine_capacity_cc');

                    if(set_value('engine_capacity_cc')){
                      $engine_capacity_cc_default = set_value('engine_capacity_cc');
                    }elseif(@$data['engine_capacity_cc']){
                      $engine_capacity_cc_default = $data['engine_capacity_cc'];
                    }else{
                      $engine_capacity_cc_default = '';
                    }

                		$engine_capacity_cc_data = array(
  						        'name'          => 'engine_capacity_cc',
  						        'id'            => 'engine_capacity_cc',
  						        'value'         => $engine_capacity_cc_default,
                      'placeholder'   => '00000',
                      'maxlength'     => '5',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($engine_capacity_cc_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Engine Power', 'engine_power_rating_kw');

                    if(set_value('engine_power_rating_kw')){
                      $engine_power_rating_kw_default = set_value('engine_power_rating_kw');
                    }elseif(@$data['engine_power_rating_kw']){
                      $engine_power_rating_kw_default = $data['engine_power_rating_kw'];
                    }else{
                      $engine_power_rating_kw_default = '';
                    }

                		$engine_power_rating_kw_data = array(
  						        'name'          => 'engine_power_rating_kw',
  						        'id'            => 'engine_power_rating_kw',
  						        'value'         => $engine_power_rating_kw_default,
                      'placeholder'   => 'Engine Power',
                      'maxlength'     => '10',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($engine_power_rating_kw_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Serial No.', 'serial_no');

                    if(set_value('serial_no')){
                      $serial_no_default = set_value('serial_no');
                    }elseif(@$data['serial_no']){
                      $serial_no_default = $data['serial_no'];
                    }else{
                      $serial_no_default = '';
                    }

                		$serial_no_data = array(
  					  'name'          => 'serial_no',
  					  'id'            => 'serial_no',
  					  'value'         => $serial_no_default,
                      'placeholder'   => 'Serial No.',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($serial_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		
                		echo form_label('Make', 'make');
                		
                		$attr = array(
                				'class'            => 'form-control select2'
                		);
                		
                		if(set_value('make')){
                			$make_default = set_value('make');
                		}elseif(@$data['make']){
                			$make_default = $data['make'];
                		}else{
                			$make_default = '1';
                		}
                		echo form_dropdown('make', $makes, $make_default,$attr);
                		
                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('model', 'model');

                    if(set_value('model')){
                      $model_default = set_value('model');
                    }elseif(@$data['model']){
                      $model_default = $data['model'];
                    }else{
                      $model_default = '';
                    }

                		$model_data = array(
  						        'name'          => 'model',
  						        'id'            => 'model',
  						        'value'         => $model_default,
                      'placeholder'   => 'model',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($model_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Country Of Origin', 'country_of_origin');
                		
                		$attr = array(
                				'class'            => 'form-control select2'
                		);
                		
                    if(set_value('country_of_origin')){
                      $country_of_origin_default = set_value('country_of_origin');
                    }elseif(@$data['country_of_origin']){
                      $country_of_origin_default = $data['country_of_origin'];
                    }else{
                      $country_of_origin_default = 'QA';
                    }

                    echo form_dropdown('country_of_origin', $countries, $country_of_origin_default,$attr);
                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Year Of Manufacture', 'year_of_manufacture');

                    if(set_value('year_of_manufacture')){
                      $year_of_manufacture_default = set_value('year_of_manufacture');
                    }elseif(@$data['year_of_manufacture']){
                      $year_of_manufacture_default = $data['year_of_manufacture'];
                    }else{
                      $year_of_manufacture_default = '';
                    }

                		$year_of_manufacture_data = array(
  						        'name'          => 'year_of_manufacture',
  						        'id'            => 'year_of_manufacture',
  						        'value'         => $year_of_manufacture_default,
                      'placeholder'   => '2016',
                      'maxlength'     => '4',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($year_of_manufacture_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Passenger Capacity', 'passenger_capacity');

                    if(set_value('passenger_capacity')){
                      $passenger_capacity_default = set_value('passenger_capacity');
                    }elseif(@$data['passenger_capacity']){
                      $passenger_capacity_default = $data['passenger_capacity'];
                    }else{
                      $passenger_capacity_default = '';
                    }

                		$passenger_capacity_data = array(
  						        'name'          => 'passenger_capacity',
  						        'id'            => 'passenger_capacity',
  						        'value'         => $passenger_capacity_default,
                      'placeholder'   => '0',
                      'maxlength'     => '2',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($passenger_capacity_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Current Mileage/KM', 'current_mileage');

                    if(set_value('current_mileage')){
                      $current_mileage_default = set_value('current_mileage');
                    }elseif(@$data['current_mileage']){
                      $current_mileage_default = $data['current_mileage'];
                    }else{
                      $current_mileage_default = '';
                    }

                		$current_mileage_data = array(
  						        'name'          => 'current_mileage',
  						        'id'            => 'current_mileage',
  						        'value'         => $current_mileage_default,
                      'placeholder'   => '0',
                      'maxlength'     => '20',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($current_mileage_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Customer', 'customer');

                    if(set_value('customer')){
                      $customer_default = set_value('customer');
                    }elseif(@$data['customer']){
                      $customer_default = $data['customer'];
                    }else{
                      $customer_default = '';
                    }

                		
                		
                		$attr = array(
                				'class'            => 'form-control select2'
                		);
                		
                		
                		
                		echo form_dropdown('customer', $customers, $customer_default,$attr);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Owner', 'owner');

                    if(set_value('owner')){
                      $owner_default = set_value('owner');
                    }elseif(@$data['owner']){
                      $owner_default = $data['owner'];
                    }else{
                      $owner_default = '';
                    }

                		$owner_data = array(
  						        'name'          => 'owner',
  						        'id'            => 'owner',
  						        'value'         => $owner_default,
                      'placeholder'   => 'Insert owner name ...',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($owner_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Interior Colour', 'interior_colour');

                    if(set_value('interior_colour')){
                      $interior_colour_default = set_value('interior_colour');
                    }elseif(@$data['interior_colour']){
                      $interior_colour_default = $data['interior_colour'];
                    }else{
                      $interior_colour_default = '';
                    }

                		$interior_colour_data = array(
  						        'name'          => 'interior_colour',
  						        'id'            => 'interior_colour',
  						        'value'         => $interior_colour_default,
                      'placeholder'   => 'Interior Colour',
                      'maxlength'     => '20',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($interior_colour_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Distinctive No.', 'distinctive_no');

                    if(set_value('distinctive_no')){
                      $distinctive_no_default = set_value('distinctive_no');
                    }elseif(@$data['distinctive_no']){
                      $distinctive_no_default = $data['distinctive_no'];
                    }else{
                      $distinctive_no_default = '';
                    }

                		$distinctive_no_data = array(
  						        'name'          => 'distinctive_no',
  						        'id'            => 'distinctive_no',
  						        'value'         => $distinctive_no_default,
                      'placeholder'   => 'Distinctive No.',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($distinctive_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Registration No.', 'registration_no');

                    if(set_value('registration_no')){
                      $registration_no_default = set_value('registration_no');
                    }elseif(@$data['registration_no']){
                      $registration_no_default = $data['registration_no'];
                    }else{
                      $registration_no_default = '';
                    }

                		$registration_no_data = array(
  						        'name'          => 'registration_no',
  						        'id'            => 'registration_no',
  						        'value'         => $registration_no_default,
                      'placeholder'   => 'Registration No.',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($registration_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Driver Name', 'driver_name');

                    if(set_value('driver_name')){
                      $driver_name_default = set_value('driver_name');
                    }elseif(@$data['driver_name']){
                      $driver_name_default = $data['driver_name'];
                    }else{
                      $driver_name_default = '';
                    }

                		$driver_name_data = array(
  						        'name'          => 'driver_name',
  						        'id'            => 'driver_name',
  						        'value'         => $driver_name_default,
                      'placeholder'   => 'Driver Name',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($driver_name_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Contact No.', 'contact_no');

                    if(set_value('contact_no')){
                      $contact_no_default = set_value('contact_no');
                    }elseif(@$data['contact_no']){
                      $contact_no_default = $data['contact_no'];
                    }else{
                      $contact_no_default = '';
                    }

                		$contact_no_data = array(
  						        'name'          => 'contact_no',
  						        'id'            => 'contact_no',
  						        'value'         => $contact_no_default,
                      'placeholder'   => 'Contact No.',
                      'maxlength'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($contact_no_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Unladen Weight (kg)', 'unladen_weight_kg');

                    if(set_value('unladen_weight_kg')){
                      $unladen_weight_kg_default = set_value('unladen_weight_kg');
                    }elseif(@$data['unladen_weight_kg']){
                      $unladen_weight_kg_default = $data['unladen_weight_kg'];
                    }else{
                      $unladen_weight_kg_default = '';
                    }

                		$unladen_weight_kg_data = array(
  						        'name'          => 'unladen_weight_kg',
  						        'id'            => 'unladen_weight_kg',
  						        'value'         => $unladen_weight_kg_default,
                      'placeholder'   => '',
                      'maxlength'     => '10',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($unladen_weight_kg_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Max. Laden Weight (kg)', 'max_laden_weight_kg');

                    if(set_value('max_laden_weight_kg')){
                      $max_laden_weight_kg_default = set_value('max_laden_weight_kg');
                    }elseif(@$data['max_laden_weight_kg']){
                      $max_laden_weight_kg_default = $data['max_laden_weight_kg'];
                    }else{
                      $max_laden_weight_kg_default = '';
                    }

                		$max_laden_weight_kg_data = array(
  						        'name'          => 'max_laden_weight_kg',
  						        'id'            => 'max_laden_weight_kg',
  						        'value'         => $max_laden_weight_kg_default,
                      'placeholder'   => '',
                      'maxlength'     => '10',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($max_laden_weight_kg_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Fuel Type', 'fuel_type');

                    if(set_value('fuel_type')){
                      $fuel_type_default = set_value('fuel_type');
                    }elseif(@$data['fuel_type']){
                      $fuel_type_default = $data['fuel_type'];
                    }else{
                      $fuel_type_default = '';
                    }

                		$fuel_type_data = array(
  						        'name'          => 'fuel_type',
  						        'id'            => 'fuel_type',
  						        'value'         => $fuel_type_default,
                      'placeholder'   => '',
                      'maxlength'     => '20',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($fuel_type_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Recommeded Engine Oil', 'recommeded_engine_oil');

                    if(set_value('recommeded_engine_oil')){
                      $recommeded_engine_oil_default = set_value('recommeded_engine_oil');
                    }elseif(@$data['recommeded_engine_oil']){
                      $recommeded_engine_oil_default = $data['recommeded_engine_oil'];
                    }else{
                      $recommeded_engine_oil_default = '';
                    }

                		$recommeded_engine_oil_data = array(
  						        'name'          => 'recommeded_engine_oil',
  						        'id'            => 'recommeded_engine_oil',
  						        'value'         => $recommeded_engine_oil_default,
                      'placeholder'   => 'recommeded_engine_oil',
                      'maxlength'     => '10',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($recommeded_engine_oil_data);

                		?>
                	</div>
                <div class="field-col col-lg-3">
                		<?php
                		echo form_label('Trim', 'trim');

                    if(set_value('trim')){
                      $trim_default = set_value('trim');
                    }elseif(@$data['trim']){
                      $trim_default = $data['trim'];
                    }else{
                      $trim_default = '';
                    }

                		$trim_data = array(
  						        'name'          => 'trim',
  						        'id'            => 'trim',
  						        'value'         => $trim_default,
                      'placeholder'   => '',
                      'maxlength'     => '3',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_input($trim_data);

                		?>
                	</div> 
                <div class="field-col checkbox-col  col-lg-3">
                		<input type="checkbox" name="lifting_equipment"  id="lifting_equipment" value="1" data-plugin="switchery" data-color="#00b19d" data-size="small" <?php echo (@$data['lifting_equipment']==1)? "checked": ''; ?> <?php echo set_checkbox('lifting_equipment', '1'); ?> />
                		<?php echo form_label('Lifting Equipment', 'lifting_equipment'); ?>

                	</div>
                	
                	<div class="field-col checkbox-col  col-lg-3">
                		<input type="checkbox" name="local_use_only"  id="local_use_only" value="1" data-plugin="switchery" data-color="#00b19d" data-size="small" <?php echo (@$data['local_use_only']==1)? "checked": ''; ?> <?php echo set_checkbox('local_use_only', '1'); ?> />
                		<?php echo form_label('Local Use Only', 'local_use_only'); ?>

                	</div>
                	
                	<div class="field-col checkbox-col  col-lg-3">
                		<input type="checkbox" name="in_car_cam"  id="in_car_cam" value="1" data-plugin="switchery" data-color="#00b19d" data-size="small" <?php echo (@$data['in_car_cam']==1)? "checked": ''; ?> <?php echo set_checkbox('in_car_cam', '1'); ?> />
                		<?php echo form_label('In Car Cam', 'in_car_cam'); ?>

                	</div>
                	
                
                
                <div class="col-lg-6">
                		<?php
                		echo form_label('attachment', 'attachment');

                    if(set_value('attachment')){
                      $attachment_default = set_value('attachment');
                    }elseif(@$data['attachment']){
                      $attachment_default = $data['attachment'];
                    }else{
                      $attachment_default = '';
                    }

                		$attachment_data = array(
                				'name'          => 'attachment',
                				'id'            => 'attachment',
                				'value'         => $attachment_default,
                      'placeholder'   => 'attachment',
                      'maxlength'     => '1500',
                		  'rows'     => '4',
                		  'cols'     => '50',
                      'size'          => '',
                      'style'         => '',
                      'class'         =>  'form-control',
                    );

						echo form_textarea($attachment_data);

                		?>
                	</div>
                <div class="col-lg-6">
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
                				'name'          => 'attachment',
                				'id'            => 'attachment',
                				'value'         => $attachment_default,
                      'placeholder'   => 'attachment',
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
