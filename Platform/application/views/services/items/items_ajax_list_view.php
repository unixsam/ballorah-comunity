
							<?php if($count > 0){ ?>
				            <form action="{$base_url}admin/message/delete" method="POST">
				              <table cellspacing="0" cellpadding="4" border="0" class="table">
				                <thead>
				                  <tr>
				                    <th> <input type="checkbox" value=""/> </th>
				                    <th> Id </th>
				                    <th> Name </th>
				                    <th> Mileage Interval </th>
				                    <th> Price </th>
				                    <th> Cost </th>
				                    <th> Remarks </th>
				                    <th> Commission </th>
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
					                      <a class="edit_link" data-toggle="tooltip" title="Edit item" href="#item-edit-modal" onClick="Custombox.open({target: '#item-edit-modal',effect: 'sign', overlayColor:'#36404a',overlaySpeed:100});return false;" data-id="<?php echo $row['id']; ?>" >
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