<?php $base_url = base_url() . 'admin_assets/'; ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
    style="padding-top: 60px;">

    <div class="page__heading border-bottom">
        <div class="container-fluid page__container d-flex align-items-center">
            <h5 class="mb-0"> Trainee Transfer</h5>
            <div class="ml-auto d-flex align-items-center">
                <div class="caret-right pull-right"><a href="add-trainee-master.php"></a></div>
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
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Sector
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                 <option value="">Sector</option> 
                                <option value="1">Vishrampuri </option>
                                 <option value="1">Sonabal </option> 
                                 <option value="1">Singanpur </option> 
                                 <option value="1">	Shampur </option> 
                                 <option value="1">	Salna </option> 
                                 <option value="1">Randhna </option> 
                                 <option value="1">Pharasgaon </option> 
                                 <option value="1">Mardapal </option> 
                                 <option value="1">Makdi</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                Sub Health Center
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                 <option value="">Sector</option> 
                                <option value="1">Vishrampuri </option>
                                 <option value="1">Sonabal </option> 
                                 <option value="1">Singanpur </option> 
                                 <option value="1">	Shampur </option> 
                                 <option value="1">	Salna </option> 
                                 <option value="1">Randhna </option> 
                                 <option value="1">Pharasgaon </option> 
                                 <option value="1">Mardapal </option> 
                                 <option value="1">Makdi</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>
                                <b>
                                    Trainer Name
                                </b>
                            </label>
                            <select class="form-control" name="sid" id="sid">
                                 <option value="">Select Trainer</option> 
                                <option value="1">Sobha Pandey </option>
                                 <option value="1">Ramdas Baghel </option> 
                                 <option value="1">	Karan Kavde </option> 
                                 <option value="1">	Laxmi Das </option> 
                                 <option value="1">	Rishi Ram Netam </option> 
                                 <option value="1">Baliram Vatti </option> 
                                 <option value="1">Mannu Ram Baghel </option> 
                                 <option value="1">Digeshwar Sahu </option> 
                                 <option value="1">Devram Netam</option>
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
            <table id="example1" class="display nowrap table-responsive " style="width:100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>S.No</th>              
                        <th>State</th>
                        <th>District </th>
                        <th>Block </th>
                        <th>Sector</th>
                        <th>Sub Health Centre</th>
                        <th>Trainee Name</th>
                        <th>Pre-Test Marks</th>
                        <th>Time taken (mm:ss)</th>
                        <th>Trainer Name</th>
                        <th>Module completed </th>
                         <th>Module 1</th> 
                         <th>Module 2</th> 
                         <th>Module 3</th>
                         <th>Module 4</th> 
                         <th>Module 5</th>  
                         <th>Module 6</th>
                         <th>Module 7</th> 
                         <th>Module 8</th>
                         <th>Module 9</th> 
                         <th>Module 10</th>  
                         <th>Module 11</th> 
                         <th>Module 12</th> 
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Chhattisgarh</td>
                        <td>Narayanpur</td>
                        <td>Orchha</td>
                        <td>Bakulwahi</td>
                        <td>Badejamri</td>
                        <td>Amisha Singh</td>
                        <td>20</td>
                        <td>15</td>
                        <td>Thaneshwar Prasad Diwan</td>
                        <td>5</td>
                        <td>20</td>
                        <td>30</td>
                        <td>25</td>
                        <td>35</td>
                        <td>15</td>
                        <td>23</td>
                        <td>24</td>
                        <td>46</td>
                        <td>21</td>
                        <td>26</td>
                        <td>42</td>
                        <td>29</td>
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
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>