<?php  $base_url=base_url().'admin_assets/';?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">

    <div class="page__heading border-bottom">
        <div class="container-fluid page__container">
            <h5> Add  Sub Sector Master </h5>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="card card-form">
            <div class="row no-gutters">
                <!--<div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Form Validation</strong></p>
                                    <p class="text-muted">Provide valuable, actionable feedback to your users with HTML5 form validation. Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code> classes.</p>
                                </div>-->
                <div class="col-lg-12 card-form__body card-body">
                    <form action="<?php echo base_url(); ?>insert_sub_sector" method="post">
                        <div>
                            <div class="form-row">
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">District Name </label>

                                        <select class="form-control" name="city_id" id="city_idss">
                                            <option value="">City/District</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Block Name </label>
                                        <select class="form-control" name="block_id" id="block_idss">
                                            <option value=""> Select Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Sector</label>
                                        <select class="form-control" name="sector_name" id="sector_idss">
                                            <option value=""> Select Sector</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Sub Sector Name</label>
                                        <input type="text" name="sub_sector_name" class="form-control"
                                            id="exampleInputEmail1" placeholder="Sector Name ">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                                            <option value="">Select Status</option>
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