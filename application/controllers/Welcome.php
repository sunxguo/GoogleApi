<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index2()
	{
		// $this->load->view('welcome_message');
		$url="https://maps.googleapis.com/maps/api/geocode/json";
		$param=array(
			'address'=>"1600+Amphitheatre+Parkway,+Mountain+View,+CA",
			'key'=>"AIzaSyBSA5oOEb1bJ8zmlXG0ZLzLMNoocr-bvcQ"
			);
		$result=httpGet($url, $param);
		print_r($result);
	}
	public function tolatlng()
	{
		// $this->load->view('welcome_message');
		$address=isset($_GET['address'])?$_GET['address']:'';
		$url_language=isset($_GET['language'])?'&language='.$_GET['language']:'';
		$url="https://maps.googleapis.com/maps/api/geocode/json?address=".$address."&key=AIzaSyBSA5oOEb1bJ8zmlXG0ZLzLMNoocr-bvcQ".$url_language;
		$result=httpGet($url);
		print_r($result);
	}
	public function toAddress(){
		// https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY
		$latlng=isset($_GET['latlng'])?$_GET['latlng']:'';
		$url_language=isset($_GET['language'])?'&language='.$_GET['language']:'';
		$url="https://maps.googleapis.com/maps/api/geocode/json?latlng=".$latlng."&key=AIzaSyBSA5oOEb1bJ8zmlXG0ZLzLMNoocr-bvcQ".$url_language;
		$result=httpGet($url);
		print_r($result);
	}
	public function index(){
		$requestUrl = 'https://maps.googleapis.com/maps/api/geocode/json';
		$ch = curl_init();
		$timeout = 50;
		curl_setopt($ch, CURLOPT_URL, $requestUrl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
		curl_setopt($ch, CURLOPT_PROXY, "u46.vpntm.com:80"); //代理服务器地址
		// curl_setopt($ch, CURLOPT_PROXYPORT, 80); //代理服务器端口
		curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'MonkeyKing:19910910Mk1024'); //http代理认证帐号，username:password的格式
		curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式
		$file_contents = curl_exec($ch);
		curl_close($ch);
		echo $file_contents;
	}
}
