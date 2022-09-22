<?php include('temp/hed.php'); ?>
<?php  include ('temp/heder.php');?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0"> Designation Master</h5>
                            <div class="ml-auto d-flex align-items-center">
                               <div class="caret-right pull-right"><a href="add-designation.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add  Designation</a></div>	
                                
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid page__container"> 
                        
    <table id="dataTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th>Designation Name</th>
				 <th>Status</th>
				 <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Supervisor</td>
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
            <tr>
                <td>2</td>
                <td>ANMS</td>
				 <td>Active</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                
            </tr>
			<tr>
                <td>3</td>
                <td>Trainee</td> 
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
            <tr>
                <td>4</td>
                <td>Trainer</td>
				 <td>Active</td>
               <td><a href="#"><i class="fa fa-edit"></i></a></td>
                
            </tr>  
        </tbody>
    </table>
                     
                      </div>
                </div>
            </div>
       
        </div>
		
     

       <?php include('temp/sidebr.php');?>
    

   <?php include('temp/footer.php');?>
   <script>
   $(document).ready(function () {
  $("#dataTable").DataTable({
    searching: false,
    paging: true,
    info: false,
    lengthChange: false
  });
});
   </script>