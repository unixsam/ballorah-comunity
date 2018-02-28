<?php


// if($action=='add'){
//   $id=0;
// }

// if($action == 'edit'){
//   $id = $data['id'];
// }
// if(@$data['type']){
//   $type = $data['type'];
// }
// if($action == 'save'){
//   $type = set_value('type');
// }
// echo $action;
?>
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                <a href="<?php echo base_url('staff/members'); ?>">List Staff Members</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                <?php echo $bc; ?>
                <i class="icon-angle-right"></i>
              </li>
              <li class="pull-right no-text-shadow" style="display: none">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change calendar date range">
                  <i class="fa fa-calendar"></i> <span></span> <i class="fa fa-angle-down"></i>
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
                echo form_open_multipart("staff/member/save/".@$id, $attributes);
              ?>
			<div class="row">

          <div class="col-lg-12">
            <?php echo $this->session->flashdata('msg'); ?>
    			   <?php echo validation_errors(); ?>
              <button class="btn btn-turquoise pull-right" type="submit">Save</button>
              <button class="btn btn-danger pull-right" type="reset">Reset</button>
              <a class="btn btn-pumpkin pull-right" title="Back" href="<?php echo base_url('staff/members'); ?>">Back</a>
			  	</div>
			</div>
			<div class="row">
              <div class="col-lg-12">
                <div class="widget widget-auto">
                <h4 class="header-title">Staff Detail</h4>
                <div class="row">
                			<div class="field-col col-lg-7">
                  			<?php
                  			echo form_label('name', 'name');
                  	
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
			                  	'placeholder'   => 'name',
			                  	'maxlength'     => '100',
			                  	'size'          => '',
			                  	'style'         => '',
			                  	'class'         =>  'form-control',
			          		);

          					echo form_input($name_data);

                  	?>
                </div>
				<div class="field-col col-lg-7">
                  <?php
                  echo form_label('contact', 'contact');
                  if(set_value('contact')){
                    $contact_default = set_value('contact');
                  }elseif(@$data['contact']){
                    $contact_default = $data['contact'];
                  }else{
                    $contact_default = '';
                  }
                  $contact_data = array(
                  'name'          => 'contact',
                  'id'            => 'contact',
                  'value'         => $contact_default,
                  'placeholder'   => 'contact',
                  'maxlength'     => '100',
                  'size'          => '',
                  'style'         => '',
                  'class'         =>  'form-control',
          );

          echo form_input($contact_data);

                  ?>
                </div>
			<div class="field-col col-lg-7">
                  <?php
                  echo form_label('work_permit', 'work_permit');
                  if(set_value('work_permit')){
                    $work_permit_default = set_value('work_permit');
                  }elseif(@$data['work_permit']){
                    $work_permit_default = $data['work_permit'];
                  }else{
                    $work_permit_default = '';
                  }
                  $work_permit_data = array(
                  'name'          => 'work_permit',
                  'id'            => 'work_permit',
                  'value'         => $work_permit_default,
                  'placeholder'   => 'work_permit',
                  'maxlength'     => '100',
                  'size'          => '',
                  'style'         => '',
                  'class'         =>  'form-control',
          );

          echo form_input($work_permit_data);

                  ?>
                </div>
				<div class="field-col col-lg-7">
                  <?php
                  echo form_label('permit_expiry_date', 'permit_expiry_date');
                  if(set_value('permit_expiry_date')){
                    $permit_expiry_date_default = set_value('permit_expiry_date');
                  }elseif(@$data['permit_expiry_date']){
                    $permit_expiry_date_default = $data['permit_expiry_date'];
                  }else{
                    $permit_expiry_date_default = '';
                  }
                  $permit_expiry_date_data = array(
                  'name'          => 'permit_expiry_date',
                  'id'            => 'permit_expiry_date',
                  'value'         => $permit_expiry_date_default,
                  'placeholder'   => 'permit_expiry_date',
                  'maxlength'     => '100',
                  'size'          => '',
                  'style'         => '',
                  'class'         =>  'form-control',
          );

          echo form_input($permit_expiry_date_data);

                  ?>
                </div>
				<div class="field-col col-lg-7">
                  <?php
                  echo form_label('role', 'role');
                  if(set_value('role')){
                    $role_default = set_value('role');
                  }elseif(@$data['role']){
                    $role_default = $data['role'];
                  }else{
                    $role_default = '';
                  }
                  $role_data = array(
                  'name'          => 'role',
                  'id'            => 'role',
                  'value'         => $role_default,
                  'placeholder'   => 'role',
                  'maxlength'     => '100',
                  'size'          => '',
                  'style'         => '',
                  'class'         =>  'form-control',
          );

          echo form_input($role_data);

                  ?>
                </div>
				</div>
			</div>
		</div>
	</div>
    <div class="row">
              <div class="col-lg-12">
              		
                	<button class="btn btn-turquoise pull-right" type="submit">Save</button>
                	<button class="btn btn-danger pull-right" type="reset">Reset</button>
                	<a class="btn btn-pumpkin pull-right" title="Back" href="<?php echo base_url('staff/members'); ?>">Back</a>
                	
			  </div>
			</div>
          <?php echo form_close(); ?>
          </div>
          <!-- Main Container End -->
