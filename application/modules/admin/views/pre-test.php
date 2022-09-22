<?php $base_url = base_url() . 'admin_assets/'; ?>
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">
                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h5 class="mb-0"> Pre-Test & Post-Test</h5>
                            <div class="ml-auto d-flex align-items-center">
                                <div class="caret-right pull-right"><a href="<?php echo base_url();?>add-pre-test" class="btn btn-primary"><i class="fa fa-plus"></i> Add Pre & Post Test  </a></div>	
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid page__container"> 
          <div class="card card-form">                 
    <table id="dataTable" class="table table-striped table-bordered nowrap table-responsive " cellspacing="0" width="100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>S.No</th>
                <th>Question</th>
				<th>Option1</th>	
				<th>Option2</th>	
				 <th>Option3</th>
				 <th>Option4</th>
				  <th>Right Answer</th>
				 <th>Status</th>
				 <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>What does it tell if at the end of the month some cards are left in the pocket of the tracking bag?</td>
				<td>Some beneficiaries missed out</td>
				<td>Complete vaccination</td>
				 <td>Deceased beneficiary</td>
					<td>Lie on back after feeding</td>
				<td>Deceased beneficiary</td>
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			  <tr>
                <td>2</td>
                <td>What does it tell if at the end of the month some cards are left in the pocket of the tracking bag?</td>
				<td>Some beneficiaries missed out</td>
				<td>Complete vaccination</td>
				 <td>Deceased beneficiary</td>
					<td>Lie on back after feeding</td>
				<td>Deceased beneficiary</td>
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
            </tr>
			
			  <tr>
                <td>3</td>
                <td>What does it tell if at the end of the month some cards are left in the pocket of the tracking bag?</td>
				<td>Some beneficiaries missed out</td>
				<td>Complete vaccination</td>
				 <td>Deceased beneficiary</td>
					<td>Lie on back after feeding</td>
				<td>Deceased beneficiary</td>
				 <td>Inactive</td>
                <td><a href="#"><i class="fa fa-edit"></i></a></td>
               
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
   $(document).ready(function () {
  $("#dataTable").DataTable({
    searching: false,
    paging: true,
    info: false,
    lengthChange: false
  });
});
   </script>
   
   
   
  