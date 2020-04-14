<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$data['setting'] = $this->data->get_data('settings','s_id')->row();
		$data['lang'] = $this->session->userdata('lang');
		$data['login'] = $this->session->userdata('login');
		// get all menu number start
		$where = array('m_parent' => 0);
		$data['menus_num'] = $this->data->get_data_where('menu', $where, 'm_id')->num_rows();
		$data['menus'] = $this->data->get_data_where('menu', $where, 'm_order', 'asc')->result();
		// get all menu number end
		// get all pages number start
		$where = array('p_nav_footer' => 1,'p_status' => 1);
		$data['footer_pages_num'] = $this->data->get_data_where('pages', $where, 'p_id')->num_rows();
		$data['footer_pages'] = $this->data->get_data_where('pages', $where, 'p_id')->result();
		// get all pages number end

		$expire = $this->input->cookie('time', true);
		if($expire != 1){
			
			$this->data->sset();

			$cookie = array(
				'name'   => 'time',
				'value'  => 1,
				'expire' => '60',
			);
			$this->input->set_cookie($cookie);
		}
		$this->load->view('cmd',$data);
	}
	
	public function index()
	{

		
		// get all slider number start
		$where = array('s_status' => 1);
		$data['slider_num'] = $this->data->get_data_where('slider', $where, 's_id')->num_rows();
		$data['slider'] = $this->data->get_data_where('slider', $where, 's_order','asc')->result();
		// get all slider number end
		
		// get all service number start
		$where = array('s_status' => 1,'s_on_index'=>1);
		$data['service_num'] = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		$data['service'] = $this->data->get_data_where('services', $where, 's_order', 'asc')->result();
		// get all service number end

		// get all client number start
		$data['client_num'] = $this->data->get_data('clients','c_id')->num_rows();
		$data['client'] = $this->data->get_data('clients','c_id')->result();
		// get all client number end

		// get all testimonial number start
		$data['testimonial_num'] = $this->data->get_data('testimonials','t_id')->num_rows();
		$data['testimonial'] = $this->data->get_data('testimonials','t_id')->result();
		// get all testimonial number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc,$s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys,$s->s_ar_keys);
		$data['title'] = 'Home';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/main');
		$this->load->view('esh/footer');
	}
	public function news()
	{
		// get all article number start
		$where = array('a_status' => 1);
		$data['article_num'] = $this->data->get_data_where('articles', $where, 'a_id')->num_rows();
		$data['article'] = $this->data->get_data_where('articles', $where, 'a_id')->result();
		// get all article number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'News & Events';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/news');
		$this->load->view('esh/footer');
	}
	public function careers()
	{
		// get all career number start
		$data['career_num'] = $this->data->get_data('careers', 'c_id')->num_rows();
		$data['career'] = $this->data->get_data('careers', 'c_id')->result();
		// get all career number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Careers';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/careers');
		$this->load->view('esh/footer');
	}
	public function prices()
	{
		// get all citis number start
		$where = array('c_parent'=> 0);
		$data['citis_num'] = $this->data->get_data_where('citis',$where, 'c_id')->num_rows();
		$data['citis'] = $this->data->get_data_where('citis',$where, 'c_id')->result();
		// get all citis number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'prices';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/price');
		$this->load->view('esh/footer');
	}
	
	public function partners()
	{
		// get all partners number start
		$data['partners_num'] = $this->data->get_data('partners','p_id')->num_rows();
		$data['partners'] = $this->data->get_data('partners','p_id')->result();
		// get all testimonial number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Partners';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/partners');
		$this->load->view('esh/footer');
	}
	
	public function track()
	{
		$numbers = $this->input->post('numbers');
		$numbers = explode(',',$numbers);
		$data['numbers']=$numbers;
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Track';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/track');
		$this->load->view('esh/footer');
	}
	
	public function track2()
	{
		
		$data['']='';
		$where = array('s_status' => 1);
		$data['service_num'] = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		$data['service'] = $this->data->get_data_where('services', $where, 's_id')->result();
		// get all service number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Track';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/track2');
		$this->load->view('esh/footer');
	}
	
	
	public function qout()
	{
		
		$data['']='';
		$where = array('s_status' => 1);
		$data['service_num'] = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		$data['service'] = $this->data->get_data_where('services', $where, 's_id')->result();
		// get all service number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Request Qoute';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/qout');
		$this->load->view('esh/footer');
	}
	public function photos()
	{
		
		$data['']='';
		$where = array('a_type' => 0);
		$data['albom_num'] = $this->data->get_data_where('albom', $where, 'a_id')->num_rows();
		$data['albom'] = $this->data->get_data_where('albom', $where, 'a_id')->result();
		// get all albom number end
		
		$where = array('m_type' => 0);
		$data['media_num'] = $this->data->get_data_where('media', $where, 'm_id')->num_rows();
		$data['media'] = $this->data->get_data_where('media', $where, 'm_id')->result();
		// get all media number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Photos';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/photos');
		$this->load->view('esh/footer');
	}
	public function videos()
	{
		
		$data['']='';
		$where = array('a_type' => 1);
		$data['albom_num'] = $this->data->get_data_where('albom', $where, 'a_id')->num_rows();
		$data['albom'] = $this->data->get_data_where('albom', $where, 'a_id')->result();
		// get all albom number end

		$where = array('m_type' => 1);
		$data['media_num'] = $this->data->get_data_where('media', $where, 'm_id')->num_rows();
		$data['media'] = $this->data->get_data_where('media', $where, 'm_id')->result();
		// get all media number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Videos';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/videos');
		$this->load->view('esh/footer');
	}
	public function contact()
	{
		
		$data['']='';
		$data['branchs_num'] = $this->data->get_data('branch',  'b_id')->num_rows();
		$data['branchs'] = $this->data->get_data('branch',  'b_id')->result();
		// get all service number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Contact Us';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/contact');
		$this->load->view('esh/footer');
	}
	
	public function faq()
	{
		
		$data['']='';
		$where = array('s_status' => 1);

		$data['service_num'] = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		$data['service'] = $this->data->get_data_where('services', $where, 's_id')->result();
		$data['faqs_num'] = $this->data->get_data('faqs', 'f_id')->num_rows();
		$data['faqs'] = $this->data->get_data('faqs', 'f_id')->result();
		// get all faqs number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'FAQs';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/faq');
		$this->load->view('esh/footer');
	}
	
	public function article($id)
	{
		if($id == ''){
			redirect(404);
		}
		$id = strip_tags($id);
		$where = array('a_link'=>$id);
		$row = $this->data->get_data_where('articles',$where,'a_id')->row();
		$num = $this->data->get_data_where('articles',$where,'a_id')->num_rows();
	
		if($num == 0){
			redirect(404);
		}
		$data['row']=$row;

		$next_where = array('a_id >' => $row->a_id);
		$next_row = $this->data->get_data_where('articles', $next_where, 'a_id')->row();
		$next_num = $this->data->get_data_where('articles', $next_where, 'a_id')->num_rows();
		$data['next_row']=$next_row;
		$data['next_num']=$next_num;
		
		$prev_where = array('a_id <' => $row->a_id);
		$prev_row = $this->data->get_data_where('articles', $prev_where, 'a_id')->row();
		$prev_num = $this->data->get_data_where('articles', $prev_where, 'a_id')->num_rows();
		$data['prev_row']=$prev_row;
		$data['prev_num']=$prev_num;

		$where = array('s_status' => 1);
		$data['service_num'] = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		$data['service'] = $this->data->get_data_where('services', $where, 's_id')->result();

		$where_com = array('c_status' => 1,'c_article'=>$row->a_id);
		$data['blog_comments_num'] = $this->data->get_data_where('blog_comments', $where_com, 'c_id')->num_rows();
		$data['blog_comments'] = $this->data->get_data_where('blog_comments', $where_com, 'c_id')->result();
		// get all service number end
		$data['desc'] = rlang($row->a_seo_desc, $row->a_ar_seo_desc);
		$data['keys'] = rlang($row->a_seo_keys, $row->a_ar_seo_keys);
		$data['title'] = rlang($row->a_title,$row->a_ar_title);
		$this->load->view('esh/header',$data);
		$this->load->view('esh/article');
		$this->load->view('esh/footer');
	}
	
	public function service($id)
	{
		if($id == ''){
			redirect(404);
		}
		$id = strip_tags($id);
		$where = array('s_id'=>$id);
		$row = $this->data->get_data_where('services',$where,'s_id')->row();
		$num = $this->data->get_data_where('services',$where,'s_id')->num_rows();
		if($num == 0){
			redirect(404);
		}
		$data['row']=$row;
		$where = array('s_status' => 1);
		$data['service_num'] = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		$data['service'] = $this->data->get_data_where('services', $where, 's_id')->result();
		// get all service number end
		$data['desc'] = rlang($row->s_desc, $row->s_ar_desc);
		$data['keys'] = rlang($row->s_keys, $row->s_ar_keys);
		$data['title'] = rlang($row->s_title, $row->s_ar_title);
		$this->load->view('esh/header',$data);
		$this->load->view('esh/service');
		$this->load->view('esh/footer');
	}
	
	public function page($id)
	{
		if($id == ''){
			redirect(404);
		}
		$id = strip_tags($id);
		$where = array('p_link'=>$id);
		$row = $this->data->get_data_where('pages',$where,'p_id')->row();
		$num = $this->data->get_data_where('pages',$where,'p_id')->num_rows();
		if($num == 0){
			redirect(404);
		}
		$data['row']=$row;
		$data['desc'] = rlang($row->p_seo_desc, $row->p_ar_seo_desc);
		$data['keys'] = rlang($row->p_seo_keys, $row->p_ar_seo_keys);
		$data['title'] = rlang($row->p_title, $row->p_ar_title);
		$this->load->view('esh/header',$data);
		$this->load->view('esh/page');
		$this->load->view('esh/footer');
	}
	public function about()
	{

		// get all client number start
		$data['client_num'] = $this->data->get_data('clients', 'c_id')->num_rows();
		$data['client'] = $this->data->get_data('clients', 'c_id')->result();
		// get all client number end

		// get all testimonial number start
		$data['testimonial_num'] = $this->data->get_data('testimonials', 't_id')->num_rows();
		$data['testimonial'] = $this->data->get_data('testimonials', 't_id')->result();
		// get all testimonial number end
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'About Us';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/about');
		$this->load->view('esh/footer');
	}
	public function login()
	{
		$login = $this->session->userdata('login');
		if($login == 1){
			redirect('area');
		}
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Login';
		$this->load->view('esh/header',$data);
		$this->load->view('esh/login');
		$this->load->view('esh/footer');
	}
	public function area()
	{
		$auth = $this->session->userdata('auth');
		$params = array(
			"AccessToken" => "$auth",
		);
		$params = json_encode($params);
		$call = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetClientUserInfo', $params, $auth);
		$call = json_decode($call);
		if(isset($call->Message)){
			$this->session->sess_destroy();
			
			redirect('home/logout');
			
		}
		$s = $this->data->get_data('settings', 's_id')->row();
		$data['desc'] = rlang($s->s_desc, $s->s_ar_desc);
		$data['keys'] = rlang($s->s_keys, $s->s_ar_keys);
		$data['title'] = 'Clients Area';
		$data['call'] = $call;
		$this->load->view('esh/header',$data);
		$this->load->view('esh/dash');
		$this->load->view('esh/footer');
	}
	public function ajax($page)
	{
		if ($page == 'new_orders') {
			$auth = $this->session->userdata('auth');
			$params = array(
				"Date1" => "2020-01-01",
				"Date2" => date('Y-m-d'),
			);
			$params = json_encode($params);
			$call = callAPI('POST', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetAllAWBs', $params, $auth);
			$call = json_decode($call);
			$data['call'] = $call;
		} elseif ($page == 'pickups') {
			$auth = $this->session->userdata('auth');
			$params = array(
				"Date1" => "2020-01-01",
				"Date2" => date('Y-m-d'),
			);
			$params = json_encode($params);
			$call = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/PickupInquiry', $params, $auth);
			$call = json_decode($call);
			$data['call'] = $call;
		} elseif ($page == 'new_pickup') {
			$auth = $this->session->userdata('auth');
			$call = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetCities', '', $auth);
			$call = json_decode($call);
			$data['citis'] = $call;
			$products = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetProducts', '', $auth);
			$products = json_decode($products);
			$data['products'] = $products;
		} elseif ($page == 'fees') {
			$auth = $this->session->userdata('auth');
			$call = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetCities', '', $auth);
			$call = json_decode($call);
			$data['citis'] = $call;
			$products = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetProducts', '', $auth);
			$products = json_decode($products);
			$data['products'] = $products;
		} elseif ($page == 'add_shipment') {
			$auth = $this->session->userdata('auth');
			$call = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetCities', '', $auth);
			$call = json_decode($call);
			$data['citis'] = $call;
			$products = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetProducts', '', $auth);
			$products = json_decode($products);
			$data['products'] = $products;
		} elseif ($page == 'reports') {
			$auth = $this->session->userdata('auth');
			$call = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetShipmentsSummary', '', $auth);
			$call = json_decode($call);
			$data['call'] = $call;
		} elseif ($page == 'shipments') {
			$auth = $this->session->userdata('auth');
			$params = array(
				"CurrentSession" => 0,
				"CurrentUser" => 1,
				"TodayOnly" => 0,
				"Serial" => 0,
			);
			$params = json_encode($params);
			$call = callAPI('POST', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetShipments', $params, $auth);
			$call = json_decode($call);
			$data['call'] = $call->Shipments;
			
		}
		if (isset($call->Message) and $call->Message == 'Authorization has been denied for this request.') {
			$this->session->sess_destroy();

			$this->load->view('esh/error.php');
		}else{
			$data[''] = '';
			$this->load->view('esh/'.$page,$data);
		}
	}
	public function user_info()
	{
		
		$this->load->view('ajax');
	}
	public function lang($key)
	{
		$key = trim(strip_tags($key));
		if($key == ''){
			redirect(404);
		}
		$d = array('lang'=>$key);
		$this->session->set_userdata($d);
		echo '
		<script>
			window.history.back();
		</script>
		';
	}
	public function test(){
	    
        	$call = callAPI('GET', 'https://jsonplaceholder.typicode.com/posts/1', '','');
        	echo($call);
	} 
	
	public function logout()
	{
		$auth = $this->session->userdata('auth');
		$params = array(
			"AccessToken" => "$auth",
		);
		$params = json_encode($params);
		$call = callAPI('PUT', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/Logout', $params,$auth);
		$this->session->sess_destroy();
		redirect('login');
		// $this->session
	}

}
