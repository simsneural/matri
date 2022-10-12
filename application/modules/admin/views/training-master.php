<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">
    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0"> Training Master</h5>
            <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="<?php echo base_url();?>add-training-master" class="btn btn-primary">
                    <i class="fa fa-plus"></i>Add Training</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid page__container">
        <div class="card card-form">
            <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>S.No</th>
                        <th>Training Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $sr=1; foreach ($trainings as $training) {?>
                    <tr>
                        <td><?php echo $sr++;?></td>
                        <td><?php echo $training['training_name']?></td>
                        <td><?php echo $training['status']==1?'Active':'Inactive';?></td>
                        <td><a href="#"><i class="fa fa-edit"></i></a></td>
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
$(document).ready(function() {
    $("#dataTable").DataTable({
        searching: false,
        paging: true,
        info: false,
        lengthChange: false
    });
});
</script>