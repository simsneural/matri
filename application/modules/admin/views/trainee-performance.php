<?php $base_url = base_url() . 'admin_assets/'; ?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                   
					<div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0">Trainee performance </h5>
                            <!-- <div class="ml-auto d-flex align-items-center">
                                <div class="caret-right pull-right"><a href="add-employee-master.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add  Employee</a></div>			
                            </div> -->
                        </div>
                    </div>
					
					
                    <div class="container-fluid page__container"> 
                        
					
                    <div class="card card-form">               
   <table id="example" class="display nowrap table-responsive" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th>Module </th>
                <th>State Name</th>
                <th>District Name</th>
				 <th>Block Name</th>	
                  <th>Sector Name</th>
				 <th>Name of the trainee </th>     
                <th>Name of the trainer  </th> 
                <th>Time in mm:ss for completing module </th> 
                <th>Status</th>
            </tr>
        </thead>
      
        <tbody>
			 <tr>
                <td>1</td>
                <td>Chhattisgarh</td>
				<td>Kondagaon</td>
				<td>Baderajpur</td>
				<td>Vishrampur</td>
                <td>Vishrampur</td>
                <td>Sobha Pandey</td>
                <td>Sobha Pandey</td>
				 <td>7</td>
               
				 <td>Inactive</td>
               
            </tr>

        </tbody>
      
    </table>
	</div>
                       
                      </div>
                </div>
	
            </div>
       
        </div>
		
	
   <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
    
   
