<?php $base_url = base_url() . 'admin_assets/'; ?>

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container">
                            <h5> Edit State Master  </h5>
                        </div>
                    </div>

                    <div class="container-fluid page__container">
                        <div class=" card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-6 card-form__body card-body">
                                   <form action="<?php echo base_url(); ?>update_state_master" method="post">
                                   <div class="form-group">
                                           
                                            <input type="hidden" name="sid"  value="<?php echo $states[0]['sid']; ?>" class="form-control"  id="exampleInputEmail1" placeholder="State  Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">State Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $states[0]['name']; ?>"  id="exampleInputEmail1" placeholder="State  Name">
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputEmail1">Abbreviation </label>
                                            <input type="text" class="form-control" name="code"  value="<?php echo $states[0]['code']; ?>"  id="exampleInputEmail1" placeholder="Abbreviation Name">
                                        </div>
                                        <div class="form-group">
                                       <label for="exampleFormControlSelect1">Status</label>
                                       <select class="form-control" name="status" id="exampleFormControlSelect1">
									       <option value="">Select Status</option>
                                           <option value="1" <?php if ($state[0]['status'] == 1) {
																	echo  "selected";
																} ?>>Active</option>
											<option value="0" <?php if ($state[0]['status'] == 0) {
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
       

      