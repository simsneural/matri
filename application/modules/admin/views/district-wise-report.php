<?php $base_url = base_url() . 'admin_assets/'; ?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                   
					<div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0">District Wise Report</h5>
                            <!-- <div class="ml-auto d-flex align-items-center">
                                <div class="caret-right pull-right"><a href="add-employee-master.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add  Employee</a></div>			
                            </div> -->
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
                            <select class="form-control" name="sid" id="sid">
                                 <option value="">States</option> 
                                <option value="7">Chhattisgarh </option> 
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    District
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                 <option value="">District</option> 
                              
                                 <option value="1">Narayanpur </option> 
                                 <option value="2">Kondagaon </option> 
                                 <option value="3">Dantewada (South Bastar) </option> 
                                 <option value="4">Bijapur </option> 
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Block
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                 <option value="">Block</option> 
                                <option value="1">Katekalyan </option>
                                 <option value="1">Keshkal </option> 
                                 <option value="1">Baderajpur </option> 
                                 <option value="1">	Kondagaon </option> 
                                 <option value="1">	Pharasgaon </option> 
                                 <option value="1">Makdi </option> 
                                 <option value="1">Dantewada </option> 
                                 <option value="1">Kuakonda </option> 
                                 <option value="1">Geedam</option>
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
   <table id="example" class="display nowrap table-responsive" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th>State Name</th>
                <th>District Name</th>
				 <th>Block Name</th>
				 <th>No. of Trainee</th>  
                <th>% Trainee completed Module 1</th>
                <th>% Trainee completed Module 2</th>
                <th>% Trainee completed Module 3</th>
                <th>% Trainee completed Module 4</th>
                <th>% Trainee completed Module 5</th>
                <th>% Trainee completed Module 6</th>
                <th>% Trainee completed Module 7</th>
                <th>% Trainee completed Module 8</th>
                <th>% Trainee completed Module 9</th>
                <th>% Trainee completed Module 10</th>
                <th>% Trainee completed Module 11</th>
                <th>% Trainee completed Module 12</th>
                <th>Average performance (average of all modules performance)  </th> 
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
                <td>Sobha Pandey</td>
				 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
                 <td>7</td>
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
		
		
     

   <!-- <script>
    $(document).ready(function () {
    $('#example').DataTable({
        order: [[3, 'desc']],
    });
});
</script> -->

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



    
   
