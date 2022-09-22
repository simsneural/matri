<?php  $base_url=base_url().'admin_assets/';?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">

    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0"> Employee Master</h5>
            <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="<?php echo base_url();?>add-employee-master"
                        class="btn btn-primary"><i class="fa fa-plus"></i> Add Employee</a></div>
            </div>
        </div>
    </div>


    <div class="container-fluid page__container">
    <div class="card card-form mb-3 ">
            <div class="card-body">
                <form action="<?php echo base_url()?>employee-master" method="post">
                    <div class="row">
                        <div class="col-md-2">
                            <label>
                                <b>
                                    State
                                </b>
                            </label>
                            <select class="form-control" name="state_name" id="sid" required>
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
                            <select class="form-control" name="district_name" id="city_idss">
                                <option value="">City/District</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Block
                                </b>
                            </label>
                            <select class="form-control" name="b_name" id="block_idss">
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
                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card card-form">
            <table id="example1" class="display nowrap table-responsive" style="width:100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>S.No</th>
                        <th>Employee Name</th>
                        <th>Role Name</th>
                        <th>Mobile Number</th>
                        <th>Gender</th>
                        <th>State Name</th>
                        <th>District Name</th>
                        <th>Block Name</th>
                        <th>Sector Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($district_data as $e){
							$emp_id  =$e['emp_id']; 
							$encoded_id=rtrim(strtr(base64_encode($emp_id ), '+/', '-_'), '=');
							?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $e['emp_name']; ?></td>
                        <td><?php echo $e['role_name']; ?></td>
                        <td><?php echo $e['emp_contact']; ?></td>
                        <td><?php echo $e['emp_gender']; ?></td>
                        <td><?php echo $e['state_name']; ?></td>
                        <td><?php echo $e['district_name']; ?></td>
                        <td><?php echo $e['b_name']; ?></td>
                        <td><?php echo $e['sector_name']; ?></td>
                        <?php if($e['status']==1){?>
                        <td><span class="badge badge-success align-text-bottom ml-1">Active</span></td>
                        <?php }else{ ?>
                        <td><span class="badge badge-danger align-text-bottom ml-1">Deactive</span></td>
                        <?php } ?>
                        <td><a href="<?php echo base_url()?>edit-sector/<?php echo $encoded_id ;?>"
                                onClick="javascript:if(confirm('Do You Want to Edit Block ?')){return true;}else{return false}"><i
                                    class="fa fa-edit"></i></a></td>
                    </tr>
                    <?php } ?>


                </tbody>
              
            </table>
        </div>

    </div>
</div>

</div>

</div>

<script>
    $(document).ready(function () {
    $('#example1').DataTable({
        order: [[3, 'desc']],
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