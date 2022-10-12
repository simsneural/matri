<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller
{
public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->model('crud/Crud_modal');
		$this->load->model('curl/Curl_model');

		$this->load->model('Admin_model');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
	}
public function index()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('index');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	/*public function login()
	{
		$this->load->view('temp/head');
		//$this->load->view('temp/heder');
		$this->load->view('login');
		//$this->load->view('temp/sidebar');
		//$this->load->view('temp/footer');
	}*/
public function login()
    {	
        $res['email'] = "";
        $res['password'] = "";
        if ($this->input->post()) {
            $res['email'] = $this->input->post('email');
            $res['password'] = $this->input->post('password');
			//echo $res['password'];exit;
            if ($this->input->post('signin') == 'signin') {
			
                $rules_array = array(
                    array(
                        'field' => 'email',
                        'label' => 'Email Address',
                        'rules' => 'trim|required',
                        'errors' => array(
                            'required' => 'Enter Email Address.',
                        ),
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required',
                        'errors' => array(
                            'required' => 'Enter Password',
                        ),
                    ),
                );
				
                $this->form_validation->set_rules($rules_array);
                if ($this->form_validation->run() == TRUE) {
                    $email = $this->input->post('email');
					
                    $password = $this->input->post('password');
                    $fields = array(
                        'role_id',
                        'emp_password',
                        'emp_name',
                        'emp_id',
                        'sid',
                        'status',
                    );
                    $where = array(
                        'emp_email' => $email,
                    );
                    $limit = '';
                    $order_by = '';
                    $results = $this->Curl_model->fetch_data('employee', $fields, $where, $limit, $order_by);
                    if (!empty($results) && $results != '') {
                        $r_password = $results['emp_password'];

                        if ($r_password == md5($password)) {
                            if ($results['role_id'] == 1) {
                                if ($results['status'] == 1) {
                                    $this->session->set_userdata('emp_id', $results['emp_id']);
                                    $this->session->set_userdata('sid', $results['sid']);
                                    $this->session->set_userdata('role_id', $results['role_id']);
                                    $this->session->set_userdata('emp_name', $results['emp_name']);
                                    echo '<script>window.location.href = "' . base_url() . 'index"</script>';
                                } else {
                                    $this->session->set_userdata('error', 'Your Login has been block.');
                                }
                            } else {
                                $this->session->set_userdata('emp_id', $results['emp_id']);
                                $this->session->set_userdata('sid', $results['sid']);
                                $this->session->set_userdata('role_id', $results['role_id']);
                                $this->session->set_userdata('emp_name', $results['emp_name']);
                                echo '<script>window.location.href = "' . base_url() . 'index"</script>';
                            }
                        } else {

                            $this->session->set_userdata('error', 'Wrong Password');
                        }
                    } else {

                        $this->session->set_userdata('error', 'Please Enter Valid Email Address');
                    }
                }
            }
        }
		$this->load->view('temp/head');
        $this->load->view('login', $res);
    }

// public function role()
// 	{
// 		 $data['master_role'] = $this->Crud_modal->fetch_alls('master_role', 'role_id  desc');
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('role-master',$data);
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}

public function role()

	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				$data['master_role'] = $this->Crud_modal->fetch_alls('master_role', 'role_id  desc');
						$this->load->view('temp/head');
						$this->load->view('temp/heder');
						$this->load->view('role-master',$data);
						$this->load->view('temp/sidebar');
						$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function addrole()

	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {

				$this->load->view('temp/head');
				$this->load->view('temp/heder');
				$this->load->view('add-role-master');
				$this->load->view('temp/sidebar');
				$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function insert_role_master()

    {
        try {
            $createdata = array(
                'role_name' => $this->input->post('role_name'),
                'role_description' => $this->input->post('role_name'),
                'creation_date' => date('Y-m-d H:i:s'),
                'status' => $this->input->post('status'),
            );
			//echo $createdata;exit;
            $result =   $this->Crud_modal->data_insert('master_role', $createdata);
            // echo "<pre>";
            // print_r($result);exit;
            $this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');
            redirect(base_url() . 'role-master');
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

// public function permission()
// 	{
// 		$data['master_permission'] = $this->Crud_modal->fetch_alls('master_permission', 'permission_id  desc');
		
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('permission',$data);
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}
public function permission()

	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				$data['master_permission'] = $this->Crud_modal->fetch_alls('master_permission', 'permission_id  desc');
						$this->load->view('temp/head');
						$this->load->view('temp/heder');
						$this->load->view('permission',$data);
						$this->load->view('temp/sidebar');
						$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}


		
// public function addpermission()
// 	{
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('add-permission');
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}
public function addpermission()

	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
						$this->load->view('temp/head');
						$this->load->view('temp/heder');
						$this->load->view('add-permission',$data);
						$this->load->view('temp/sidebar');
						$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function insert_permission_master()

    {

        try {

            $createdata = array(
                'permission_description' => $this->input->post('permission_description'),
                
                'creation_date' => date('Y-m-d H:i:s'),
                'status' => $this->input->post('status'),
            );
            $this->Crud_modal->data_insert('master_permission', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'permission');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

public function edit_permission()
	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {

				$permission_id = $this->uri->segment(2);

				$val = base64_decode(str_pad(strtr($permission_id, '-_', '+/'), strlen($permission_id) % 4, '=', STR_PAD_RIGHT));

				$where = "permission_id = '$val'";

				$data['permission'] = $this->Crud_modal->all_data_select('*', 'master_permission', $where, 'permission_id desc');

				$this->load->view('temp/head');

				$this->load->view('temp/heder');
				$this->load->view('edit-permission', $data);
				$this->load->view('temp/sidebar');

				$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function update_permission_master()
	{

		$permission_id = $this->input->post('permission_id');
		$permission_de = $this->input->post('permission_description');
		$status = $this->input->post('status');
		$update_data = array(
			'permission_description' => $permission_de,
			'status' => $status,
			'modification_date' => date('Y-m-d')

		);

		$where = "permission_id = '$permission_id'";
		if ($this->Crud_modal->update_data($where, 'master_permission', $update_data)) {
			$this->session->set_flashdata('master_permission_message', '<div class="alert alert-warning"><strong>Success!</strong> Permission Data has Updated.</div>');
			redirect(base_url() . 'permission');
		} else {
			$this->session->set_flashdata('master_role_message', '<div class="alert alert-danger"><strong>Failed!</strong> to Updated Data</div>');
			redirect(base_url() . 'permission');
		}
	}
	
public function mapping()
	{
		if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
		$where = "status = '1'";
		$data['master_menu'] = $this->Crud_modal->all_data_select('*', 'master_menu', $where, 'menu_id ASC');
		$where1 = "status = '1'";
		$data['master_sub_menu'] = $this->Crud_modal->all_data_select('*', 'master_sub_menu', $where1, 'sub_menu_id ASC');
		// $where2 = "status = '1'";
		// $data['master_sub_sub_menu'] = $this->Crud_modal->all_data_select('*', 'master_sub_sub_menu', $where2, 'sub_sub_menu_id ASC');
		$where3 = "status = '1'";
		$data['master_role'] = $this->Crud_modal->all_data_select('*', 'master_role', $where3, 'role_id ASC');
		$where4 = "status = '1'";
		$data['master_permission'] = $this->Crud_modal->all_data_select('*', 'master_permission', $where4, 'permission_id ASC');
		$where5 = "status = '1'";
		$data['mapping_role_data'] = $this->Crud_modal->all_data_select('*', 'mapping_role_permission_master_menu', $where5, 'role_id ASC');
		
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('mapping-role-permission',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
		} 
		else 
		{
			redirect(base_url() . 'login', 'refresh');
		}

	}

	public function  edit_map_role_permission()
	{
		try {
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				$val = base64_decode(str_pad(strtr($this->uri->segment(2), '-_', '+/'), strlen($this->uri->segment(2)) % 4, '=', STR_PAD_RIGHT));
				$where = "status = '1'";
				$data['master_menu'] = $this->Crud_modal->all_data_select('*', 'master_menu', $where, 'menu_id ASC');
				$where1 = "status = '1'";
				$data['master_sub_menu'] = $this->Crud_modal->all_data_select('*', 'master_sub_menu', $where1, 'sub_menu_id ASC');
				$where3 = "status = '1'";
				$data['master_role'] = $this->Crud_modal->all_data_select('*', 'master_role', $where3, 'role_id ASC');
				$where4 = "status = '1'";
				$data['master_permission'] = $this->Crud_modal->all_data_select('*', 'master_permission', $where4, 'permission_id ASC');
				$where5 = "status = '1' and role_id = '$val'";
				$data['mapping_role_data'] = $this->Crud_modal->all_data_select('*', 'mapping_role_permission_master_menu', $where5, 'role_id ASC');
				$this->load->view('temp/head');
				$this->load->view('temp/heder');
				$this->load->view('edit-map-role-permission',$data);
				$this->load->view('temp/sidebar');
				$this->load->view('temp/footer');
			} 
			else {
				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

	public function edit_map_role_permission_form_save()
	{
		try {
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				$menu_count = count($this->input->post('main_menu_id'));
				$sub_count = count($this->input->post('sub_menu_id'));
				$menu_id = $this->input->post('main_menu_id');
				$role_id = $this->input->post('update_role_id');
				$sub_id = $this->input->post('sub_menu_id');
				$loopj_count = 0;
				$loopk_count = 0;
				for ($i = 0; $i <= $menu_count - 1; $i++) {
					$m = $menu_id[$i];
					$string[$i] = $m . "|";
					for ($j = 0; $j <= $sub_count - 1; $j++) {
						$subb_id = explode('$', $sub_id[$j]);
						$s = $subb_id[0];
						if ($m == $s) {
							$string[$i] .= $sub_id[$j] . "|";
						}
					}
					$string[$i] = rtrim($string[$i], '|');
				}
				$access_master_menu = implode('&&', $string);
				$role = $this->input->post('group_type');
				$perm = $this->input->post('Permission');
				$permission = implode('|', $perm);
				$field = array(
					'permission_id' => $permission,
					'menu_master_id' => $access_master_menu,
					'modification_date' => date('Y-m-d H:i:s')
				);
				$where = "role_id = '$role_id'";
				$tblname = 'mapping_role_permission_master_menu';
				$data = $this->Crud_modal->update_data($where, $tblname, $field);
				// $orderby= 'role_id ASC';
				// $where1 = "role_id = '$role' and status=1";
				// $data1 = $this->Crud_modal->all_data_select('*','mapping_role_permission_master_menu',$where1,$orderby);
				if ($data) {
					$this->session->set_flashdata('master_map_message', '<div class="alert alert-info"><strong>Success!</strong> Mapping data has been Updated.</div>');
					redirect(base_url() . 'mapping-role-permission');
				} else {
					echo 0;
				}
			} else {
				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function state()

	{
		$data['states'] = $this->Crud_modal->fetch_alls('states', 'status  desc');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('state',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
public function addstate()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-state');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
public function insert_state_master()

    {

        try {

            $createdata = array(
                'name' => $this->input->post('name'),
				'code' => $this->input->post('code'),
				'status' => $this->input->post('status'),
            );
            $this->Crud_modal->data_insert('states', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'state');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

public function edit_state()

	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				$sid = $this->uri->segment(2);
				$val = base64_decode(str_pad(strtr($sid , '-_', '+/'), strlen($sid ) % 4, '=', STR_PAD_RIGHT));
				$where = "sid  = '$val'";
				$data['states'] = $this->Crud_modal->all_data_select('*', 'states', $where, 'sid desc');
				//echo "<pre>";
				//print_r($data['states']);exit;
				$this->load->view('temp/head');
				$this->load->view('temp/heder');
				$this->load->view('edit-state', $data);
				$this->load->view('temp/sidebar');
				$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function update_state_master()

	{

		$sid = $this->input->post('sid');
		$name = $this->input->post('name');
		$code = $this->input->post('code');
		$status = $this->input->post('status');
		$update_data = array(
			'name' => $name,
			'code' => $code,
			'status' => $status,
		);

		$where = "sid = '$sid'";

		if ($this->Crud_modal->update_data($where, 'states', $update_data)) {
			$this->session->set_flashdata('states', '<div class="alert alert-warning"><strong>Success!</strong> State Data has Updated.</div>');
			redirect(base_url() . 'state');
		} else {
			$this->session->set_flashdata('states', '<div class="alert alert-danger"><strong>Failed!</strong> to Updated Data</div>');
			redirect(base_url() . 'state');
		}
	}

public function district()
	{
		$data['district_data'] = $this->Admin_model->get_state();
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		// echo '<pre>';
		// print_r($data['cities']);exit;
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('district',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
public function addistrict()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		// echo "<pre>";
		// print_r($data['states']);exit;
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-district',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

public function insert_district_master()

    {
        try {
            $createdata = array(
                'state_id' => $this->input->post('state_name'),
                'name' => $this->input->post('d_name'),
				'status' => $this->input->post('status'),
            );
			// echo '<pre>';
			// print_r($createdata);exit;
            $this->Crud_modal->data_insert('cities', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');
            redirect(base_url() . 'district');
        } 
		catch (Exception $e) {
         echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

public function edit_district()

	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				$ci_id = $this->uri->segment(2);
				$val = base64_decode(str_pad(strtr($ci_id, '-_', '+/'), strlen($ci_id) % 4, '=', STR_PAD_RIGHT));
				$where = "ci_id = '$val'";
				$data['cities'] = $this->Crud_modal->all_data_select('*', 'cities', $where, 'ci_id desc');
				$data['state'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
				$this->load->view('temp/head');
				$this->load->view('temp/heder');
				$this->load->view('edit-district', $data);
				$this->load->view('temp/sidebar');
				$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function update_district_master()

	{

		$ci_id = $this->input->post('ci_id');
		$name = $this->input->post('name');
		$state_id = $this->input->post('state_id');
		$status = $this->input->post('status');
		$update_data = array(

			'name' => $name,
			'state_id' => $state_id,
			'status' => $status,
		);
		$where = "ci_id = '$ci_id'";

		if ($this->Crud_modal->update_data($where, 'cities', $update_data)) {

			$this->session->set_flashdata('district', '<div class="alert alert-warning"><strong>Success!</strong> District Data has Updated.</div>');
			redirect(base_url() . 'district');
		} else {

			$this->session->set_flashdata('district', '<div class="alert alert-danger"><strong>Failed!</strong> to Updated Data</div>');
			redirect(base_url() . 'district');
		}
	}
	
public function block()
	{

	if($this->input->post()){
		$state = $this->input->post('state_name');
		$distric = $this->input->post('name');	
	}
		// if ($sid==7) {
		// 	$sid = $data['state_id'] = $this->session->userdata('sid');
		// 	$data['block'] = $this->Admin_model->get_all_block_report($where);
		// } 
		// if (isset($state)) {
		// 	$where="b.state_id=".$state;
		// 	$data['block'] = $this->Admin_model->get_all_block_report($where);
		// }
		if(isset($distric) ){
			$where="b.ci_id=".$distric;
			//$data['block'] = $this->Admin_model->get_all_block_report($where);
		} 
		else{
			$where="b.status=1";
		}
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['district_data'] = $this->Admin_model->get_city();
		// echo "<pre>";
		// print_r($data['states'] );exit;
		$data['block'] = $this->Admin_model->get_all_block_report($where);
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('block',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}


public function filter_block()
	{
		try {
			//  echo $where;die;
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				if ($sid = $this->input->post('state_name') && $city = $this->input->post('name')) {
					$sid = $this->input->post('state_name');
					$city = $this->input->post('name');
					$data['sid'] = $sid;
					$data['ci_id'] = $city;
					$where = "b.state_id='" . $sid . "' and b.ci_id='" . $city . "'";
				} 
				else if ($sid = $this->input->post('state_name')) {
					$sid = $this->input->post('state_name');
					$data['sid'] = $sid;
					 $where = "b.state_id='" . $sid . "'";
				} 
				else {
					$where = "b.status =1";
				}
				//echo "<pre>";
				 //print_r($where);exit;
				//$data['district_data'] = $this->Admin_model->get_city();	
				$data['district_data'] = $this->Admin_model->get_all_block_report($where);
				$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
				$this->load->view('temp/head', $data);
				$this->load->view('temp/heder', $data);
				$this->load->view('block', $data);
				$this->load->view('temp/sidebar', $data);
				$this->load->view('temp/footer', $data);
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	
public function addblock()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		//$data['cities'] = $this->Crud_modal->fetch_all_data('*', 'cities', 'status=1');
		
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-block',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

public function insert_block_master()
    {

        try {

            $createdata = array(
                'state_id' => $this->input->post('state_name'),
				'ci_id' => $this->input->post('name'),
                'block_name' => $this->input->post('block_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//  echo '<pre>';
			//  print_r($createdata);exit;
            $this->Crud_modal->data_insert('block', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'block');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
	public function update_block_master()

	{
		$id = $this->input->post('id');
		$block_name = $this->input->post('block_name');
		$state_id = $this->input->post('state_name');
		$ci_id = $this->input->post('name');
		$status = $this->input->post('status');
		$update_data = array(
	
			'state_id' => $state_id,
			'ci_id' => $ci_id,
			'block_name' => $block_name,
			'status' => $status,
		);
	// 	echo '<pre>';
	//  print_r($update_data);exit;
		$where = "id = '$id'";
		if ($this->Crud_modal->update_data($where, 'block', $update_data)) {
			$this->session->set_flashdata('block', '<div class="alert alert-warning"><strong>Success!</strong> District Data has Updated.</div>');
			redirect(base_url() . 'block');
		} else {
			$this->session->set_flashdata('district', '<div class="alert alert-danger"><strong>Failed!</strong> to Updated Data</div>');
			redirect(base_url() . 'block');
		}
	}	
public function edit_block()

{

	try {
		
		if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
			$id = $this->uri->segment(2);
			$val = base64_decode(str_pad(strtr($id, '-_', '+/'), strlen($id) % 4, '=', STR_PAD_RIGHT));
			$where = "id = '$val'";
			$data['block'] = $this->Crud_modal->fetch_all_data('*', 'block', $where, 'id desc');
			$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		    $data['block'] = $this->Crud_modal->fetch_all_data('*', 'block', 'status=1');
			$this->load->view('temp/head');
			$this->load->view('temp/heder');
			$this->load->view('edit-block', $data);
			$this->load->view('temp/sidebar');
			$this->load->view('temp/footer');
		} else {

			redirect(base_url() . 'login', 'refresh');
		}
	} catch (Exception $e) {

		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
}

	
	
// public function sector()
// 	{
// 		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
// 		$data['district_data'] = $this->Admin_model->get_city_block();
// 		$data['sector'] = $this->Crud_modal->fetch_alls('sector', 'sector_id  desc');
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('sector',$data);
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}
public function sector()
	{

	if($this->input->post()){
		$state = $this->input->post('state_name');
		$distric = $this->input->post('name');
		$block=$this->input->post('block_name')	;
	}
		
		if(isset($block) ){
			$where="sc.block_id=".$block;
			
		} 
		else{
			$where="sc.status=1";
		}
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['district_data'] = $this->Admin_model->get_city_block();
		//echo "<pre>";
		// print_r($data['district_data'] );exit;
		$data['block'] = $this->Admin_model->get_Sector_filter($where);
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('sector',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function filter_sector()
	{
		try {
			//  echo $where;die;
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				if ($sid = $this->input->post('state_name') && $city = $this->input->post('name')) {
					$sid = $this->input->post('state_name');
					$city = $this->input->post('name');
					$block = $this->input->post('block_name');
					$data['sid'] = $sid;
					$data['city_id'] = $city;
					$data['	block_id'] = $block;
					$where = "sc.state_id='" . $sid . "' and sc.city_id='" . $city . "' and sc.block_id='".$block."'";
				} 
				else if ($sid = $this->input->post('state_name')) {
					$sid = $this->input->post('state_name');
					$data['sid'] = $sid;
					 $where = "sc.state_id='" . $sid . "'";
				} 
				else {
					$where = "sc.status =1";
				}
				//echo "<pre>";
				 //print_r($where);exit;
				//$data['district_data'] = $this->Admin_model->get_city_block();	
				$data['district_data'] = $this->Admin_model->get_Sector_filter($where);
				$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
				$this->load->view('temp/head', $data);
				$this->load->view('temp/heder', $data);
				$this->load->view('sector', $data);
				$this->load->view('temp/sidebar', $data);
				$this->load->view('temp/footer', $data);
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

public function addsector()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['cities'] = $this->Crud_modal->fetch_all_data('*', 'cities', 'status=1');
		$data['block'] = $this->Crud_modal->fetch_all_data('*', 'block', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-sector',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

public function insert_sector_master()
    {

        try {

            $createdata = array(
				'state_id' => $this->input->post('sid'),
				'city_id' => $this->input->post('ci_id'),
                'block_id' => $this->input->post('block_id'),
				'sector_name' => $this->input->post('sector_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//   echo '<pre>';
			//   print_r($createdata);exit;
            $this->Crud_modal->data_insert('sector', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'sector');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
	
// public function subsector()
// 	{
// 		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
// 		$data['district_data'] = $this->Admin_model->get_city_block_sector();
// 		$data['sub_sector'] = $this->Crud_modal->fetch_alls('sub_sector', 'sub_id  desc');
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('sub-sector',$data);
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}


public function subsector()
	{

	if($this->input->post()){
		$state = $this->input->post('state_name');
		$distric = $this->input->post('name');
		$block=$this->input->post('block_name')	;
		$sector=$this->input->post('sector_name')	;
	}
		
		if(isset($sub_sector) ){
			$where="ss.sub_id =".$sub_sector;
			
		} 
		else{
			$where="ss.status=1";
		}
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['district_data'] = $this->Admin_model->get_city_block_sector();
		//echo "<pre>";
		// print_r($data['district_data'] );exit;
		$data['sub_sector'] = $this->Admin_model->get_sub_Sector_filter($where);
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('sub-sector',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function filter_sub_sector()
	{
		try {
			//  echo $where;die;
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				if ($sid = $this->input->post('state_name') && $city = $this->input->post('name')) {
					$sid = $this->input->post('state_name');
					$city = $this->input->post('name');
					$block = $this->input->post('block_name');
					$sector = $this->input->post('sector_name');
					$data['sid'] = $sid;
					$data['city_id'] = $city;
					$data['block_id'] = $block;
					$data['sector_id'] = $sector;
					$where = "ss.state_id='" . $sid . "' and ss.city_id='" . $city . "' and ss.block_id='".$block."' and ss.sector_id='".$sector."'";
				} 
				else if ($sid = $this->input->post('state_name')) {
					$sid = $this->input->post('state_name');
					$data['sid'] = $sid;
					 $where = "ss.state_id='" . $sid . "'";
				} 
				else {
					$where = "ss.status =1";
				}
				//echo "<pre>";
				 //print_r($where);exit;
				//$data['district_data'] = $this->Admin_model->get_city_block();	
				$data['district_data'] = $this->Admin_model->get_sub_Sector_filter($where);
				$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
				$this->load->view('temp/head', $data);
				$this->load->view('temp/heder', $data);
				$this->load->view('sub-sector', $data);
				$this->load->view('temp/sidebar', $data);
				$this->load->view('temp/footer', $data);
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	
public function adsubsector()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['cities'] = $this->Crud_modal->fetch_all_data('*', 'cities', 'status=1');
		$data['block'] = $this->Crud_modal->fetch_all_data('*', 'block', 'status=1');
		$data['sector'] = $this->Crud_modal->fetch_all_data('*', 'sector', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-sub-sector',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function insert_sub_sector()
    {

        try {

            $createdata = array(
                
				'state_id' => $this->input->post('sid'),
				'city_id' => $this->input->post('city_id'),
                'block_id' => $this->input->post('block_id'),
				'sector_id' => $this->input->post('sector_name'),
				'sub_sector_name' => $this->input->post('sub_sector_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//   echo '<pre>';
			//   print_r($createdata);exit;
            $this->Crud_modal->data_insert('sub_sector', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'sub-sector');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
	
// public function employee()
// 	{
// 		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
// 		$data['district_data'] = $this->Admin_model->get_all_employee();
// 		$data['employee'] = $this->Crud_modal->fetch_alls('employee', 'emp_id  desc');
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('employee-master',$data);
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}

public function employee()
	{

	if($this->input->post()){
		$state = $this->input->post('state_name');
		$distric = $this->input->post('district_name');
		$block=$this->input->post('b_name')	;
		$sector=$this->input->post('sector_name')	;
	}
		
		if(isset($employee) ){
			$where="e.emp_id =".$employee;
			
		} 
		else{
			$where="e.status=1";
		}
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['district_data'] = $this->Admin_model->get_all_employee();
		//echo "<pre>";
		// print_r($data['district_data'] );exit;
		$data['employee'] = $this->Admin_model->get_employee_filter($where);
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('employee-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}


	public function filter_employee()
	{
		try {
			//  echo $where;die;
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				if ($sid = $this->input->post('state_name') && $city = $this->input->post('name')) {
					$sid = $this->input->post('state_name');
					$city = $this->input->post('district_name');
					$block = $this->input->post('b_name');
					$sector = $this->input->post('sector_name');
					$data['sid'] = $sid;
					$data['ci_id'] = $city;
					$data['	block_id'] = $block;
					$data['sector_id'] = $sector;
					$where = "e.sid='" . $sid . "' and e.ci_id='" . $city . "' and e.block_id='".$block."' and e.sector_id='".$sector."'";
				} 
				else if ($sid = $this->input->post('state_name')) {
					$sid = $this->input->post('state_name');
					$data['sid'] = $sid;
					 $where = "e.sid='" . $sid . "'";
				} 
				else {
					$where = "e.status =1";
				}
				//echo "<pre>";
				 //print_r($where);exit;
				//$data['district_data'] = $this->Admin_model->get_city_block();	
				$data['district_data'] = $this->Admin_model->get_employee_filter($where);
				$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
				$this->load->view('temp/head', $data);
				$this->load->view('temp/heder', $data);
				$this->load->view('employee-master', $data);
				$this->load->view('temp/sidebar', $data);
				$this->load->view('temp/footer', $data);
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}



	
public function addemployee()
	{
		$data['master_role'] = $this->Crud_modal->fetch_all_data('*', 'master_role', 'status=1');
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['cities'] = $this->Crud_modal->fetch_all_data('*', 'cities', 'status=1');
		$data['block'] = $this->Crud_modal->fetch_all_data('*', 'block', 'status=1');
		$data['sector'] = $this->Crud_modal->fetch_all_data('*', 'sector', 'status=1');
		// echo "<pre>";
		// print_r ($data['sector']);exit;
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-employee-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function insert_employee_master()
    {

        try {

            $createdata = array(
				'emp_name' => $this->input->post('emp_name'),
				'role_id' => $this->input->post('role_name'),
				'emp_contact' => $this->input->post('emp_contact'),
				'emp_gender' => $this->input->post('emp_gender'),
				'sid' => $this->input->post('sid'),
				'ci_id' => $this->input->post('name'),
                'block_id' => $this->input->post('block_id'),
				'sector_id' => $this->input->post('sector_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//   echo '<pre>';
			//   print_r($createdata);exit;
            $this->Crud_modal->data_insert('employee', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'employee-master');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
	
// public function trainee()
// 	{
		
// 		$data['district_data'] = $this->Admin_model->get_all_trainee();
// 		$data['trainee_master'] = $this->Crud_modal->fetch_alls('trainee_master', 'trainee_id   desc');
// 		$this->load->view('temp/head');
// 		$this->load->view('temp/heder');
// 		$this->load->view('trainee-master',$data);
// 		$this->load->view('temp/sidebar');
// 		$this->load->view('temp/footer');
// 	}
	// public function trainee()
	// {

	// if($this->input->post()){
	// 	$state = $this->input->post('state_name');
	// 	$distric = $this->input->post('name');
	// 	$block=$this->input->post('block_name');
	// 	$sector=$this->input->post('sector_name');
	// 	$sub_id=$this->input->post('sub_sector_name');
	// }
		
	// 	if(isset($sub_id) ){
	// 		$where="tm.sub_id  =".$sub_id;
			
	// 	} 
	// 	else{
	// 		$where="tm.status=1";
	// 	}
	// 	$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
	// 	$data['district_data'] = $this->Admin_model->get_all_trainee();
	// 	//echo "<pre>";
	// 	// print_r($data['district_data'] );exit;
	// 	$data['trainee_master'] = $this->Admin_model->trainee_filter($where);
	// 	$this->load->view('temp/head');
	// 	$this->load->view('temp/heder');
	// 	$this->load->view('trainee-master',$data);
	// 	$this->load->view('temp/sidebar');
	// 	$this->load->view('temp/footer');
	// }

	public function trainee()
	{

	if($this->input->post()){
		$state = $this->input->post('state_name');
		$distric = $this->input->post('name');
		$block=$this->input->post('block_name');
		$sector=$this->input->post('sector_name');
		$sub_id=$this->input->post('sub_sector_name');
	}
		
		if(isset($state) ){
			$where="tm.state_id  =".$state;
			
		}
		elseif(isset($distric) ){
			$where="tm.city_id  =".$distric;
			
		}
		elseif(isset($block) ){
			$where="tm.block_id  =".$block;
			
		}
		elseif(isset($sector) ){
			$where="tm.sector_id  =".$sector;
			
		} 
		elseif(isset($sub_id) ){
			$where="tm.sub_id  =".$sub_id;
			
		}    
		else{
			$where="tm.status=1";
		}
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['district_data'] = $this->Admin_model->get_all_trainee();
		//echo "<pre>";
		// print_r($data['district_data'] );exit;
		$data['trainee_master'] = $this->Admin_model->trainee_filter($where);
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('trainee-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function filter_trainee()
	{
		try {
			
			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {
				if ($sid = $this->input->post('state_name') && $city = $this->input->post('name')) {
					$sid = $this->input->post('state_name');
					$city = $this->input->post('district_name');
					$block = $this->input->post('b_name');
					$sector = $this->input->post('sector_name');
					$sub_sector = $this->input->post('sub_sector_name');
					$data['sid'] = $sid;
					$data['city_id'] = $city;
					$data['	block_id'] = $block;
					$data['sector_id'] = $sector;
					$data['sub_id'] = $sector;
					$where = "tm.state_id='" . $sid . "' and tm.city_id='" . $city . "' and tm.block_id='".$block."' and tm.sector_id='".$sector."'";
				} 
				else if ($sid = $this->input->post('state_name')) {
					$sid = $this->input->post('state_name');
					$data['sid'] = $sid;
					 $where = "tm.state_id='" . $sid . "'";
				} 
				else {
					$where = "tm.status =1";
				}
				// trainee
				$data['district_data'] = $this->Admin_model->trainee_filter($where);
				$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
				$this->load->view('temp/head', $data);
				$this->load->view('temp/heder', $data);
				$this->load->view('trainee-master', $data);
				$this->load->view('temp/sidebar', $data);
				$this->load->view('temp/footer', $data);
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	

public function addtrainee()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$data['cities'] = $this->Crud_modal->fetch_all_data('*', 'cities', 'status=1');
		$data['block'] = $this->Crud_modal->fetch_all_data('*', 'block', 'status=1');
		$data['sector'] = $this->Crud_modal->fetch_all_data('*', 'sector', 'status=1');
		$data['employee'] = $this->Crud_modal->fetch_all_data('*', 'employee', 'status=1');
		$data['sub_sector'] = $this->Crud_modal->fetch_all_data('*', 'sub_sector', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-trainee-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function insert_trainee_master()
    {

        try {

            $createdata = array(
				'trainee_name' => $this->input->post('trainee_name'),
				// 'trainee_email' => $this->input->post('trainee_email'),
				'trainee_mobile' => $this->input->post('trainee_mobile'),
				'trainee_gender' => $this->input->post('trainee_gender'),
				'trainer_id' => $this->input->post('trainer_id'),
				'state_id' => $this->input->post('sid'),
				'city_id' => $this->input->post('name'),
                'block_id' => $this->input->post('block_id'),
				'sector_id' => $this->input->post('sector_name'),
				'sub_id' => $this->input->post('sub_sector_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//   echo '<pre>';
			//   print_r($createdata);exit;
            $this->Crud_modal->data_insert('trainee_master', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'trainee-master');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

	public function training_master()
	{
	try{
		if($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)
		{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('training-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
		}
		else{
			redirect(base_url() . 'login', 'refresh');
		}
	}
	catch (Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	}

	public function add_training_master()
	{
	try{
		if($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)
		{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-training-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
		}
		else{
			redirect(base_url() . 'login', 'refresh');
		}
	}
	catch (Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	}
	
	
public function mappingtrainer()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('mapping-trainer-anms');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
public function modulemaster()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('module-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function add_module_master()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-module-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
public function questionanswer()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('question-answer-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
public function addquestionanswer()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-question-answer-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
	
public function pretest()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('pre-test');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
	
public function addpretest()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-pre-test');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
public function employeereports()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('employee-reports');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
public function tranieereports()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('traniee-reports');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
	function get_city()
	{

		$stat = $this->input->post('sid');
		$city = $this->Crud_modal->all_data_select('*', 'cities', "state_id='$stat' AND status=1 ", 'name ASC');
		echo '<option value="">---Select District---</option>';
		foreach ($city as $city) {
			$city_id = $city['ci_id'];
			$city_nam = $city['name'];
			echo '<option value="' . $city_id . '">' . rtrim($city_nam, ' ') . '</option>';
		}
	}


	
	function get_block()
	{
		$city = $this->input->post('ci_id');
		$block = $this->Crud_modal->all_data_select('*', 'block', "ci_id='$city'", 'block_name ASC');
		echo '<option value="">---Select Block---</option>';
		foreach ($block  as $block ) {
			$block_id = $block['id'];
			$block_nam = $block['block_name'];
			echo '<option value="' . $block_id . '">' . rtrim($block_nam, ' ') . '</option>';
		}
	}

	function get_sector()
	{

		$block = $this->input->post('id');
		$sector = $this->Crud_modal->all_data_select('*', 'sector', "block_id='$block'", 'sector_name ASC');
       //print_r($sector);
		echo '<option value="">---Select Sector---</option>';
		foreach ($sector  as $sector ) {
			$sector_id = $sector['sector_id'];
			$sector_nam = $sector['sector_name'];
			echo '<option value="' . $sector_id . '">' . rtrim($sector_nam, ' ') . '</option>';
		}
	}

	function get_sub_sector()
	{
		$sector = $this->input->post('sector_id');
		$sub_sector= $this->Crud_modal->all_data_select('*', 'sub_sector', "sector_id='$sector'", '	sub_sector_name ASC');
       //print_r($sector);
		echo '<option value="">---Select Sector---</option>';
		foreach ($sub_sector  as $sub_sector ) {
			$sub_id  = $sub_sector['sub_id'];
			$sub_sector_nam = $sub_sector['sub_sector_name'];
			echo '<option value="' . $sub_id . '">' . rtrim($sub_sector_nam, ' ') . '</option>';
		}
	}


	function get_city_trainee()
	{

		$state = $this->input->post('siid');
		$cities = $this->Crud_modal->all_data_select('*', 'cities', "state_id='$state' AND status=1 ", 'name ASC');
		echo '<option value="">---Select District---</option>';
		foreach ($cities as $cities) {
			$city_id = $cities['ci_id'];
			$city_name = $cities['name'];
			echo '<option value="' . $city_id . '">' . rtrim($city_name, ' ') . '</option>';
		}
	}


	function get_block_trainee()
	{
		$city = $this->input->post('ci_id');
		$block = $this->Crud_modal->all_data_select('*', 'block', "ci_id='$city'", 'block_name ASC');
		echo '<option value="">---Select Block---</option>';
		foreach ($block  as $block ) {
			$block_id = $block['id'];
			$block_nam = $block['block_name'];
			echo '<option value="' . $block_id . '">' . rtrim($block_nam, ' ') . '</option>';
		}
	}

	function get_sector_trainee()
	{

		$block = $this->input->post('id');
		$sector = $this->Crud_modal->all_data_select('*', 'sector', "block_id='$block'", 'sector_name ASC');
       //print_r($sector);
		echo '<option value="">---Select Sector---</option>';
		foreach ($sector  as $sector ) {
			$sector_id = $sector['sector_id'];
			$sector_nam = $sector['sector_name'];
			echo '<option value="' . $sector_id . '">' . rtrim($sector_nam, ' ') . '</option>';
		}
	}

	public function trainer_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('trainer-report');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function menu_master()
	{
		$data['master_menu'] = $this->Crud_modal->fetch_all_data('*', 'master_menu', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('menu-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	
	public function insert_menu_master()
    {

        try {

            $createdata = array(
				'menu_description' => $this->input->post('menu_description'),
				'menu_route_name' => $this->input->post('menu_route_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//   echo '<pre>';
			//   print_r($createdata);exit;
            $this->Crud_modal->data_insert('master_menu', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'menu-master');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

	public function edit_menu()
	{

		try {

			if (($this->session->userdata('emp_id') != "" || $this->session->userdata('emp_id') != null)) {

				$menu_id = $this->uri->segment(2);

				$val = base64_decode(str_pad(strtr($menu_id, '-_', '+/'), strlen($menu_id) % 4, '=', STR_PAD_RIGHT));

				$where = "menu_id = '$val'";

				$data['master_menu'] = $this->Crud_modal->all_data_select('*', 'master_menu', $where, 'menu_id desc');

				$this->load->view('temp/head');

				$this->load->view('temp/heder');
				$this->load->view('edit-menu', $data);
				$this->load->view('temp/sidebar');

				$this->load->view('temp/footer');
			} else {

				redirect(base_url() . 'login', 'refresh');
			}
		} catch (Exception $e) {

			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	public function add_menu_master()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-menu-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function sub_menu_master()
	{
		$field="sm.*,mm.menu_description";
      	$table_name="master_sub_menu sm";
      	$join1[0]="master_menu mm";
      	$join1[1]="mm.menu_id=sm.menu_id";
      	$where="sm.status=1";
      	$data['master_sub_menu'] = $this->Crud_modal->fetch_data_by_one_table_join($field,$table_name,$join1,$where);
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('sub-menu-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function add_submenu()
	{
		$data['master_menu'] = $this->Crud_modal->fetch_all_data('*', 'master_menu', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-submenu',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function insert_sub_menu_master()
    {
        try {
            $createdata = array(
				'menu_id' => $this->input->post('menu_description'),
				'sub_menu_description' => $this->input->post('sub_menu_description'),
				'sub_menu_route' => $this->input->post('sub_menu_route'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
            $this->Crud_modal->data_insert('master_sub_menu', $createdata);
            $this->session->set_flashdata('master_sub_menu_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Sub Menu Master has Inserted.</div>');
            redirect(base_url() . 'sub-menu-master');
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
	
	public function trainer_master()
	{
		
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('trainer-master');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	public function add_trainer_master()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('add-trainer-master',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function insert_trainer_master()
    {

        try {

            $createdata = array(
				'trainer_name' => $this->input->post('trainer_name'),
				'trainer_contact' => $this->input->post('trainer_contact'),
				'trainer_gender' => $this->input->post('trainer_gender'),
				// 'trainer_email' => $this->input->post('trainer_email'),
				'sid' => $this->input->post('sid'),
				'ci_id' => $this->input->post('name'),
                'block_id' => $this->input->post('block_id'),
				'sector_id' => $this->input->post('sector_name'),
				'creation_date' => date('Y-m-d H:i:s'),
				'status' => $this->input->post('status'),
            );
			//   echo '<pre>';
			//   print_r($createdata);exit;
            $this->Crud_modal->data_insert('trainer-master', $createdata);
            //$this->session->set_flashdata('role_insert_message', '<div class="alert alert-info"><strong>Success!</strong> Role Master has Inserted.</div>');

            redirect(base_url() . 'trainer-master');
        } catch (Exception $e) {

            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
	
	public function traniee_reports()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('traniee-reports');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function district_wise_report()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('district-wise-report');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function trainee_performance()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('trainee-performance');
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}
	public function trainee_transfer()
	{
		$data['states'] = $this->Crud_modal->fetch_all_data('*', 'states', 'status=1');
		$this->load->view('temp/head');
		$this->load->view('temp/heder');
		$this->load->view('trainee-transfer',$data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/footer');
	}

	public function import_csv()
	{
		try {
			$this->load->view('import');
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}

	public function insert_import_cvs()
	{
		try {
			if ($this->input->post('importSubmit')) {
				//get the csv file 		
				$file = $_FILES['file']['tmp_name'];
				$handle = fopen($file, "r");
				$allData = array();
				$data = fgetcsv($handle, "7000", ";"); 
				// echo "<pre>";
				// print_r($data);
				// die;
				while (($data = fgetcsv($handle, "7000", ",")) != FALSE) {
				// 	echo "<pre>";
				// print_r($data);

					$state_id = 7;
					$city_id = $data['1'];
					$block_id = $data['2'];
					$sub_id = $data['3'];
					$trainee_name = $data['4'];
					$trainee_mobile = $data['5'];
					$sector_id = $data['6'];
					$trainer_id = $data['7'];

					$uploadData = array(
						//'trainee_id' => $trainee_id,
						'state_id' => $state_id,
						'city_id' => $city_id,
						'block_id' => $block_id,
						'sub_id' => $sub_id,
						'trainee_name' => $trainee_name,
						'trainee_mobile' => $trainee_mobile,
						'sector_id' => $sector_id,
						'trainer_id' => $trainer_id,
						'status'=>1
					);
					array_push($allData, $uploadData);
				}
				// echo "<pre>";
				// print_r($allData);
				// die;
				//$this->Crud_modal->insert_batch('trainee_master', $allData);
			}
		} catch (Exception $e) {
		}
	}
	
}


	
	
	
		