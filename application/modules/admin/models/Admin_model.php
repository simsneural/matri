<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$CI = &get_instance();
		$CI->load->library('Get_library');
		$this->load->model('crud/Crud_modal');
		$this->load->database();
		date_default_timezone_set('Asia/Kolkata');
	}


	function get_state()
	{
		$this->db->initialize();
		$this->db->select('c.*,s.name as state_name, c.name as name,c.*');
		$this->db->from('cities c');
		$this->db->join('states s', 's.sid = c.state_id', 'left');
		$this->db->where('c.status !=0');
		$this->db->order_by('c.ci_id   DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}


	function get_city()
	{

		$this->db->initialize();
		$this->db->select('b.*,s.name as state_name, c.name as name,b.*');
		$this->db->from('block b');
		$this->db->join('states s', 's.sid = b.state_id', 'left');
		$this->db->join('cities c', 'c.ci_id = b.ci_id', 'left');
		$this->db->where('b.status !=0');
		$this->db->order_by('b.id   DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_city_block()
	{
		$this->db->initialize();
		$this->db->select('sc.*,s.name as state_name, c.name as district_name,b.block_name as b_name,sc.*');
		$this->db->from('sector sc');
		$this->db->join('states s', 's.sid = sc.state_id', 'left');
		$this->db->join('cities c', 'c.ci_id = sc.city_id', 'left');
		$this->db->join('block b', 'b.id= sc.block_id', 'left');
		$this->db->where('sc.status !=0');
		$this->db->order_by('sc.sector_id   DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_city_block_sector()
	{

		$this->db->initialize();
		$this->db->select('ss.*,s.name as state_name, c.name as district_name,b.block_name as b_name,sc.sector_name as sector_name,ss.*');
		$this->db->from('sub_sector ss');
		$this->db->join('states s', 's.sid = ss.state_id', 'left');
		$this->db->join('cities c', 'c.ci_id = ss.city_id', 'left');
		$this->db->join('block b', 'b.id= ss.block_id', 'left');
		$this->db->join('sector sc', 'sc.sector_id = ss.sector_id', 'left');
		$this->db->where('ss.status !=0');
		$this->db->order_by('ss.sub_id    DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_all_employee()
	{

     	$this->db->initialize();
		$this->db->select('e.*,mr.role_name as role_name,s.name as state_name, c.name as district_name,b.block_name as b_name,sc.sector_name as sector_name,e.*');
		$this->db->from('employee e');
		$this->db->join('master_role mr', 'mr.role_id = e.role_id', 'left');
		$this->db->join('states s', 's.sid = e.sid', 'left');
		$this->db->join('cities c', 'c.ci_id = e.ci_id', 'left');
		$this->db->join('block b', 'b.id= e.block_id', 'left');
		$this->db->join('sector sc','sc.sector_id=e.sector_id','left');
		$this->db->where('e.status !=0');
		$this->db->order_by('e.emp_id   DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_all_trainee()
	{

		$this->db->initialize();
		$this->db->select('tm.*,e.emp_name as emp_name,s.name as state_name, c.name as district_name,b.block_name as b_name,sc.sector_name as sector_name,ss.sub_sector_name as sub_sector_name,tm.*');
		$this->db->from('trainee_master tm');
		$this->db->join('employee e', 'e.emp_id  = tm.trainer_id', 'left');
		$this->db->join('states s', 's.sid = tm.state_id', 'left');
		$this->db->join('cities c', 'c.ci_id = tm.city_id', 'left');
		$this->db->join('block b', 'b.id= tm.block_id', 'left');
		$this->db->join('sector sc','sc.sector_id=tm.sector_id','left');
		$this->db->join('sub_sector ss','ss.sub_id =tm.sub_id','left');
		$this->db->where('tm.status !=0');
		$this->db->order_by('tm.trainee_id    DESC');
		$query = $this->db->get();
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_all_block_report($where)
	{

		$this->db->initialize();
		$result=$this->db->select('b.*,s.name as state_name, c.name as name');
		// echo "<pre>";
		// print_r($result);
		$this->db->from('block b');
		$this->db->join('states s','s.sid = b.state_id','left');
		$this->db->join('cities c','c.ci_id = b.ci_id','left');
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}
	function get_Sector_filter($where)
	{

		$this->db->initialize();
		$result=$this->db->select('sc.*,s.name as state_name, c.name as name,b.block_name as block_name');
		// echo "<pre>";
		// print_r($result);
		$this->db->from('sector sc');
		$this->db->join('states s','s.sid = sc.state_id','left');
		$this->db->join('cities c','c.ci_id = sc.city_id','left');
		$this->db->join('block b','b.id = sc.block_id','left');
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_sub_Sector_filter($where)
	{

		$this->db->initialize();
		$result=$this->db->select('ss.*,s.name as state_name, c.name as name,b.block_name as block_name,sc.sector_name as sector_name');
		// echo "<pre>";
		// print_r($result);
		$this->db->from('sub_sector ss');
		$this->db->join('states s','s.sid = ss.state_id','left');
		$this->db->join('cities c','c.ci_id = ss.city_id','left');
		$this->db->join('block b','b.id = ss.block_id','left');
		$this->db->join('sector sc','sc.sector_id = ss.sector_id','left');
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function get_employee_filter($where)
	{

		$this->db->initialize();
		$result=$this->db->select('e.*,s.name as state_name, c.name as district_name,b.block_name as b_name,sc.sector_name as sector_name');
		// echo "<pre>";
		// print_r($result);
		$this->db->from('employee e');
		$this->db->join('states s','s.sid = e.sid','left');
		$this->db->join('cities c','c.ci_id = e.ci_id','left');
		$this->db->join('block b','b.id = e.block_id','left');
		$this->db->join('sector sc','sc.sector_id = e.sector_id','left');
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}

	function trainee_filter($where)
	{

		$this->db->initialize();
		 $result=$this->db->select('tm.*,s.name as state_name, c.name as district_name,b.block_name as b_name,sc.sector_name as sector_name,ss.sub_sector_name as sub_sector_name');
		$this->db->from('trainee_master tm');
		//$this->db->join('employee e','e.emp_id = tm.trainer_id','left');
		$this->db->join('states s','s.sid = tm.state_id','left');
		$this->db->join('cities c','c.ci_id = tm.city_id','left');
		$this->db->join('block b','b.id = tm.block_id','left');
		$this->db->join('sector sc','sc.sector_id = tm.sector_id','left');
		$this->db->join('sub_sector ss','ss.sub_id = tm.sub_id','left');
		$this->db->where($where);
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		$result = $query->result_array();
		$this->db->close();
		return $result;
	}


	
	
}