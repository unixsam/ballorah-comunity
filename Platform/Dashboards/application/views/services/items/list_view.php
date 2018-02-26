
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                Services
                <i class="icon-angle-right"></i>
              </li>
              <li class="pull-right no-text-shadow" style="display: none">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change calendar date range">
                  <i class="icon-calendar"></i> <span></span> <i class="icon-angle-down"></i>
                </div>
              </li>
            </ul>

			<div class="row">
				<div class="col-lg-12">
				<div class="widget widget-auto">
				<?php echo $this->session->flashdata('msg'); ?>
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#item">Items</a></li>
				    <li><a data-toggle="tab" href="#operation">Operations</a></li>
				    <li><a data-toggle="tab" href="#package">Packages</a></li>
				     <li><a data-toggle="tab" href="#category">Categories</a></li>
				  </ul>
				
				  <div class="tab-content">
				    <div id="item" class="tab-pane fade in active">
				      <h3>Items</h3>
				      <div class="row">
				      	<div class="col-lg-12">
            					<a class="btn btn-turquoise pull-right" title="Add new role" href="#item-add-modal" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">New role</a>
						</div>
				      </div>
				      <div class="row">
				      	<div class="col-lg-12" id="itemsList">
							<?php if($count > 0){ ?>
				            <form action="{$base_url}admin/message/delete" method="POST">
				              <table cellspacing="0" cellpadding="4" border="0" class="table">
				                <thead>
				                  <tr>
				                    <th> <input type="checkbox" value=""/> </th>
				                    <th> Id </th>
				                    <th> Name </th>
				                    <th>Mileage Interval</th>
				                    <th>Price</th>
				                    <th>Cost</th>
				                    <th>Remarks</th>
				                    <th>Commission</th>
				                    <th> </th>
				                  </tr>
				                </thead>
				                <tbody>

					            <?php foreach($data as $row){ ?>
					                <tr>
					                    <td><input type="checkbox" name="id[]" value="<?php echo $row['id']; ?>"/></td>
					                    <td><?php echo $row['id']; ?></td>
					                    <td><?php echo $row['name']; ?></td>
					                    <td><?php echo $row['mileage_interval']; ?></td>
					                    <td><?php echo $row['price']; ?></td>
					                    <td><?php echo $row['cost']; ?></td>
					                    <td><?php echo $row['remarks']; ?></td>
					                    <td>N/A</td>
					                    <td class="text-right">
					                      <a class="edit_link" data-toggle="tooltip" title="Edit item" href="#item-edit-modal" data-id="<?php echo $row['id']; ?>" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">
					                      	<i class="fa fa-pencil-square" aria-hidden="true"></i>
					                      </a>
					                      <a href="#" data-toggle="tooltip" title="Delete item (Disabled)" class="delete_link">
					                        <i class="fa fa-trash" aria-hidden="true"></i>
					                      </a>
					                    </td>
					                </tr>
					            <?php } ?>
					
					              </tbody>
					          </table>

					           
					          
					        </form>
					      <?php }else{ ?>
					                  No record found
					      <?php } ?>
					      <?php echo $this->ajax_pagination->create_links(); ?>
						</div>
						<div class="loading" style="display: none; float:left; position: absolute; left: 37px;bottom: 97px; "><div class="content"><img src="<?php echo base_url().'assets/images/loading.gif'; ?>" width="50"/></div></div>
				      </div>
				    </div>
				    <div id="operation" class="tab-pane fade">
				      <h3>Operations</h3>
				      <div class="row">
				      	<div class="col-lg-12">
            					<a class="btn btn-turquoise pull-right" title="Add new role" href="#add-modal" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">New role</a>
						</div>
				      </div>
				      <div class="row">
				      	<div class="col-lg-12">
<?php if($count > 0){ ?>
            <form action="{$base_url}admin/message/delete" method="POST">
              <table cellspacing="0" cellpadding="4" border="0" class="table">
                <thead>
                  <tr>
                    <th> <input type="checkbox" value=""/> </th>
                    <th> Id </th>
                    <th> Name </th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>

            <?php foreach($data as $row){ ?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $row['id']; ?>"/></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-right">
                      <a class="edit_link" data-toggle="tooltip" title="Edit role" href="#edit-modal" data-id="<?php echo $row['id']; ?>" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">
                      	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </a>
                      
                      <a href="#" data-toggle="tooltip" title="Delete Customer (Disabled)" class="delete_link">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </a>
                    </td>
                </tr>
            <?php } ?>

              </tbody>
          </table>

           
        </form>
      <?php }else{ ?>
                  No record found

      <?php } ?>
						</div>
				      </div>
				    </div>
				    <div id="package" class="tab-pane fade">
				      <h3>Packages</h3>
				      <div class="row">
				      	<div class="col-lg-12">
            					<a class="btn btn-turquoise pull-right" title="Add new role" href="#add-modal" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">New role</a>
						</div>
				      </div>
				      <div class="row">
				      	<div class="col-lg-12">
							<?php if($count > 0){ ?>
				            <form action="{$base_url}admin/message/delete" method="POST">
				              <table cellspacing="0" cellpadding="4" border="0" class="table">
				                <thead>
				                  <tr>
				                    <th> <input type="checkbox" value=""/> </th>
				                    <th> Id </th>
				                    <th> Name </th>
				                    <th> </th>
				                  </tr>
				                </thead>
				                <tbody>

					            <?php foreach($data as $row){ ?>
					                <tr>
					                    <td><input type="checkbox" name="id[]" value="<?php echo $row['id']; ?>"/></td>
					                    <td><?php echo $row['id']; ?></td>
					                    <td><?php echo $row['name']; ?></td>
					                    <td class="text-right">
					                      <a class="edit_link" data-toggle="tooltip" title="Edit role" href="#edit-modal" data-id="<?php echo $row['id']; ?>" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">
					                      	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					                      </a>
					                      
					                      <a href="#" data-toggle="tooltip" title="Delete Customer (Disabled)" class="delete_link">
					                        <i class="fa fa-trash-o" aria-hidden="true"></i>
					                      </a>
					                    </td>
					                </tr>
					            <?php } ?>
					
					              </tbody>
					          </table>
					
					            
					        </form>
					      <?php }else{ ?>
					                  No record found
					
					      <?php } ?>
						</div>
				      </div>
				    </div>
				    
				    <div id="category" class="tab-pane fade">
				      <h3>Categories</h3>
				      <div class="row">
				      	<div class="col-lg-12">
            					<a class="btn btn-turquoise pull-right" title="Add new role" href="#add-modal" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">New role</a>
						</div>
				      </div>
				      <div class="row">
				      	<div class="col-lg-12">
							<?php if($count > 0){ ?>
				            <form action="{$base_url}admin/message/delete" method="POST">
				              <table cellspacing="0" cellpadding="4" border="0" class="table">
				                <thead>
				                  <tr>
				                    <th> <input type="checkbox" value=""/> </th>
				                    <th> Id </th>
				                    <th> Name </th>
				                    <th> </th>
				                  </tr>
				                </thead>
				                <tbody>

					            <?php foreach($data as $row){ ?>
					                <tr>
					                    <td><input type="checkbox" name="id[]" value="<?php echo $row['id']; ?>"/></td>
					                    <td><?php echo $row['id']; ?></td>
					                    <td><?php echo $row['name']; ?></td>
					                    <td class="text-right">
					                      <a class="edit_link" data-toggle="tooltip" title="Edit role" href="#edit-modal" data-id="<?php echo $row['id']; ?>" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">
					                      	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					                      </a>
					                      
					                      <a href="#" data-toggle="tooltip" title="Delete Customer (Disabled)" class="delete_link">
					                        <i class="fa fa-trash-o" aria-hidden="true"></i>
					                      </a>
					                    </td>
					                </tr>
					            <?php } ?>
					
					              </tbody>
					          </table>
					
					            
					        </form>
					      <?php }else{ ?>
					                  No record found
					
					      <?php } ?>
						</div>
				      </div>
				    </div>
				    
				  </div>
				</div>
				</div>
			</div>

	



          </div>
          <!-- Main Container End -->

<!-- Modals -->
<!--Items Modal add -->   
<div id="item-add-modal" class="modal-demo">
  <button type="button" class="close" onclick="Custombox.close();">
    <span>&times;</span><span class="sr-only">Close</span>
  </button>
  <h4 class="custom-modal-title">Add Item</h4>
  <div class="custom-modal-text">
	<?php
		$attributes = array(
        		"name" => "customer",
			"method" => "post",
            "autocomplete" => "off",
			"accept-charset" => "utf-8",
		);
		echo form_open_multipart("services/items/add", $attributes);
	?>
	
	<div class="row">
		    <div class="col-lg-12">
			<?php
			echo form_label('name', 'name', array('style'=>'text-align: left;width: 100%;'));
			
			$name_data = array(
					'name'          => 'name',
					'id'            => 'name',
					'placeholder'   => 'name',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($name_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('mileage_interval', 'mileage_interval', array('style'=>'text-align: left;width: 100%;'));
			
			$mileage_interval_data = array(
					'name'          => 'mileage_interval',
					'id'            => 'mileage_interval',
					'placeholder'   => 'mileage_interval',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($mileage_interval_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('price', 'price', array('style'=>'text-align: left;width: 100%;'));
			
			$price_data = array(
					'name'          => 'price',
					'id'            => 'price',
					'placeholder'   => 'price',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($price_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('cost', 'cost', array('style'=>'text-align: left;width: 100%;'));
			
			$cost_data = array(
					'name'          => 'cost',
					'id'            => 'cost',
					'placeholder'   => 'cost',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($cost_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('remarks', 'remarks', array('style'=>'text-align: left;width: 100%;'));
			
			$remarks_data = array(
					'name'          => 'remarks',
					'id'            => 'remarks',
					'placeholder'   => 'remarks',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($remarks_data);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>

<!--Items Modal edit -->

<div id="item-edit-modal" class="modal-demo">
  <button type="button" class="close" onclick="Custombox.close();">
    <span>&times;</span><span class="sr-only">Close</span>
  </button>
  <h4 class="custom-modal-title">Edit Items</h4>
  <div class="custom-modal-text">
	<?php
		$attributes = array(
			"id"					=> "item_edit_form",
        		"name" 				=> "item_edit_form",
			"method" 			=> "post",
            "autocomplete" 		=> "off",
			"accept-charset" 	=> "utf-8",
		);
		echo form_open_multipart("services/items/edit", $attributes);
	?>
	
	<div class="row">
		    <div class="col-lg-12">
			<?php
			echo form_label('name', 'name', array('style'=>'text-align: left;width: 100%;'));
			
			$name_data = array(
					'name'          => 'name',
					'id'            => 'name',
					'placeholder'   => 'name',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($name_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('mileage_interval', 'mileage_interval', array('style'=>'text-align: left;width: 100%;'));
			
			$mileage_interval_data = array(
					'name'          => 'mileage_interval',
					'id'            => 'mileage_interval',
					'placeholder'   => 'mileage_interval',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($mileage_interval_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('price', 'price', array('style'=>'text-align: left;width: 100%;'));
			
			$price_data = array(
					'name'          => 'price',
					'id'            => 'price',
					'placeholder'   => 'price',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($price_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('cost', 'cost', array('style'=>'text-align: left;width: 100%;'));
			
			$cost_data = array(
					'name'          => 'cost',
					'id'            => 'cost',
					'placeholder'   => 'cost',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($cost_data);
			?>
		</div>
    <div class="col-lg-12">
			<?php
			echo form_label('remarks', 'remarks', array('style'=>'text-align: left;width: 100%;'));
			
			$remarks_data = array(
					'name'          => 'remarks',
					'id'            => 'remarks',
					'placeholder'   => 'remarks',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($remarks_data);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php echo form_hidden('id', '',array('id'=>'id')); ?>
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>


<!--Items Modal add -->
     
<div id="add-modal" class="modal-demo">
  <button type="button" class="close" onclick="Custombox.close();">
    <span>&times;</span><span class="sr-only">Close</span>
  </button>
  <h4 class="custom-modal-title">Add role</h4>
  <div class="custom-modal-text">
	<?php
		$attributes = array(
        		"name" => "customer",
			"method" => "post",
            "autocomplete" => "off",
			"accept-charset" => "utf-8",
		);
		echo form_open_multipart("services/items/add", $attributes);
	?>
	
	<div class="row">
		<div class="col-lg-12">
			<?php
			echo form_label('Name', 'name', array('style'=>'text-align: left;width: 100%;'));
			
			$name_data = array(
					'name'          => 'name',
					'id'            => 'name',
					'placeholder'   => 'Role name',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($name_data);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>

<!--Items Modal add -->

<div id="edit-modal" class="modal-demo">
  <button type="button" class="close" onclick="Custombox.close();">
    <span>&times;</span><span class="sr-only">Close</span>
  </button>
  <h4 class="custom-modal-title">Edit role</h4>
  <div class="custom-modal-text">
	<?php
		$attributes = array(
			"id"					=> "edit_form",
        		"name" 				=> "edit_form",
			"method" 			=> "post",
            "autocomplete" 		=> "off",
			"accept-charset" 	=> "utf-8",
		);
		echo form_open_multipart("services/items/edit", $attributes);
	?>
	
	<div class="row">
		<div class="col-lg-12">
			<?php
			echo form_label('Name', 'name', array('style'=>'text-align: left;width: 100%;'));
			
			$name_data = array(
					'name'          => 'name',
					'id'            => 'name',
					'placeholder'   => 'Role name',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($name_data);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php echo form_hidden('id', '',array('id'=>'id')); ?>
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>


<!--Items Modal add -->
     
<div id="add-modal" class="modal-demo">
  <button type="button" class="close" onclick="Custombox.close();">
    <span>&times;</span><span class="sr-only">Close</span>
  </button>
  <h4 class="custom-modal-title">Add role</h4>
  <div class="custom-modal-text">
	<?php
		$attributes = array(
        		"name" => "customer",
			"method" => "post",
            "autocomplete" => "off",
			"accept-charset" => "utf-8",
		);
		echo form_open_multipart("services/items/add", $attributes);
	?>
	
	<div class="row">
		<div class="col-lg-12">
			<?php
			echo form_label('Name', 'name', array('style'=>'text-align: left;width: 100%;'));
			
			$name_data = array(
					'name'          => 'name',
					'id'            => 'name',
					'placeholder'   => 'Role name',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($name_data);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>

<!--Items Modal add -->

<div id="edit-modal" class="modal-demo">
  <button type="button" class="close" onclick="Custombox.close();">
    <span>&times;</span><span class="sr-only">Close</span>
  </button>
  <h4 class="custom-modal-title">Edit role</h4>
  <div class="custom-modal-text">
	<?php
		$attributes = array(
			"id"					=> "edit_form",
        		"name" 				=> "edit_form",
			"method" 			=> "post",
            "autocomplete" 		=> "off",
			"accept-charset" 	=> "utf-8",
		);
		echo form_open_multipart("services/items/edit", $attributes);
	?>
	
	<div class="row">
		<div class="col-lg-12">
			<?php
			echo form_label('Name', 'name', array('style'=>'text-align: left;width: 100%;'));
			
			$name_data = array(
					'name'          => 'name',
					'id'            => 'name',
					'placeholder'   => 'Role name',
					'maxlength'     => '50',
					'class'         =>  'form-control',
					);
			echo form_input($name_data);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php echo form_hidden('id', '',array('id'=>'id')); ?>
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>
