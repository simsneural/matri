<?php $base_url = base_url() . 'admin_assets/'; ?>
 <style>
	ul,
	#myUL {
		list-style-type: none;
	}

	#myUL {
		margin: 0;
		padding: 0;
	}

	.caret {
		cursor: pointer;
		-webkit-user-select: none;
		/* Safari 3.1+ */
		-moz-user-select: none;
		/* Firefox 2+ */
		-ms-user-select: none;
		/* IE 10+ */
		user-select: none;
	}

	.caret::before {
		content: "\25B6";
		color:#0e2be8;
		display: inline-block;
		margin-right: 6px;
	}

	.nested {
		display: none;
	}

	.active {
		display: block;
	}
</style>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                   
					<div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0"> Mapping Role-Permission</h5>
                            <!--<div class="ml-auto d-flex align-items-center">
                                <div class="caret-right pull-right"><a href="add-state.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add  State</a></div>
                                
                            </div>-->
                        </div>
                    </div>
                   <div class="container-fluid page__container">
                   <div class="row">
						<div class="col-md-12"></div>
						<div class="col-md-6">
							<div class="main-card mb-3 card">
							<div class="card-body"><h5 class="card-title">Mapping Role-Permission</h5>
						<?php $i=1; $j=1; $k=3; $sub=1; $sub_sub=1; $mi=1; $mj=1; $mk=1;
						foreach ($master_menu as $menu) { ?>
						<ul id="myUL">
						   <li><span class="caret"><input type="checkbox" value="<?php echo $menu['menu_id']; ?>" name="main_menu_id[]"> <?php echo $menu['menu_description'];?> </span>
							<ul class="nested">
							<?php $menuid = $menu['menu_id']; 
								foreach($master_sub_menu as $submenu){
								if($submenu['menu_id']==$menuid){ ?>
							  <li> <input type="checkbox" value="<?php echo $menuid."$".$submenu['sub_menu_id']; ?>" id="sub_menu_id<?php echo $i.".".$sub;?>" name="sub_menu_id[]" data-val="<?php echo $mi.'-'.$mj.'-'.$mk;?>"> <?php echo $submenu['sub_menu_description']; ?></li>
								<?php } } ?>
							</ul>
						  </li>
						</ul>
						<?php } ?>
						</div>
							</div>

						</div>



						<div class="col-md-6">

							<div class="main-card mb-3 card">

								<div class="card-body">
									<h5 class="card-title">Mapping Role-Permission</h5>

									<div class="col-md-12">

										<label>Select Role:</label>

										<div class=" position-relative form-group">

											<select class="form-control" name="group_type">
												<option value="">Select Role</option>
												<?php foreach($master_role as $mr){?>
												<option value="<?php echo $mr['role_id']; ?>"><?php echo $mr['role_name']; ?></option>
												<?php } ?>
											</select>

										</div>

									</div>



									<div class="col-md-6">
										<label>Choose Permissions:</label>								
										<?php foreach($master_permission as $mp){?>
											<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">
												<input type="checkbox" value="<?php echo $mp['permission_id']; ?>" name="Permission[]"><label style="margin-left: 10px;"><?php echo $mp['permission_description']; ?></label>
											</div>
										<?php } ?>
									</div>
									<input type="button" value="Submit" class="mt-1 btn btn-primary mt-3 pull-right" id="map_button" />

								</div>

							</div>

						</div>

					</div>

				</div>
				 <div class="container-fluid page__container">
				  <div class="card card-form">  
                  <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th>Role Name</th>				
				 <th>Status</th>
				 <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
		<?php $i=1; foreach($master_role as $mr){ ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $mr['role_name']; ?></td>
				<td><?php echo $mr['status']==1?'Active':'Inactive'?></td>
                <td><a href="<?php echo base_url().'edit-map-role-permission/'.rtrim(strtr(base64_encode($mr['role_id']), '+/', '-_'), '='); ?>"><i class="fa fa-edit"></i></a></td>
            </tr>
		<?php } ?>
        </tbody>
    </table>
	</div>
         </div>
		</div>
            </div>
       
        </div>
		
	
		
     

   <script>
   $(document).ready(function () {
  $("#dataTable").DataTable({
    searching: false,
    paging: true,
    info: false,
    lengthChange: false
  });
});
   </script>
   
   <script>
		var toggler = document.getElementsByClassName("caret");
		var i;
		for (i = 0; i < toggler.length; i++) {
			toggler[i].addEventListener("click", function() {
				this.parentElement.querySelector(".nested").classList.toggle("active");
				this.classList.toggle("caret-down");
			});
		}
		$(document).ready(function() {
			$("#map_button").click(function() {
				var url = "https://pravasibandhu.org/map-role-permission-form-save"; // the script where you handle the form input.
				$.ajax({
					type: "POST",
					url: url,
					data: $("#map_role_form").serialize(), // serializes the form's elements.
					success: function(data) {
						if (data == 0) {
							$('.alert').css('display', 'block');
							$('.alert').fadeIn().fadeOut(2000);
						}
						if (data == 1) {
							location.reload();
						}
					}
				});
				e.preventDefault(); // avoid to execute the actual submit of the form
			});
		});
	</script>