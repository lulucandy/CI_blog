<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Subject extends CI_Controller {
	/*科目管理*/
	public function index(){
		$this->load->view('index/subject.html');
	}
	/*增加科目*/
	public function sub_add(){
		$this->load->view('index/sub_add.html');
	}

	/*删除科目*/
	public function sub_del(){
		$this->load->view('index/sub_del.html');
	}

	/*修改科目*/
	public function sub_mod(){
		$this->load->view('index/sub_mod.html');
	}

}