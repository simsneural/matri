<?php $base_url = base_url() . 'admin_assets/'; ?>
<?php 
   $this->load->helper('sidebardata_helper');
   $alldata = get_permission();
   $mapping_role_data = $alldata[0];
   $master_menu = $alldata[1]; 
   $master_sub_menu = $alldata[2]; 
   $master_sub_sub_menu = $alldata[3]; 
   //$rid=$this->session->userdata('admin_role');
?>
<style>
    .slide-menu {
        list-style: none;
        text-color: #fff;
    }
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
                    <a class="sidebar-menu-button" href="<?php echo base_url(); ?>"">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">photo_filter</i>
                        <span class="sidebar-menu-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-block p-0">
                <ul class="sidebar-menu mt-0">
                <?php  
                foreach ($mapping_role_data as $menudata) {
                    $menu = explode('&&', $menudata['menu_master_id']);
                    $roleid = $menudata['role_id'];
                    $submenu=array();
                    for($i=0; $i<=count($menu)-1; $i++){
                        $menu_data = explode('|', $menu[$i]);
                        for($j=1; $j<= count($menu_data)-1; $j++){
                            $sub = explode('$', $menu_data[$j]);
                            if($sub[0] !="" && $sub[1] !="" && $sub[2] ==""){
                            $submenu[] = $menu_data[$j];
                            }else{
                            $subsubmenu[] = $menu_data[$j];
                            }
                            for($k=0; $k<=count($sub)-1; $k++){
                            }
                        }
                        $menuid[]=$menu_data[0];
                    }
                }
                ?>
                <?php for($m=0; $m<=count($menuid)-1; $m++){ 
                 $mid=$menuid[$m];
                 $menu_detail = $this->Crud_modal->all_data_select('menu_description,menu_route_name','master_menu',"menu_id = '$mid'",'menu_id ASC');    
                ?>
                    <li class="sidebar-menu-item" id="side-menu<?php echo $m?>">
                        <a class="sidebar-menu-button" id="flip" href="<?php echo $menu_detail[0]['menu_route_name']?>">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>
                            <span class="sidebar-menu-text"><?php echo $menu_detail[0]['menu_description']; ?></span>
                        </a>
                        <ul class="slide-menu<?php echo $m?>" style="margin-left: 30px; font-size:13px;">
                        <?php for($n=0; $n <= count($submenu)-1; $n++){ 
                        $submenuid = explode('$', $submenu[$n]);
                        if($submenuid[0]==$menuid[$m]){
                            $mid=$menuid[$m];
                            $sid = $submenuid[1];
                            $sub_menu_detail = $this->Crud_modal->all_data_select('sub_menu_route,sub_menu_description','master_sub_menu',"sub_menu_id = '$sid' and menu_id = '$mid'",'sub_menu_id ASC');
                        ?>
                        <li class="sub_li"><a href="<?php echo ($sub_menu_detail[0]['sub_menu_route']=="#"  ? "#" : base_url().$sub_menu_detail[0]['sub_menu_route']);?>" class="slide-item text-white"> <?php echo $sub_menu_detail[0]['sub_menu_description']; ?></a></li>
                        <?php }} ?>     
                        </ul>
                    </li>
                <?php } ?>    

                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.slide-menu0').hide();
        $("#side-menu0").click(function() {
            $(".slide-menu0").slideToggle("slow");
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('.slide-menu1').hide();
        $("#side-menu1").click(function() {
            $(".slide-menu1").slideToggle("slow");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.slide-menu2').hide();
        $("#side-menu2").click(function() {
            $(".slide-menu2").slideToggle("slow");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.slide-menu3').hide();
        $("#side-menu3").click(function() {
            $(".slide-menu3").slideToggle("slow");
        });
    });
</script>
