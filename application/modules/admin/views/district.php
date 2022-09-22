<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">
    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0">District Master</h5>
            <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="<?php echo base_url();?>add-district"
                        class="btn btn-primary"><i class="fa fa-plus"></i> Add District</a></div>

            </div>
        </div>
    </div>
    <div class="container-fluid page__container">

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
                            <div class="form-group">
                                <!-- <label for="exampleFormControlSelect1">State Name </label> -->

                                <select class="form-control" name="state_name" id="state" required>

                                    <option value=""> Select States</option>
                                    <?php foreach ($states as $sts) { ?>
                                    <option value="<?php echo $sts['sid']; ?>"><?php echo $sts['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
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
            <table id="example1" class="display nowrap " style="width:100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>S.No</th>
                        <th>State Name</th>
                        <th>District Name</th>
                        <th>Total Blocks</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($district_data as $ct){
							$ci_id=$ct['ci_id']; 
							$encoded_id=rtrim(strtr(base64_encode($ci_id), '+/', '-_'), '=');
                            $t_block=$this->Crud_modal->check_numrow("block",'ci_id='.$ci_id);
							?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $ct['state_name']; ?></td>
                        <td><?php echo $ct['name']; ?></td>
                        <td><?php echo $t_block;; ?></td>
                        <?php if($ct['status']==1){?>
                        <td><span class="badge badge-success align-text-bottom ml-1">Active</span></td>
                        <?php }else{ ?>
                        <td><span class="badge badge-danger align-text-bottom ml-1">Deactive</span></td>
                        <?php } ?>
                        <td><a href="<?php echo base_url()?>edit-district/<?php echo $encoded_id ;?>"
                                onClick="javascript:if(confirm('Do You Want to Edit District ?')){return true;}else{return false}"><i
                                    class="fa fa-edit"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <!--<tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>-->
            </table>
        </div>

    </div>
</div>
</div>

</div>




<!-- <script>
$(document).ready(function() {
    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [

        ]
    });
});
</script>
<script>
$('#example1').dataTable({
    paging: false,
    searching: false
});
</script> -->

<script>
    $(document).ready(function () {
    $('#example1').DataTable({
        order: [[3, 'desc']],
    });
});
</script>