<?php $base_url = base_url() . 'admin_assets/'; ?>

               <body class="layout-login-centered-boxed">
    <div class="layout-login-centered-boxed__form">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light">
            <a href="index.html" class="navbar-brand text-center mb-2 mr-0" style="min-width: 0">
                <!-- LOGO -->
               <img src="<?php echo $base_url;?>images\logos\matri_2.png" alt="Logo">

                <span style=" margin-left:-38px;">MATMUNCH</span>
            </a>
        </div>
        <?php
                            if ($this->session->userdata('error')) {
                            ?>
                                <center>
                                    <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                                        <strong>Error!</strong> <?php echo $this->session->userdata('error'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </center>
                            <?php $this->session->unset_userdata('error');
                            } ?>
        <div class="card card-body">



            <form action="#" method="post" novalidate>
                <div class="form-group">
                    <label class="text-label" for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2" name="email" type="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label" for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2" name="password" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" name="signin" value="signin" type="submit">Login</button>
                </div>
                 <!-- <div class="form-group text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" id="remember">
                        <label class="custom-control-label" for="remember">Remember me for 30 days</label>
                    </div>
                </div>-->
                <div class="form-group text-center">
                    <a href="#">Forgot password?</a> <br>
                   
                </div>
            </form>
        </div>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>




</body>
    

   
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