<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'admin/Admin/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'admin/Admin/login'; 
$route['index'] = 'admin/Admin/index';
//$route['login'] = 'admin/Admin/emp_login'; 
$route['role-master'] = 'admin/Admin/role'; 
$route['add-role-master'] = 'admin/Admin/addrole';
$route['permission'] = 'admin/Admin/permission';
$route['add-permission'] = 'admin/Admin/addpermission';
$route['insert_permission_master'] = 'admin/Admin/insert_permission_master';
$route['edit-permission/(:any)'] = 'admin/Admin/edit_permission';
$route['update_permission_master'] = 'admin/Admin/update_permission_master';
$route['mapping-role-permission'] = 'admin/Admin/mapping';
$route['map-role-permission-form-save'] = 'admin/Admin/map_role_permission_form_save';
$route['edit-map-role-permission/(:any)'] = 'admin/Admin/edit_map_role_permission';
$route['edit-map-role-permission-form-save'] = 'admin/Admin/edit_map_role_permission_form_save';
$route['state'] = 'admin/Admin/state';
$route['add-state'] = 'admin/Admin/addstate';
$route['insert_state_master']='admin/Admin/insert_state_master';
$route['edit-state/(:any)'] = 'admin/Admin/edit_state';
$route['update_state_master'] = 'admin/Admin/update_state_master';
$route['district'] = 'admin/Admin/district';
$route['add-district'] = 'admin/Admin/addistrict';
$route['insert_district_master']='admin/Admin/insert_district_master';
$route['edit-district/(:any)'] = 'admin/Admin/edit_district';
$route['update_district_master'] = 'admin/Admin/update_district_master';
$route['block'] = 'admin/Admin/block';
$route['add-block'] = 'admin/Admin/addblock';
$route['insert_block_master']='admin/Admin/insert_block_master';
$route['edit-block/(:any)'] = 'admin/Admin/edit_block';
$route['update_block_master'] = 'admin/Admin/update_block_master';
$route['filter_block']='admin/Admin/filter_block';
$route['sector'] = 'admin/Admin/sector';
$route['add-sector'] = 'admin/Admin/addsector';
$route['filter_sector']='admin/Admin/filter_sector';
$route['insert_sector_master']='admin/Admin/insert_sector_master';
$route['sub-sector'] = 'admin/Admin/subsector';
$route['add-sub-sector'] = 'admin/Admin/adsubsector';
//$route['add-sub-sector'] = 'admin/Admin/adsubsector';
$route['filter_sub_sector']='admin/Admin/filter_sub_sector';
$route['insert_sub_sector'] = 'admin/Admin/insert_sub_sector';
$route['employee-master'] = 'admin/Admin/employee';
$route['filter_employee']='admin/Admin/filter_employee';
$route['add-employee-master'] = 'admin/Admin/addemployee';
$route['insert_employee_master'] = 'admin/Admin/insert_employee_master';
$route['trainee-master'] = 'admin/Admin/trainee';
$route['filter_trainee']='admin/Admin/filter_trainee';
$route['add-trainee-master'] = 'admin/Admin/addtrainee';
$route['insert_trainee_master'] = 'admin/Admin/insert_trainee_master';
$route['mapping-trainer-anms'] = 'admin/Admin/mappingtrainer';
$route['module-master'] = 'admin/Admin/modulemaster';
$route['add-module-master'] = 'admin/Admin/add_module_master';
$route['question-answer-master'] = 'admin/Admin/questionanswer';
$route['add-question-answer-master'] = 'admin/Admin/addquestionanswer';
$route['pre-test'] = 'admin/Admin/pretest';
$route['add-pre-test'] = 'admin/Admin/addpretest';
$route['employee-reports'] = 'admin/Admin/employeereports';
$route['traniee-reports'] = 'admin/Admin/tranieereports';
$route['insert_role_master'] = 'admin/Admin/insert_role_master';
$route['trainer-report'] = 'admin/Admin/trainer_report';
$route['trainer-master'] = 'admin/Admin/trainer_master';
$route['add-trainer-master']='admin/Admin/add_trainer_master';
$route['insert_trainer_master']='admin/Admin/insert_trainer_master';
$route['traniee-reports']='admin/Admin/traniee_reports';
$route['district-wise-report'] ='admin/Admin/district_wise_report';
$route['trainee-performance'] ='admin/Admin/trainee_performance';
$route['trainee-transfer'] = 'admin/Admin/trainee_transfer';
//$route['edit-role/(:any)'] = 'admin/Admin/edit_role';
//$route['update_role'] = 'admin/Admin/update_role';
$route['get-city'] = 'admin/Admin/get_city';
$route['get-city-trainee'] = 'admin/Admin/get_city_trainee';
$route['get-block'] = 'admin/Admin/get_block';
$route['get-block-trainee'] = 'admin/Admin/get_block_trainee';
$route['get-sector'] = 'admin/Admin/get_sector';
$route['get-sector-trainee'] = 'admin/Admin/get_sector_trainee';
$route['get-sub-sector'] = 'admin/Admin/get_sub_sector';
$route['menu-master'] = 'admin/Admin/menu_master';
$route['add-submenu'] = 'admin/Admin/add_submenu';
$route['add-menu-master'] = 'admin/Admin/add_menu_master';
$route['edit-menu/(:any)'] = 'admin/Admin/edit_menu';
$route['sub-menu-master'] = 'admin/Admin/sub_menu_master';
$route['insert_sub_menu_master'] = 'admin/Admin/insert_sub_menu_master';
$route['insert_menu_master'] = 'admin/Admin/insert_menu_master';
$route['import_csv'] = 'admin/Admin/import_csv';
$route['insert_import_cvs'] = 'admin/Admin/insert_import_cvs';
$route['training-master'] = 'admin/Admin/training_master';
$route['add-training-master'] = 'admin/Admin/add_training_master';
//send smsm API
$route['send-sms']='api/Api/sendSMS';
  
