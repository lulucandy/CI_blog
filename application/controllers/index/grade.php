<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Grade extends CI_Controller {
	/*分数统计*/
	public function index(){
		$this->load->view('index/grade.html');
		//echo site_url();die;
	}
	public function grad_rank(){
		$this->load->model('grades','grades');
		$data['stu'] = $this->grades->get_all();
		$this->load->view('index/grad_rank.html',$data);
	}

}