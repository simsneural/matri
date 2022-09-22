<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">

    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0"> Employee Reports</h5>
            <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="add-trainee-master.php"></a></div>
            </div>
        </div>
    </div>


    <div class="container-fluid page__container">

        <div class="card card-form">
            <table id="example1" class="display nowrap table-responsive" style="width:100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>S.No</th>
                        <th>Employee Name</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>State Name</th>
                        <th>District Name</th>
                        <th>Block Name</th>

                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Amisha Singh</td>
                        <td>6388984748</td>
                        <td>amisha.s@neuralinfo.org</td>
                        <td>Uttar Pradesh</td>
                        <td>Kanpur</td>
                        <td>Kanpur</td>

                        <td>Inactive</td>


                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Shalini Mishra</td>
                        <td>895387784</td>
                        <td>shalini123@gmail.com</td>
                        <td>Uttar Pradesh</td>
                        <td>Lucknow</td>
                        <td>Lucknow</td>

                        <td>Inactive</td>

                    </tr>


                </tbody>
            </table>
        </div>

    </div>
</div>

</div>

</div>




<?php include('temp/sidebr.php');?>


<?php include('temp/footer.php');?>
<script>
$(document).ready(function() {
    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });
});
</script>