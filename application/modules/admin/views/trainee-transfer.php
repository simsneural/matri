<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">
    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0">Trainee Transfer</h5>
            <!-- <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="add-trainee-master.php" class="btn btn-primary"><i
                            class="fa fa-plus"></i> Add Trainee</a></div>

            </div> -->
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card card-form mb-3 ">
            <div class="card-body">
                <b>From</b>
                <form>
                    <div class="row">

                        <div class="col-md-2">
                            <label>
                                <b>
                                    State
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid" required>
                                <option value=""> Select States</option>
                                <?php foreach ($states as $st) { ?>
                                <option value="<?php echo $st['sid']; ?>"><?php echo $st['name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>






                        <div class="col-md-2">
                            <label>
                                <b>
                                    District
                                </b>
                            </label>
                            <select class="form-control" name="name" id="city_idss">
                                <option value="">City/District</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Block
                                </b>
                            </label>
                            <select class="form-control" name="block_id" id="block_idss">
                                <option value=""> Select Block</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Sector
                                </b>
                            </label>
                            <select class="form-control" name="sector_name" id="sector_idss">
                                <option value=""> Select Sector</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Sub Health Center
                                </b>
                            </label>
                            <select class="form-control" name="sub_sector_name" id="sub_sector_idss">
                                <option value=""> Select Sub Sector</option>
                            </select>
                        </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card card-form mb-3 ">
            <div class="card-body">
                <b>To Whom</b>
                <form>
                    <div class="row">


                        <div class="col-md-4">
                            <input type="radio" id="html" name="fav_language" value="HTML">

                            <label>
                                <b>
                                    Trainer
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                <option value="">Trainer</option>
                                <option value="7">Sobha Pandey </option>
                                <option value="7">Rajendra Prasad Sharma</option>
                                <option value="7">Sanjay Naidu </option>
                                <option value="7">Dharmendra Haldar </option>
                                <option value="7">Dev Kumar Sahu </option>
                                <option value="7">Rajesh Usendi</option>
                                <option value="7">Geeta Chouhan </option>
                                <option value="7">Bajaru Ram Sori</option>
                                <option value="7">Prabhas Pal</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="radio" id="html" name="fav_language" value="HTML">

                            <label>
                                <b>
                                    Trainee
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                <option value="">Trainee</option>
                                <option value="7">Priya Sarkar</option>
                                <option value="7">Yamini Dewangan</option>
                                <option value="7">Rajeshwari Durga</option>
                                <option value="7">Sakuntala Shinde</option>
                                <option value="7">Chittam Meena Rao</option>
                                <option value="7">Annpura Sen</option>
                                <option value="7">Anita Jhade</option>
                                <option value="7">Anamika Vetti</option>
                                <option value="7">Dileshwari Netam</option>
                            </select>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="card card-form mb-3 ">
            <div class="card-body">
                <form>
                    <div class="row">

                        <div class="col-md-2">
                            <label>
                                <b>
                                    State
                                </b>
                            </label>
                            <select class="form-control" name="siid" id="siid" required>
                                <option value=""> Select States</option>
                                <?php foreach ($states as $st) { ?>
                                <option value="<?php echo $st['sid']; ?>"><?php echo $st['name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    District
                                </b>
                            </label>
                            <select class="form-control" name="name" id="city_trainee">
                                <option value="">City/District</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Block
                                </b>
                            </label>
                            <select class="form-control" name="block_id" id="block_trainee">
                                <option value=""> Select Block</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Sector
                                </b>
                            </label>
                            <select class="form-control" name="sector_name" id="sector_trainee">
                                <option value=""> Select Sector</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Sub Health Center
                                </b>
                            </label>
                            <select class="form-control" name="sub_sector_name" id="sub_sector_idss1">
                                <option value=""> Select Sub Health Center</option>
                            </select>
                        </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-primary">
                                Transefer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>
</div>

</div>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [

        ]
    });
});
</script>

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
    var sector_id = $(this).val();
    datastr = {
        sector_id: sector_id
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



<script>
$("#siid").change(function() {
    var siid = $(this).val();
    datastr = {
        siid: siid
    };
    $.ajax({
        url: '<?php echo base_url() ?>get-city-trainee',
        type: 'post',
        data: datastr,
        success: function(response) { 
           // alert (response);
            $("#city_trainee").html(response);
            $('select').selectpicker('refresh');
        }
    });
});
</script>

<script>
$("#city_trainee").change(function() {
    var ci_id = $(this).val();
    datastr = {
        ci_id: ci_id
    };
    $.ajax({
        url: '<?php echo base_url() ?>get-block-trainee',
        type: 'post',
        data: datastr,
        success: function(response) { 
            alert (response);
            $("#block_trainee").html(response);
            $('select').selectpicker('refresh');
        }
    });
});
</script>


<script>
$("#block_trainee").change(function() {
    var id = $(this).val();
    datastr = {
        id: id
    };
    $.ajax({
        url: '<?php echo base_url() ?>get_sector_trainee',
        type: 'post',
        data: datastr,
        success: function(response) {
            alert (response);
            $("#sector_trainee").html(response);
            $('select').selectpicker('refresh');
        }
    });
});
</script>





