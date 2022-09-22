<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">


    <div class="page__heading border-bottom">
        <div class="container-fluid page__container">
            <h5> Add Permission Master </h5>

        </div>
    </div>

    <div class="container-fluid page__container">
        <div class=" card-form">
            <div class="row no-gutters">
                <div class="col-lg-6 card-form__body card-body">
                    <form action="<?php echo base_url(); ?>insert_permission_master" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permission Name</label>
                            <input type="text" class="form-control" name="permission_description" id="exampleInputEmail1"
                                placeholder="Enter your Permission  Name ..">

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