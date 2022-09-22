<?php include('temp/hed.php'); ?>
<?php  include ('temp/heder.php');?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                   
					<div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0"> Trainee Reports</h5>
                            <div class="ml-auto d-flex align-items-center">
                               <button onclick="exportTableToExcel('dataTable')">Export Table Data To Excel File</button>
    
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid page__container"> 
                    <div class="card card-form">               
    <table id="dataTable" class="table table-striped table-bordered nowrap table-responsive " cellspacing="0" width="100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th> Trainee Name</th>
				<th>Mobile Number </th>
				<th>Email  </th>
				<th>State Name </th>
				<th>District Name </th>
				<th>Block Name </th>
				<th>Trainer  Name </th>
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
				 <td>Pransi</td>
			
				 <td>Inactive</td>
               
               
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
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>

    
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
   
