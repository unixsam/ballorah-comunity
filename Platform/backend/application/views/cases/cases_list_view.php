
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url(); ?>">Home</a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                List Cases
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
          <div class="widget widget-auto">
            <?php if($count > 0){ ?>
            <form action="{$base_url}admin/message/delete" method="POST">
              <table cellspacing="0" cellpadding="4" border="0" class="table">
                <thead>
                  <tr>
                    <th> <input type="checkbox" value=""/> </th>
                    <th> Id </th>
                    <th> Customer type </th>
                    <th> Customer </th>
                    <th> Plate No. </th>
                    <th> sms_contact </th>
                    <th> Accident </th>
                    <th> Report No. </th>
                    <th> Report Date </th>
                    <th> Remarks </th>
                    <th>status</th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>

            <?php foreach($data as $row){ ?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $row['id']; ?>"/></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['vehicle']; ?></td>
                    <td><?php echo $row['customer']; ?></td>
                    <td><?php echo $row['plate_no']; ?></td>
                    <td><?php echo $row['sms_contact']; ?></td>
                    <td><?php echo ($row['has_accident']==1? 'Yes': 'No') ?></td>
                    <td><?php echo $row['accident_report_no']; ?></td>
                    <td><?php echo $row['accident_report_date']; ?></td>
                    <td><?php echo $row['remarks']; ?></td>
                    <td class="text-right">
                      <a href="<?php echo base_url('cases/edit/'.$row['id']); ?>" data-toggle="tooltip" title="Edit Case"  class="edit_link">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Delete Case (Disabled)" class="delete_link">
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
