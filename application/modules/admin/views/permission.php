<?php $base_url = base_url() . 'admin_assets/'; ?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                     <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0"> Permissions Master</h5>
                            <div class="ml-auto d-flex align-items-center">
                              	<div class="caret-right pull-right"><a href="<?php echo base_url();?>add-permission" class="btn btn-primary"><i class="fa fa-plus"></i> Add Permissions  </a></div>			
                                
                            </div>
                        </div>
                    </div>
                  <div class="container-fluid page__container"> 
					
                    <div class="card card-form">               
   <table id="example1" class="display nowrap " style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th>Permissions Name</th>
                <th>Status</th>
				 <th>Action</th>
            </tr>
        </thead>
        <tbody>
						<?php $i=1; foreach($master_permission as $mp){
							$permission_id=$mp['permission_id']; 
							$encoded_id=rtrim(strtr(base64_encode($permission_id), '+/', '-_'), '=');
							?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $mp['permission_description']; ?></td>
							<?php if($mp['status']==1){?>
							<td><span class="badge badge-success align-text-bottom ml-1">Active</span></td>
							<?php }else{ ?>
							<td><span class="badge badge-danger align-text-bottom ml-1">Deactive</span></td>
							<?php } ?>
							<td><a href="<?php echo base_url()?>edit-permission/<?php echo $encoded_id ;?>" onClick="javascript:if(confirm('Do You Want to Edit Permission ?')){return true;}else{return false}"><i class="fa fa-edit"></i></a></td>
						</tr>
						<?php } ?>	
						
						</tbody>
        <!--<tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>-->
    </table>
	</div>
                       
                      </div>
                </div>
            </div>
       
        </div>
		
     

  <!-- <script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
        ]
    } );
} );
</script> -->

<script>
    $(document).ready(function () {
    $('#example1').DataTable({
        order: [[3, 'desc']],
    });
});
</script>
