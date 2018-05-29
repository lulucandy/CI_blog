<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Category extends CI_Controller {
    /*题库管理*/
	public function index(){
		$this->load->view('index/category.html');
	}

	/*增添题目*/
	public function cate_add(){
		$this->load->view('index/cate_add.html');
	}

	/*修改题目*/
	public function cate_mod(){
		
		$this->load->view('index/cate_mod.html');
	}

	/*删除题目*/
	public function cate_del(){
		$this->load->view('index/cate_del.html');
	}

	/*查找题目*/
	public function cate_seek(){
		$this->load->view('index/cate_seek.html');
	}


}