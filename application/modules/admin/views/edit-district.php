<?php $base_url = base_url() . 'admin_assets/'; ?>

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container">
                            <h5> Edit District Master  </h5>
                        </div>
                    </div>
                    <div class="container-fluid page__container">
                        <div class=" card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-6 card-form__body card-body">
                                   <form  action="<?php echo base_url(); ?>update_district_master" method="post">
								   <div class="form-group">
                                   <input  class="form-control"  name="ci_id" type="hidden" value="<?php echo $cities[0]['ci_id'];?>"  id="exampleInputEmail1" placeholder="Enter your Permission  Name ..">
                                      <label for="exampleFormControlSelect1">State Name </label>
                                       <!--<select class="form-control" name="name" id="State">
                                        <option>Uttar Pradesh</option>
                                        <option>Punjab </option>
										<option>Uttarakhand</option>
                                        <option>Jammu & Kashmir  </option>
      
                                          </select>-->
                                          <select class="form-control" name="name" required id="state">
													<option value="">States</option>
													<?php foreach ($state as $st) { ?>
														<option value="<?php echo $st['sid']; ?>"
														 <?php if ($state[0]['state_id'] == $st['sid'])
														  {
															echo  "selected";
														} ?>>
														<?php echo $st['name']; ?>
															</option>
													<?php } ?>
												</select>
                                      
                                         </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">District Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $cities[0]['name']; ?>" id="exampleInputEmail1" placeholder="District Name">
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" name="status" id="status" required>
													<option value="">Select Status</option>
													<option value="1" <?php if ($cities[0]['status'] == 1) {
																			echo  "selected";
																		} ?>>Active</option>

													<option value="2" <?php if ($cities[0]['status'] == 2) {
																			echo  "selected";
																		} ?>>Inactive</option>

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
       
