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
						<div class="col-md-12">
													</div>
						<div class="col-md-6">
							<div class="main-card mb-3 card">
								<div class="card-body">
									<h5 class="card-title">Mapping Role-Permission</h5>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Master Setting </span>
												<ul class="nested">
													<li>
													<input type="checkbox" value="1$1" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Role Master
													</li>
													<li>
									                  <input type="checkbox" value="1$2" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Permission Master
													</li>
													<li>
													<input type="checkbox" value="1$3" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Mapping Role & Permission
													</li>
													<li>
													<input type="checkbox" value="1$4" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Designation
													</li>
													<li>
													<input type="checkbox" value="1$5" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">State
													</li>
													<li>
													<input type="checkbox" value="1$5" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">District
													</li>
													<li>
													<input type="checkbox" value="1$5" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Block
													</li>
													<li>
													<input type="checkbox" value="1$5" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Sector
													</li>
													<li>
													<input type="checkbox" value="1$5" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Sub-Sector
													</li>
													<li>
													<input type="checkbox" value="1$5" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Employee Master
													</li>
												</ul>
											</li>
										</ul>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Assessment Bank </span>
												<ul class="nested">
													<li>
													<input type="checkbox" value="1$1" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Category Master
													</li>
													<li>
									                  <input type="checkbox" value="1$2" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Question/Answer Master
													</li>
													<li>
													<input type="checkbox" value="1$3" id="sub_menu_id1.1" name="sub_menu_id[]" data-val="1-1-1">Mapping of Question
													</li>
													<li>
													
												</ul>
											</li>
										</ul>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Assessment Formula </span>
											</li>
										</ul>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Result Review </span>
											</li>
										</ul>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Reminders </span>
											</li>
										</ul>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Reports </span>
											</li>
										</ul>
										<ul id="myUL">
											<li>
												<span class="caret">
													<input type="checkbox" value="1" name="main_menu_id[]">
													Analytical Dashboard </span>
											</li>
										</ul>
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

												
													<option value="1">Admin</option>

													<option value="2">Asst. Admin</option>

												
											</select>

										</div>

									</div>



									<div class="col-md-6">

										<label>Choose Permissions:</label>

										
											<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

												<input type="checkbox" value="1" name="Permission[]"><label style="margin-left: 10px;">Create</label>

											</div>

										
											<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

												<input type="checkbox" value="2" name="Permission[]"><label style="margin-left: 10px;">View</label>

											</div>

										
											<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

												<input type="checkbox" value="3" name="Permission[]"><label style="margin-left: 10px;">Delete</label>

											</div>

										
											<div class="checkbox checkbox-primary checkbox-info" style="margin-left:20px">

												<input type="checkbox" value="4" name="Permission[]"><label style="margin-left: 10px;">Update</label>

											</div>

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
            <tr>
                <td>1</td>
                <td>Admin</td>
				 <td>Active</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			
			 <tr>
                <td>2</td>
                <td>Supervisor</td>
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			
			 
			 

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