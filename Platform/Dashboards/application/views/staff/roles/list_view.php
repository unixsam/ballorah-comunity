
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                Staff
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
            <?php echo $this->session->flashdata('msg'); ?>
			  	</div>
			</div>
			
			<div class="row">

          <div class="col-lg-12">
            <a class="btn btn-turquoise pull-right" title="Add new role" href="#add-modal" data-animation="sign" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">New role</a>
			  	</div>
			</div>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget widget-auto">
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

            <nav aria-label="Page navigation">
                <ul class="clear pagination">
                  <?php echo $pagination->create_links(); ?>
                </ul>
          </nav>
        </form>
      <?php }else{ ?>
                  No record found

      <?php } ?>
          </div>
        </div>
      </div>



          </div>
          <!-- Main Container End -->
          
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
		echo form_open_multipart("staff/role/add", $attributes);
	?>
	
	<div class="row">
		<div class="field-col col-lg-12">
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
		<div class="field-col col-lg-12">
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>


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
		echo form_open_multipart("staff/role/edit", $attributes);
	?>
	
	<div class="row">
		<div class="field-col col-lg-12">
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
		<div class="field-col col-lg-12">
			<?php echo form_hidden('id', '',array('id'=>'id')); ?>
			<button class="btn btn-turquoise pull-right" type="submit">Save</button>
		</div>
	</div>
	<?php echo form_close(); ?>
  </div>
</div>
