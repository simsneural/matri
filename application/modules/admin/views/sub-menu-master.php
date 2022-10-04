<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">
    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0"> Sub Menu Master</h5>
            <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="<?php echo base_url();?>add-submenu"
                        class="btn btn-primary"><i class="fa fa-plus"></i> Add Sub Menu</a></div>

            </div>
        </div>
    </div>
    <div class="container-fluid page__container">

        <div class="card card-form">
            <table id="example" class="display nowrap " style="width:100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>S.No</th>
                        <th>Sub Menu Name</th>
                        <th>Menu Name</th>
                        <th>Route Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; foreach($master_sub_menu as $msm){
							$sub_menu_id=$msm['sub_menu_id ']; 
							$encoded_id=rtrim(strtr(base64_encode($sub_menu_id), '+/', '-_'), '=');
							?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $msm['sub_menu_description']; ?></td>
                            <td><?php echo $msm['menu_description']; ?></td>
                            <td><?php echo $msm['sub_menu_route']; ?></td>
							<?php if($msm['status']==1){?>
							<td><span class="badge badge-success align-text-bottom ml-1">Active</span></td>
							<?php }else{ ?>
							<td><span class="badge badge-danger align-text-bottom ml-1">Deactive</span></td>
							<?php } ?>
							<td><a href="<?php echo base_url()?>edit-submenu/<?php echo $encoded_id ;?>" onClick="javascript:if(confirm('Do You Want to Edit Menu ?')){return true;}else{return false}"><i class="fa fa-edit"></i></a></td>
						</tr>
						<?php } ?>
                </tbody>
              
            </table>
        </div>

    </div>
</div>
</div>
</div>


<!-- 
        <script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
        ]
    } );
} );
</script> -->
<script>
$(document).ready(function() {
    $('#example1').DataTable({
        order: [
            [3, 'desc']
        ],
    });
});
</script>