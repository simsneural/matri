<?php $base_url = base_url() . 'admin_assets/'; ?>


<style>
    .slide-menu {
        list-style: none;
        text-color: #fff;
    }
</style>
<style>
    .slide-menu1 {
        list-style: none;
        text-color: #fff;
    }
    ul .slide-menu li {
        padding-bottom: 3px;
    }
    ul .slide-menu1 li {
        padding-bottom: 3px;
    }
</style>
<style>
    .slide-menu2 {
        list-style: none;
        text-color: #fff;
    }
    ul .slide-menu li {
        padding-bottom: 3px;
    }
    ul .slide-menu1 li {
        padding-bottom: 3px;
    }
</style>
<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark sidebar-left bg-dark-gray" data-perfect-scrollbar>

            <div class="d-flex align-items-center sidebar-p-a sidebar-account flex-shrink-0">
                <a href="<?php echo base_url(); ?>index" class="flex d-flex align-items-center text-underline-0">
                    <span class="mr-3">
                        <!-- LOGO -->
                        <img src="<?php echo $base_url; ?>images\logos\matri_2.png" alt="Logo">
                    </span>
                    <span class="flex d-flex flex-column">
                        <span class="sidebar-brand" style="margin-left: -42px;">MATMUNCH </span>

                    </span>
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active">
                    <a class="sidebar-menu-button" href="<?php echo base_url(); ?>index"">

                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">photo_filter</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-block p-0">
                <ul class="sidebar-menu mt-0">
                    <li class="sidebar-menu-item" id="side-menu">
                        <a class="sidebar-menu-button" id="flip" href="javascript:void(0);">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>
                            <span class="sidebar-menu-text">Master Setting</span>
                        </a>
                        <ul class="slide-menu" style="margin-left: 30px; font-size:13px;">

                            <li class="sub_li"><a href="<?php echo base_url(); ?>role-master" class="slide-item text-white"> Role Master </a></li>
                            <!-- <li><a href="self-task-daily-report" class="slide-item"> Self Task Daily Report</a></li> -->
                            <li class="sub_li"><a href="<?php echo base_url();?>permission" class="slide-item text-white"> Permission Master</a></li>
                            <li class="sub_li"><a href="<?php echo base_url();?>mapping-role-permission" class="slide-item text-white"> Mapping Role & Permission</a></li>

                            <li class="sidebar-menu-item">
                    <!--  <li class="sub_li"><a href="designation.php" class="slide-item text-white"> Designation</a></li>-->
                            <li class="sub_li"><a href="<?php echo base_url();?>state" class="slide-item text-white"> State</a></li>
							<li class="sub_li"><a href="<?php echo base_url();?>district" class="slide-item text-white"> District</a></li>
                            <li class="sub_li"><a href="<?php echo base_url();?>block" class="slide-item text-white">Block</a></li>
							 <li class="sub_li"><a href="<?php echo base_url();?>sector" class="slide-item text-white">Sector</a></li>
							 <li class="sub_li"><a href="<?php echo base_url();?>sub-sector" class="slide-item text-white">Sub-Sector</a></li>
                            
                            <li class="sub_li"><a href="<?php echo base_url();?>employee-master" class="slide-item text-white">Employee Master </a></li>
							 <li class="sub_li"><a href="<?php echo base_url();?>trainee-master" class="slide-item text-white"> Trainee Master </a></li>
							  <!-- <li class="sub_li"><a href="<?php echo base_url();?>mapping-trainer-anms" class="slide-item text-white"> Trainer Mapping </a></li> -->
                              <li class="sub_li"><a href="<?php echo base_url();?>trainee-transfer" class="slide-item text-white"> Trainee Transfer </a></li>
                            <!-- <li><a href="self-task-view-daily-report" class="slide-item"> View Self Task Daily Report</a></li> -->
                        </ul>

                    </li>
                    <li class="sidebar-menu-item" id="side-menu1">
                        <a class="sidebar-menu-button" id="flip" href="javascript:void(0);">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>
                            <span class="sidebar-menu-text">Assessment Bank </span>
                        </a>
                        <ul class="slide-menu1" style="margin-left: 30px; font-size:13px;">
                            <li class="sub_li"><a href="<?php echo base_url();?>module-master" class="slide-item1 text-white">Module Master</a></li>
                            <li class="sub_li"><a href="<?php echo base_url();?>question-answer-master" class="slide-item1 text-white">Question/Answer Master</a>
                            </li>
							<li class="sub_li"><a href="<?php echo base_url();?>pre-test" class="slide-item1 text-white">Pre-Test & Post-Test </a></li>
							<!--<li class="sub_li"><a href="post-test.php" class="slide-item1 text-white">Post-Test</a></li>
                            <li class="sub_li"><a href="#" class="slide-item1 text-white">Mapping of Question</a></li>-->
                        </ul>

                    </li>
                    <!-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-lessons.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                    <span class="sidebar-menu-text">Question/Answer Master</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i>
                                    <span class="sidebar-menu-text">Mapping of Question</span>
                                </a>
                            </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="#">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                            <span class="sidebar-menu-text">Assessment Formula</span>
                        </a>
                    </li>
					
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="#">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                            <span class="sidebar-menu-text">Result Review</span>
                        </a>
                    </li>
					
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="#">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                            <span class="sidebar-menu-text">Reminders</span>
                        </a>
                    </li>
                    <!--<li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="#">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                            <span class="sidebar-menu-text">Reports</span>
                        </a>
                    </li>-->
					    <li class="sidebar-menu-item" id="side-menu2">
                        <a class="sidebar-menu-button" id="flip" href="javascript:void(0);">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>
                            <span class="sidebar-menu-text">Reports </span>
                        </a>
                        <ul class="slide-menu2" style="margin-left: 30px; font-size:13px;">
                            <!-- <li class="sub_li"><a href="<?php echo base_url();?>employee-reports" class="slide-2 text-white">Employee Report</a></li>
                            <li class="sub_li"><a href="<?php echo base_url();?>traniee-reports" class="slide-item1 text-white">Trainee Report</a>
                            </li> -->
							<!--<li class="sub_li"><a href="#" class="slide-item2 text-white">Pre-Test & Post-Test </a></li>
							<li class="sub_li"><a href="post-test.php" class="slide-item1 text-white">Post-Test</a></li>
                            <li class="sub_li"><a href="#" class="slide-item1 text-white">Mapping of Question</a></li>-->
                            <li class="sub_li"><a href="<?php echo base_url();?>trainer-master" class="slide-2 text-white">Trainer
                                    Report</a></li>
                            <li class="sub_li"><a href="<?php echo base_url();?>traniee-reports" class="slide-item1 text-white">Trainee
                                    Report</a>
                            </li>
                            <li class="sub_li"><a href="<?php echo base_url();?>district-wise-report"
                                    class="slide-item1 text-white">District wise report </a>
                            </li>
                            <li class="sub_li"><a href="<?php echo base_url();?>trainee-performance" class="slide-item1 text-white">Trainee
                                    performance</a>
                            </li>
                        </ul>

                    </li>


                    <!-- <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="#">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                            <span class="sidebar-menu-text">Analytical Dashboard</span>
                        </a>
                    </li>

                   <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="edit-account.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                    <span class="sidebar-menu-text">Edit Account</span>
                                </a>
                            </li>-->


                </ul>
            </div>
        </div>
    </div>
</div>

