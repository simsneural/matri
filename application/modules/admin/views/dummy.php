<?php include('temp/hed.php'); ?>
<?php  include ('temp/heder.php');?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                     <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Trainee Master</h1>
                            <div class="ml-auto d-flex align-items-center">
                              	<div class="caret-right pull-right"><a href="add-trainee-master.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add  Trainee</a></div>			
                                
                            </div>
                        </div>
                    </div>
                  <div class="container-fluid page__container"> 
					
                    <div class="card card-form">               
   <table id="example" class="display nowrap  table-responsive" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
				 <th>Trainee Name</th>
				 <th>Mobile Number</th>
				  <th>Email</th>
                <th>State Name</th>
				 <th>District Name</th>
				  <th>Block Name</th>
				   <th>Trainer  Name</th>
                <th>Status</th>
				 <th>Action</th>
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
				 <td>Pransi</td>
			
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			 <tr>
                <td>2</td>
                <td>Amrita Singh</td>
				<td>6388984748</td>
				<td>amisha.s@neuralinfo.org</td>
                <td>Uttar Pradesh</td>
				 <td>Kanpur</td>
				 <td>Kanpur</td>
				  <td>Abhishek</td>
				
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			 <tr>
                <td>3</td>
                <td>Anjali Mishra</td>
				<td>6388984748</td>
				<td>amisha.s@neuralinfo.org</td>
                <td>Uttar Pradesh</td>
				 <td>Kanpur</td>
				 <td>Kanpur</td>
				  <td>Ravi</td>
			
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			 <tr>
                <td>4</td>
                <td>Anjali Pathak</td>
				<td>6388984748</td>
				<td>amisha.s@neuralinfo.org</td>
                <td>Uttar Pradesh</td>
				 <td>Kanpur</td>
				 <td>Kanpur</td>
				  <td>Rakesh</td>
				
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			 <tr>
                <td>5</td>
                <td>Abhinav Singh</td>
				<td>6388984748</td>
				<td>amisha.s@neuralinfo.org</td>
                <td>Uttar Pradesh</td>
				 <td>Kanpur</td>
				 <td>Kanpur</td>
				  <td>Ramesh</td>
				
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			 <tr>
                <td>6</td>
                <td>Ragini Maurya</td>
				<td>6388984748</td>
				<td>amisha.s@neuralinfo.org</td>
                <td>Uttar Pradesh</td>
				 <td>Kanpur</td>
				 <td>Kanpur</td>
				  <td>Ravi</td>
			
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			 <tr>
                <td>7</td>
                <td>Akanksha Rajput</td>
				<td>6388984748</td>
				<td>amisha.s@neuralinfo.org</td>
                <td>Uttar Pradesh</td>
				 <td>Kanpur</td>
				 <td>Kanpur</td>
				  <td>Abhishek</td>
				
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
            
            
            
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
		
     

       <?php include('temp/sidebr.php');?>
    

   <?php include('temp/footer.php');?>
  <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
        ]
    } );
} );
</script>
