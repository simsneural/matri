<?php $base_url = base_url() . 'admin_assets/'; ?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">


    <div class="page__heading border-bottom">
        <div class="container-fluid page__container">
            <h5>Edit  Role Master </h5>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class=" card-form">
            <div class="row no-gutters">
                <div class="col-lg-6 card-form__body card-body">
                    <form action="<?php echo base_url(); ?>update_role" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role Name</label>
                            <input type="text" name="role_name"  value="<?php echo $master_role[0]['role_id'];?>" class="form-control" id="exampleInputEmail1"
                                placeholder="Role Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role Name</label>
                            <input type="text" name="role_name"  value="<?php echo $master_role[0]['role_name'];?>" class="form-control" id="exampleInputEmail1"
                                placeholder="Role Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status" id="exampleFormControlSelect1">
                                <option value="">Select Status</option>
                                <option value="1" <?php if ($permission[0]['status']==1){ echo  "selected";} ?>>Active</option>

								<option value="2" <?php if ($permission[0]['status']==2){ echo  "selected";} ?>>Deactive</option>

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