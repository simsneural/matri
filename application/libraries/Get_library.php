<?php 
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Get_library
{
    private $CI;
 
    function __construct()
    {
        $this->CI = get_instance();
        $this->CI->load->library('encrypt');
        
    }
 
    public function encode($val)
    {
      $incode = $this->CI->encrypt->encode($val);
      return $incode;
    }
    public function decode($val)
    {
      $decode = $this->CI->encrypt->decode($val);
      return $decode;
    }
    
    public function remove_from_img($img)
    {
        $sptl = str_replace(' ','_',$img);
		$sst = explode('.',$sptl);
		$ptr = sizeof($sst);
		$ppp = 1;
		$sss = "";
		foreach($sst as $val)
		{
		    ++$ppp;
		    if($sss=="")
		    {
		        $sss=$val;
		    }
		    else
		    {
		        if($ppp<=$ptr)
		        {
		            $sss.='_'.$val;
		        }
		        else
		        {
		            $sss.='.'.$val;
		        }
		    }
		    
		}
		
		
		return $sss;
    }  
    
    
}
?>