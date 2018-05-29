<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Students extends CI_Model {
	public function add($stu_id,$stu,$stu_major,$stu_passwd,$stu_sex){
		$sql = "INSERT INTO `student_info` (`stu_id`, `stu`, `stu_major`, `stu_passwd`, `grade`, `stu_sex`) VALUES ('$stu_id', '$stu', '$stu_major', '$stu_passwd', 0, '$stu_sex')";
		//var_dump($sql);die;
		$result = $this->db->query($sql);
    	return $result;
	}

	public function del(){
		$res="SELECT stu_id,stu,stu_major,grade FROM `student_info`";
		$result = $this->db->query($res)->result_array();
    	return $result;
	}

	public function mod(){

	}
	
}