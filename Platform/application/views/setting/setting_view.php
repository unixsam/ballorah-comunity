
             <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                Setting
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
				    <li class="active"><a data-toggle="tab" href="#item">Company Details</a></li>
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
						CASC
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
