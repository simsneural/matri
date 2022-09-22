<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">

    <div class="page__heading border-bottom">
        <div class="container-fluid page__container">
            <h5> Add Trainee Master</h5>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-12 card-form__body card-body">
                    <form action="<?php echo base_url(); ?>insert_trainee_master" method="post">
                        <div>
                            <div class="form-row">
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleInputEmail1">Trainee Name</label>
                                        <input type="text" name="trainee_name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Trainee Name ">
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="trainee_email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Email">
                                    </div>
                                </div> -->
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="text" name="trainee_mobile" class="form-control" id="exampleInputEmail1"
                                            placeholder="Mobile Number ">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleInputEmail1">Gender</label>
                                        <select class="form-control" name="trainee_gender" id="exampleFormControlSelect1">
                                        <option value=""> Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleInputEmail1">Trainer Name</label>
                                        <select class="form-control" name="trainer_id" id="emp_id" required>
                                            <option value=""> Select Trainer </option>
                                            <?php foreach ($employee as $e) { ?>
                                            <option value="<?php echo $e['emp_id']; ?>">
                                                <?php echo $e['emp_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">State Name </label>
                                        <select class="form-control" name="sid" id="sid" required>
                                            <option value=""> Select States</option>
                                            <?php foreach ($states as $st) { ?>
                                            <option value="<?php echo $st['sid']; ?>"><?php echo $st['name']; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">District Name </label>
                                        <select class="form-control" name="name" id="city_idss">
                                            <option value="">City/District</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">Block Name </label>
                                        <select class="form-control" name="block_id" id="block_idss">
                                            <option value=""> Select Block</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">Sector Name</label>
                                        <select class="form-control" name="sector_name" id="sector_idss">
                                            <option value=""> Select Sector</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">Sub Health Center</label>
                                        <select class="form-control" name="sub_sector_name" id="sub_sector_idss">
                                            <option value="">Sub Health Center</option>
                                        </select>
                                    </div>
                                </div>
<!-- 
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">Trainer Name</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Akash</option>
                                            <option>Abhishek</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                                        <option value=""> Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>



                            </div>
   
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
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

<script>
$("#city_idss").change(function() {
    var ci_id = $(this).val();
    datastr = {
        ci_id: ci_id
    };
    $.ajax({
        url: '<?php echo base_url() ?>get-block',
        type: 'post',
        data: datastr,
        success: function(response) { //alert (response);
            $("#block_idss").html(response);
            $('select').selectpicker('refresh');
        }
    });
});
</script>


<script>
$("#block_idss").change(function() {
    var id = $(this).val();
    datastr = {
        id: id
    };
    $.ajax({
        url: '<?php echo base_url() ?>get-sector',
        type: 'post',
        data: datastr,
        success: function(response) {
            //alert (response);
            $("#sector_idss").html(response);
            $('select').selectpicker('refresh');
        }
    });
});
</script>

<script>
$("#sector_idss").change(function() {
    var sector_id  = $(this).val();
    datastr = {
        sector_id:sector_id 
    };
    $.ajax({
        url: '<?php echo base_url() ?>get-sub-sector',
        type: 'post',
        data: datastr,
        success: function(response) {
            //alert (response);
            $("#sub_sector_idss").html(response);
            $('select').selectpicker('refresh');
        }
    });
});
</script>