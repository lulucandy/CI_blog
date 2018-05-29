<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Student extends CI_Controller {
	
	/*学生管理*/
	public function index(){
		$this->load->view('index/student.html');
	}

	/*增加学生*/
	public function stu_add(){
		$this->load->view('index/stu_add.html');
	}

	/*删除学生*/
	public function stu_del(){
		$this->load->view('index/stu_del.html');
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