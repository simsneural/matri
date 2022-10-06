<style>

ul, #myUL {

  list-style-type: none;

}



#myUL {

  margin: 0;

  padding: 0;

}



.caret {

  cursor: pointer;

  

  -webkit-user-select: none; /* Safari 3.1+ */

  -moz-user-select: none; /* Firefox 2+ */

  -ms-user-select: none; /* IE 10+ */

  user-select: none;

}



.caret::before {

  content: "\25B6";

  color: black;

  display: inline-block;

  margin-right: 6px;

}



.caret-down::before {

	

  -ms-transform: rotate(90deg); /* IE 9 */

  -webkit-transform: rotate(90deg); /* Safari */'

  transform: rotate(90deg);  

}



.nested {

  display: none;

}



.active {

  display: block;

  

}

</style>



<div id="content-page" class="content-page">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                        <div class="iq-card-header">

                            <div class="card-header-tab card-header">

                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">

                                    <i class="header-icon fa fa-cube mr-3 text-muted opacity-6"> </i>Mapping Roles-Permissions Masters

                                </div>

                            </div>

                        </div>

						

						<form autocomplete="off" method="post" action="<?php echo base_url()?>edit-map-role-permission-form-save" enctype="multipart/form-data" id="map_role_form3">

							<?php 

							   foreach ($mapping_role_data as $menudata) {

								  $menu = explode('&&', $menudata['menu_master_id']);

								  for($i=0; $i<=count($menu)-1; $i++){

									 $menu_data = explode('|', $menu[$i]);

									 for($j=1; $j<= count($menu_data)-1; $j++){

										 $sub = explode('$', $menu_data[$j]);

										 if($sub[0] !="" && $sub[1] !="" && $sub[2] ==""){

										  $submenus[] = $menu_data[$j];

										 }else{

											$subsubmenu[] = $menu_data[$j];

										 }

									 }

									 $menuidl[]=$menu_data[0];

								  }

							   }

							?>



							<?php

							foreach ($mapping_role_data as $mappingrole) {

							  $permission = $mappingrole['permission_id'];

							  $mastermenu = $mappingrole['menu_master_id'];

							  $roleid = $mappingrole['role_id'];

							  $portlet_id = $mappingrole['portlet_id'];

							}

							?>

						

						<div class="row">

					<div class="col-md-6">

					

					<div class="main-card mb-3 card">

						<div class="card-body"><h5 class="card-title">Mapping Role-Permission</h5>

						<?php $i=1; $j=1; $k=3; $sub=1; $sub_sub=1;

							$mi=1; $mj=1; $mk=1;

						foreach ($master_menu as $menu) { ?>

						<ul id="myUL">

					

					<?php 

					  $mloop_check=0;

					  for($m=0; $m<=count($menuidl)-1; $m++){

						  if($menuidl[$m]==$menu['menu_id']){ $mloop_check++; ?>

					

						   <li><span class="caret"><input type="checkbox" class="check_menu target-div" value="<?php echo $menu['menu_id']; ?>" id="main_menu_id<?php echo $i;?>" name="main_menu_id[]" checked='checked'> <?php echo $menu['menu_description'];?> </span>

						   

					<?php   }   } ?>

					<?php 

					if($mloop_check==0){ ?>

						  <li><span class="caret"><input type="checkbox" class="check_menu target-div" value="<?php echo $menu['menu_id']; ?>" id="main_menu_id<?php echo $i;?>" name="main_menu_id[]"></input>

						  <label for="main_menu_id" class="main_menu_text target-label1"><?php echo $menu['menu_description']; ?></label></span>

					<?php      } ?>

					

							<ul class="nested">

							

							<?php $menuid = $menu['menu_id']; 

								foreach($master_sub_menu as $submenu){

								if($submenu['menu_id']==$menuid){ ?>

							 

							  

							<?php $slopcheck=0; for($ns=0; $ns<=count($submenus)-1; $ns++){ 

							   $submenuids = explode('$', $submenus[$ns]);

							   if($submenuids[0]==$menu['menu_id'] && $submenuids[1]==$submenu['sub_menu_id']){ $slopcheck++; ?>

								 <li> <input type="checkbox" class="check_sub_menu target-div" value="<?php echo $menuid."$".$submenu['sub_menu_id']; ?>" id="sub_menu_id<?php echo $i.".".$sub;?>" name="sub_menu_id[]" checked='checked' ></input>

							  <label for="sub_menu_id" class="main_menu_text target-label2"><?php echo $submenu['sub_menu_description']; ?></label></li>

							<?php   	} }   ?>

							<?php 

								if($slopcheck==0){ ?>

								<li><input type="checkbox" class="check_sub_menu target-div" value="<?php echo $menuid."$".$submenu['sub_menu_id']; ?>" id="sub_menu_id<?php echo $i.".".$sub;?>" name="sub_menu_id[]" ></input>

							  <label for="sub_menu_id" class="main_menu_text target-label2"><?php echo $submenu['sub_menu_description']; ?></label></li>

							<?php    }  ?>



							  

								<?php } } ?>

							</ul>

							

						  </li>

						</ul>

						<?php } ?>

						

					</div>

					</div>

					</div>		

					<input type="hidden" name="menu_count" value="<?php echo $i-1; ?>">

						

						<div class="col-md-6">

							<div class="main-card mb-3 card">

								<div class="card-body"><h5 class="card-title">Mapping Role-Permission</h5>

								<div class="col-md-12">

									<label>Select Role:</label>

									<div class=" position-relative form-group">

										<select class="form-control" name="group_type">

											<option value="">Select Role</option>

											<?php foreach($master_role as $masterrole){?>

											  <option value="<?php echo $masterrole['role_id']; ?>" <?php if($roleid ==$masterrole['role_id']){echo 'selected=selected';}?> ><?php echo $masterrole['role_name']; ?></option>

											<?php } ?>

										</select>

									</div>

								</div>

																

								<div class="col-md-6">

								 <label>Choose Permissions:</label>

								 <?php $i=0; $permission_id = explode('|', $permission); 

									foreach($master_permission as $masterpermission){?>

										<div class="d-inline-block"  <?php if($permission_id[$i]==$masterpermission['permission_id']){ echo 'style="color: green; margin-left:20px"';}else{ echo 'style="margin-left:20px"';}?>>

										<label class="check-task custom-control custom-checkbox d-flex justify-content-center">

										<input type="checkbox" class="custom-control-input" id="customCheck8"  value="<?php echo $masterpermission['permission_id']; ?>"  name="Permission[]" <?php 

									if(in_array($masterpermission['permission_id'],$permission_id)){echo "checked=checked"; echo 'style="background-color: green"';}?> /><span class="custom-control-label"><?php echo $masterpermission['permission_description']; ?></span>

									</label>

									</div>

								 <?php $i++; } ?>

								</div>

																		

								<input type="submit"  value="Update" class="mt-1 btn btn-primary mt-3 pull-right" id="mapp_button" />

								</div>

							</div>

						</div>	

					</div>

					<input type="hidden" name="update_role_id" id="update_role_id" value="<?php echo $roleid; ?>">

						</form>

						

                        <div class="card-body table-responsive table">

                            <div id="table" class="table-editable">

                                <table id="example" class="table table-striped table-bordered" style="width:100%">

                                    <thead>

									<tr>

										<th>Sr.no</th>

										<th>Role Name</th>

										<th>Status</th>

										<th>Action</th>

									</tr>

									</thead>

									<tbody>

									<?php $i=1; foreach($master_role as $mr){?>

									<tr>

										<td><?php echo $i++; ?></td>

										<td><?php echo $mr['role_name']; ?></td>

										<?php if($mr['status']==1){?>

										<td><span class="badge badge-success align-text-bottom ml-1">Active</span></td>

										<?php }else{ ?>

										<td><span class="badge badge-danger align-text-bottom ml-1">Deactive</span></td>

										<?php } ?>

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

        </div>

    </div>

</div>



<script>

var toggler = document.getElementsByClassName("caret");

var i;



for (i = 0; i < toggler.length; i++) {

  toggler[i].addEventListener("click", function() {

    this.parentElement.querySelector(".nested").classList.toggle("active");

    this.classList.toggle("caret-down");

  });

}







$(document).ready(function (){

	$("#mapp_button").click(function (){			

		  var url = "<?php echo base_url() ?>map-role-permission-form-save"; // the script where you handle the form input.

		 

			$.ajax({

				   type: "POST",

				   url: url,

				   data: $("#map_role_form3").serialize(), // serializes the form's elements.

				   success: function(data)

				   {

					 if(data == 0){

					   $('.alert').css('display','block');

					   $('.alert').fadeIn().fadeOut(2000);

					 }

					 if(data == 1){

						location.reload();

					 } 

				   }

				});

			e.preventDefault(); // avoid to execute the actual submit of the form.

	});

});







	$(document).on("change",".check_menu",function(){

		var str=$(this).attr('data-val');

		var a=str.split("|");

		var mid=a[0];

		var sid=a[0]+"."+a[1]; sid=a[1];

		var smid=a[0]+"."+a[1]+"."+a[2];

		if($(this).prop('checked')){

			$('.sub_menu_class'+mid).prop("checked",true);

			$('.sub_sub_menu_class'+mid).prop("checked",true);

		}else{

			$('.sub_menu_class'+mid).prop("checked",false);

			$('.sub_sub_menu_class'+mid).prop("checked",false);

		}

	});





	$(document).on("change",".check_sub_menu",function(){

		var str=$(this).attr('data-val');

		var a=str.split("|");

		var mid=a[0];

		var sid=a[0]+"."+a[1]; sid=a[1];

		var smid=a[0]+"."+a[1]+"."+a[2];

		var flag=0;

		if($(this).prop('checked')){

			$('.main_menu_class'+mid).prop("checked",true);

			$('.check_sub_sub_menu_class'+sid).prop("checked",true);

		}else{

			$('.check_sub_sub_menu_class'+sid).prop("checked",false);

			$('.check__'+mid).each(function(index,item){

			    if($(this).prop("checked")){ flag=1; }

			    else{}

			});

			if(flag==1){

				$('.main_menu_class'+mid).prop("checked",true);

			}else{

				$('.main_menu_class'+mid).prop("checked",false);

			}

		}

	});





	$(document).on("change",".check_sub_sub_menu",function(){

		var str=$(this).attr('data-val');

		var a=str.split("|");

		var mid=a[0];

		var sid=a[0]+"."+a[1]; sid=a[1];

		var smid=a[0]+"."+a[1]+"."+a[2]; smid=a[2];

		var c=mid+""+sid;

		//alert(mid+" "+sid+" "+smid);

		if($(this).prop('checked')){

			$('.main_menu_class'+mid).prop("checked",true);

			$('.check_sub_menu_class'+sid).prop("checked",true);

		}else{

			var flag=0; var flag1=0;

			// code to uncheck sub menu

			$('.check_'+c).each(function(index,item){

			    if($(this).prop("checked")){ flag=1; }

			    else{}

			});

			if(flag==0){

				$('.check_sub_menu_class'+sid).prop("checked",false);

			}

			// code to uncheck main menu

			$('.check__'+mid).each(function(index,item){

			    if($(this).prop("checked")){ flag1=1; }

			    else{}

			});

			if(flag1==1){

				$('.main_menu_class'+mid).prop("checked",true);

			}else{

				$('.main_menu_class'+mid).prop("checked",false);

			}

		}

	});

</script>