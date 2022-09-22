<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_permission'))
{
    function get_permission()
    {   
    	$ci=& get_instance();
    	$ci->load->library('session');
    	$role_type = $ci->session->userdata('role_id');
    	$where = "status = '1'";
		$data['master_menu'] = $ci->Crud_modal->all_data_select('*','master_menu',$where,'menu_id ASC');
		$where1 = "status = '1'";
		$data['master_sub_menu'] = $ci->Crud_modal->all_data_select('*','master_sub_menu',$where1,'sub_menu_id ASC');
		$where2 = "status = '1'";
		$data['master_sub_sub_menu'] = $ci->Crud_modal->all_data_select('*','master_sub_sub_menu',$where2,'sub_sub_menu_id ASC');
    	$where5 = "status = '1' and role_id = '$role_type'";
		$data['mapping_role_data'] = $ci->Crud_modal->all_data_select('*','mapping_role_permission_master_menu',$where5,'role_id ASC');
		$alldata[0]=$data['mapping_role_data'];
		$alldata[1]=$data['master_menu'];
		$alldata[2]=$data['master_sub_menu'];
		$alldata[3]=$data['master_sub_sub_menu'];
		return $alldata;
    }   
}