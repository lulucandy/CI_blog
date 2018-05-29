<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
=======


>>>>>>> e8b85b2ab259af8cdd8e4a87a2c06c3c8551b59b
class Student extends CI_Controller {
	
	/*学生管理*/
	public function index(){
		$this->load->view('index/student.html');
	}
<<<<<<< HEAD
   
    public function stu_add_html(){
    	 $this->load->view('index/stu_add.html');
    }

	/*增加学生*/
	public function stu_add(){
		// $this->load->model('students','students');
		// $data['stu'] = $this->students->add();
		
		$stu_id = $this->input->post('stu_id');
		if(empty($stu_id)){
				error('学号不能为空！');
		}
		if(strlen($stu_id)>8){
				error('请输入正确格式的学号！');
		}
		
		$stu = $this->input->post('stu');
		$stu_major = $this->input->post('stu_major');
 		$stu_passwd = md5($this->input->post('stu_passwd'));
 		$stu_sex = $this->input->post('stu_sex');
 		if($stu_sex == '男'){
 			$stu_sex = 0;
 		}else{
 			$stu_sex = 1;
 		}
 		$this->load->model('students', 'students');
		$user = $this->students->add($stu_id,$stu,$stu_major,$stu_passwd,$stu_sex);
		if($user){
			success('index/student','添加成功');
		}else{
			error('您的输入有误，请重新输入！');
		}

=======

	/*增加学生*/
	public function stu_add(){
		$this->load->view('index/stu_add.html');
>>>>>>> e8b85b2ab259af8cdd8e4a87a2c06c3c8551b59b
	}

	/*删除学生*/
	public function stu_del(){
<<<<<<< HEAD
		$this->load->model('students','students');
		$data['stu'] = $this->students->del();
		$this->load->view('index/stu_del.html',$data);
		//$this->load->view('index/stu_del.html');
=======
		$this->load->view('index/stu_del.html');
>>>>>>> e8b85b2ab259af8cdd8e4a87a2c06c3c8551b59b
	}
	/*修改学生*/
	public function stu_mod(){
		$this->load->view('index/stu_mod.html');
	}
	/*查找学生*/
	public function stu_seek(){
		$this->load->view('index/stu_seek.html');
	}


}