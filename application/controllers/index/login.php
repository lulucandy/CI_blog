<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {
	// public function __construct(){
	// 	//$this->load->library('session');
	// }

    /* 登录 */
	public function index()	{
		//载入验证码辅助函数
		$this->load->helper('captcha');
		$speed ='sfljlwjqrljlfafasdrhsgfuiahjfdsghdyugi1567265746686757867210';
		$word = '';
		for($i = 0 ;$i<4;$i++){
			$word .=$speed[mt_rand(0,strlen($speed) -1 )];
		}
		//配置项
		$vals = array(
			'word'=>$word,
			'img_path'=>'./captcha/',
			'img_url'=>base_url() .'/captcha/',
			'img_width'=>80,
			'img_height'=>25,
			'expiration'=>60
			);
		//创建验证码
		$cap = create_captcha($vals);
		//var_dump($cap);die;
		$data['captcha'] = $cap['image'];

		$this->load->view('index/login.html',$data);
	}
		//echo site_url('regist');die;
	// }
 // 	public function code(){
 // 		$config = array (
 // 			'width' => 80,
 // 			'heigtht' => 25,
 // 			'codeLen' => 1,
 // 			'fontSize' => 16
 // 			);
 // 		$this->load->library('code',$config);
 // 		$this->code->show();
 // 	}
		public function login_in(){
			// echo site_url();die;
	 		$username = $this->input->post('user_id');
 			$password = md5($this->input->post('password'));
 			$this->load->model('index', 'index');
 			$user = $this->index->login($username);
 			//
 			//echo $user->admin;die;
 			//print_r($user);die;
 			//$passwd = $this->index->log_in($password);
 		
	 		if($user){
 				if($user->ad_passwd == $password){
	
 					$_SESSION['$user'];
 					success('index/home/index','登录成功');
 				}else{
 					error('用户名或者密码不正确');
 				}	
 			}else{
 				error('用户名或者密码不正确');
 			}
 	
 		}
}
