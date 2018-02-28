 


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
                <a href="<?php echo base_url('cases/add'); ?>">Add Case</a>
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
                  "name" => "signupform",
                  "method" => "post",
                  "autocomplete" => "off",
                  "accept-charset" => "utf-8",
                );
                echo form_open_multipart("cases/add", $attributes);
              ?>

			<div class="row">
              <div class="col-lg-12">
                <div class="widget widget-auto">
                <h4 class="header-title">Select2</h4>
                <div class="row">
                	<div class="col-lg-4">
                		COL1
                	</div>
                	<div class="col-lg-4">
                		COL2
                	</div>
                	<div class="col-lg-4">
                		COL3
                	</div>
                </div>
                </div>
              </div>
            </div>
                
            <div class="row">
              <div class="col-lg-3 col-md-6 col-md-3 ">
                <div class="widget widget-auto">
                  <div class="form-group">
            				<label for="name">Date</label>
            				<?php
                      $data = array(
                        'name'        => 'date',
                        'class'       =>  'form-control',
                        'id'          => 'datepicker',
                        'value'       => set_value('fname'),
                        'maxlength'   => '100',
                        'placeholder' => 'Select Date',
                        'size'        => '',
                        'style'       => '',
                        'onClick'     => ''
                      );

                      echo form_input($data);

            				?>
            				<span class="text-danger"><?php echo form_error('fname'); ?></span>
            			</div>


                </div>
              </div><!-- end col -->

              <div class="col-lg-6 col-md-6">
                <div class="widget widget-auto">
                  ABC02
                </div>
              </div><!-- end col -->
            </div><!-- end row -->




            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="widget widget-auto">
                  <?php
                  $options = array(
                          'small'         => 'Small Shirt',
                          'med'           => 'Medium Shirt',
                          'large'         => 'Large Shirt',
                          'xlarge'        => 'Extra Large Shirt',
                  );
                                    $js = array(
                        'id'       => 'shirts',
                        'onChange' => 'some_function();'
                  );
                  echo form_dropdown('shirts', $options, 'xlarge', $js);



                  $data = array(
                          'name'  => 'John Doe',
                          'email' => 'john@example.com',
                          'url'   => 'http://example.com'
                  );

                  echo form_hidden($data);




                  echo '<br>';



                  $data = array(
                        'name'          => 'username',
                        'id'            => 'username',
                        'value'         => 'johndoe',
                        'maxlength'     => '100',
                        'size'          => '50',
                        'style'         => 'width:50%',
                        'onClick' => 'some_function();'
                );

                echo form_input($data);

                echo '<br>';




                $options = array(
                		'small'         => array(
                				'med1'           => 'Medium Shirt 1',
                				'med2'           => 'Medium Shirt 2',
                				'med3'           => 'Medium Shirt 3',
                		),
                		'med'           => 'Medium Shirt',
                		'large'         => 'Large Shirt',
                		'xlarge'        => 'Extra Large Shirt',
                );
                
                $attr = array(
                		
                		'class'            => 'form-control select2'
                );
                echo form_dropdown('shirts', $options, 'large',$attr);

                echo '<br>';
                
                $options = array(
                		'small'         => array(
                				'med1'           => 'Medium Shirt 1',
                				'med2'           => 'Medium Shirt 2',
                				'med3'           => 'Medium Shirt 3',
                		),
                		'med'           => 'Medium Shirt',
                		'large'         => 'Large Shirt',
                		'xlarge'        => 'Extra Large Shirt',
                );
                
                $attr = array(
                
                		'class'            => 'form-control select2'
                );
                echo form_multiselect('shirts2', $options, 'large',$attr);


                   ?>
                   
                
                  
                   
                </div>
              </div><!-- end col -->
            </div>

          <?php echo form_close(); ?>
          </div>
          <!-- Main Container End -->
