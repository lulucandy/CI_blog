<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Categorys extends CI_Model {
	 public function get_all(){
    	$res="SELECT stu,stu_major,grade FROM `student_info`";
    	$result = $this->db->query($res)->result_array();
    	return $result;
	}

}