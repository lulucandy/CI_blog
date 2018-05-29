<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Test extends CI_Controller {
		/*试题管理*/
	public function index(){
		$this->load->view('index/test.html');
	}

		/*查找试卷*/
	public function test_seek(){
		$this->load->view('index/test_seek.html');
	}

		/*批改试卷*/
	public function test_corr(){
		$this->load->view('index/test_corr.html');
	}

		/*删除试卷*/
	public function test_del(){
		$this->load->view('index/test_del.html');
	}

		/*添加试卷*/
	public function test_add(){
		$this->load->view('index/test_add.html');
	}
		
		/*修改试卷*/
	public function test_mod(){
		$this->load->view('index/test_mod.html');
	}

}