<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl_model extends CI_Model{

    function __construct()
    {
        parent :: __construct();
        
        $CI =& get_instance();
        $CI->load->library('Get_library');
        $this->load->database();
        date_default_timezone_set('Asia/Kolkata');

    }
	public function fetch_data($table,$field,$where,$limit,$order_by)
	{
        if(!empty($field) && $field!='')
        {
        $this->db->select($field);
        }
        $this->db->from($table);
        if(!empty($where) && $where!='')
        {
        $this->db->where($where);
        }
        if(!empty($limit) && $limit!='')
        {
        $this->db->limit($limit);
        }
        if(!empty($order_by) && $order_by!='')
        {
        $this->db->order_by($order_by[0],$order_by[1]);
        }
        $q = $this->db->get();
        return $q->row_array();
		//print_r($this->db->last_query());
        //die();
        //return $q->result_array();
    }
    public function fetch_data_in_many_array($table,$field,$where,$limit,$order_by)
	{
        if(!empty($field) && $field!='')
        {
        $this->db->select($field);
        }
        $this->db->from($table);
        if(!empty($where) && $where!='')
        {
        $this->db->where($where);
        }
        if(!empty($limit) && $limit!='')
        {
        $this->db->limit($limit);
        }
        if(!empty($order_by) && $order_by!='')
        {
        $this->db->order_by($order_by[0],$order_by[1]);
        }
        $q = $this->db->get();
        //print_r($this->db->last_query());
        //die();
        //return $q->row_array();
        return $q->result_array();
    }
    public function fetch_data_with_joining($join_data,$limit,$order_by)
	{
        // echo "<pre>";
        // print_r($join_data);
        $where_not_in = array();
        $where = array();
        $fields = array();
        $join_with = array();
        $group_by = '';
        $order = array();
        foreach ($join_data as $key => $value) {
            if(isset($join_data[$key]))
            {
                //print_r($join_data[$key]);
                $table[$key] = $join_data[$key]['table'];
                if(isset($join_data[$key]['fields']))
                {
                    foreach($join_data[$key]['fields'] as $key2=>$value2)
                    {
                        array_push($fields,$table[$key].'.'.$value2);
                    }
                }
                if(isset($join_data[$key]['function']))
                {
                    
                        array_push($fields,$join_data[$key]['function'][0].'('.$table[$key].'.'.$join_data[$key]['function'][1].')');
                    
                }
                //$wh = array();
                if(isset($join_data[$key]['where_function']))
                {
                    foreach ($join_data[$key]['where_function'] as $key5 => $value5) {
                    
                        foreach ($join_data[$key]['where_function'][$key5][2] as $key4 => $value4) {
                            //echo $value4;
                            $fff = $join_data[$key]['where_function'][$key5][0].'('.$table[$key].'.'.$key4.' as '.$join_data[$key]['where_function'][$key5][1].')'.$join_data[$key]['where_function'][$key5][3].'='.$value4;
                            array_push($where,$fff);
                        }
                    }
                    // print_r($wh);
                    // die();
                }
                if(isset($join_data[$key]['where']))
                {
                    foreach ($join_data[$key]['where'] as $key3 => $value3)
                    {
                        array_push($where,$table[$key].'.'.$key3.'='.$value3);
                    }
                }
                if(isset($join_data[$key]['where_not_in']))
                {
                    foreach ($join_data[$key]['where_not_in'] as $key3 => $value3)
                    {
                        array_push($where_not_in,array($table[$key].'.'.$key3=>$value3));
                    }
                }
                if(isset($join_data[$key]['group_by']))
                {
                    foreach ($join_data[$key]['group_by'] as $key3 => $value3)
                    {
                        $group_by = $table[$key].'.'.$value3;
                    }
                }
                if(isset($join_data[$key]['order_by']))
                {
                    //print_r($join_data[$key]['order_by'][0]);
                    //die();
                    array_push($order,$table[$key].'.'.$join_data[$key]['order_by'][0]);
                    array_push($order,$join_data[$key]['order_by'][1]);
                }
                
            }
            if(isset($join_data[$key+1]))
            {
                
                if(isset($join_data[$key+1]['joinWith']))
                {
                    $joind = $join_data[$key+1]['joined'];
                    if(isset($join_data[$key+1]['joinWith'][1]))
                    {
                        array_push($join_with,array($join_data[$key+1]['table'],$join_data[$key+1]['table'].'.'.$join_data[$key+1]['joinWith'][0].'='.$join_data[$joind]['table'].'.'.$join_data[$key+1]['joinWith'][0],$join_data[$key+1]['joinWith'][1]));
                    }
                    else{
                        array_push($join_with,array($join_data[$key+1]['table'],$join_data[$key+1]['table'].'.'.$join_data[$key+1]['joinWith'][0].'='.$join_data[$joind]['table'].'.'.$join_data[$key+1]['joinWith'][0]));
                    }
                }
            }
        }
        // echo "<pre>";
        //print_r($where_not_in);
        // print_r($fields);
        // print_r($where);
        // print_r($join_with);
        // die();
        if(!empty($fields) && $fields!='')
        {
        $this->db->select($fields);
        }
        $this->db->from($table[0]);
        if(!empty($join_with) && $join_with!='')
        {
            foreach ($join_with as $ky => $val)
            {
              
                if(isset($val[2]))
                {
                    $this->db->join($val[0],$val[1],$val[2]);
                }
                else{
                    $this->db->join($val[0],$val[1]);
                }
            }
        
        }
        if(!empty($where) && $where!='')
        {
            foreach ($where as $key => $value) {
                $this->db->where($value);
            }
        
        }
        if(!empty($where_not_in) && $where_not_in!='')
        {
            foreach ($where_not_in as $key25 => $value25)
            {
                foreach ($value25 as $key26 => $value26) {
                    $this->db->where_not_in($key26,$value26);
                }
            }
        }
        if(!empty($limit) && $limit!='')
        {
            $this->db->limit($limit);
        }
        if(!empty($order) && $order!='')
        {
            $this->db->order_by($order[0],$order[1]);
        }
        if(!empty($group_by) && $group_by!='')
        {
            $this->db->group_by($group_by);
        }
        $q = $this->db->get();
        //  print_r($this->db->last_query());
        //  die();
        //return $q->row_array();
        return $q->result_array();
    }
    public function insert_data($table,$data)
	{
        
        $q = $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    public function update_data($table,$fields,$where)
	{
        $this->db->where($where);
        $q = $this->db->update($table,$fields);
		//echo $this->db->last_query();
       // exit();
        return true;
        //return $q->result_array();
    }
    public function delete_data($table,$where)
    {
        $this->db->where($where);
        $this->db->delete($table);
        return true;
    }
   
   public function fetch_alls($tblname,$orderby)
   {
		$this->db->select('*');
		$this->db->from($tblname);
		$query = $this->db->order_by($orderby);
		$query = $this->db->get();
		$result= $query->result_array();	
		return $result;
   }
   public function fetch_single_data($fields,$tbl_name,$where)
    {
        $this->db->select($fields);
        $this->db->from($tbl_name);
        $this->db->where($where);
        $query = $this->db->get();
        $result=$query->row_array();	
        return $result;
    }
	public function all_data_select($fields,$tbl_name,$where,$orderby)
	{
		$this->db->select($fields);
		$this->db->from($tbl_name);
		$this->db->where($where);
		$query = $this->db->order_by($orderby);
		$query = $this->db->get();
		$result= $query->result_array();
		//echo $this->db->last_query();	die();
		return $result;
	}
	public function fetch_all_data($fields,$tbl_name,$where){
		$this->db->select($fields);
		$this->db->from($tbl_name);
		$this->db->where($where);
		$query = $this->db->get();
		$result=$query->result_array();
		$this->db->close();
		return $result;
	}
	public function dioceses_list($lastID){
		$query = $this->db->query("SELECT *, (SELECT Count(dioceses_id) FROM user_data WHERE dioceses_id=dioceses.dioceses_id) AS tv FROM dioceses WHERE dioceses_id>$lastID and status=1 ORDER BY tv DESC LIMIT 10");
		//echo $this->db->last_query(); exit;
	    return $query->result_array();		
	}
	
	public function check_numrow($tblname,$where){
		$this->db->initialize();
		$query=$this->db->select('*')->from($tblname)->where($where)->get();
		return $query->num_rows();
	}
	
	
	
	
	
	
}
