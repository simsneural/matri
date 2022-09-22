                    <?php $base_url = base_url() . 'admin_assets/'; ?>

                    <!-- Header Layout Content -->
                    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
                        style="padding-top: 60px;">


                        <div class="page__heading border-bottom">
                            <div class="container-fluid page__container">
                                <h5> Add Block Master</h5>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class=" card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-6 card-form__body card-body">
                                        <form action="<?php echo base_url(); ?>insert_block_master" method="post">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">State Name </label>
                                                <!-- <select class="form-control" name="state_name" id="state" required>
                                                     <option value="">Select State</option> 
                                                    <?php foreach ($states as $sts) { ?>
                                                    <option value="<?php echo $sts['sid']; ?>">
                                                        <?php echo $sts['name']; ?></option>
                                                    <?php } ?>
                                                </select> -->
                                                <select class="form-control" name="state_name" id="sid" required>
													 <option value=""> Select  States</option> 
													<?php foreach ($states as $st) { ?>
														<option value="<?php echo $st['sid']; ?>"><?php echo $st['name']; ?></option>
													<?php } ?>
												</select>
                                            </div>
                                            <div class="form-group">
                                          <label for="exampleFormControlSelect1">District Name </label>
                                          <!-- <select class="form-control" name="name" id="city" required >
                                                    <option value="">Select District</option>
                                                    <?php foreach ($cities as $ct) { ?>
                                                    <option value="<?php echo $ct['ci_id ']; ?>">
                                                        <?php echo $ct['name']; ?></option>
                                                    <?php } ?>
                                                </select> -->
                                                <select class="form-control" name="name" id="city_idss">
													<option value="">City/District</option>
												</select>

                                             </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Block Name</label>
                                                <input type="text" class="form-control" name="block_name"
                                                    id="exampleInputEmail1" placeholder="Block Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Status</label>
                                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                                    <option value="">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>

                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>


                    </div>

                    </div>

    <script>
		$("#sid").change(function() {
			var sid = $(this).val();
			datastr = {
				sid: sid
			};
			$.ajax({
				url: '<?php echo base_url() ?>get-city',
				type: 'post',
				data: datastr,
				success: function(response) { //alert (response);
					$("#city_idss").html(response);
					$('select').selectpicker('refresh');
				}
			});
		});
	</script>
     