<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$id = $this->session->userdata('id');
		$login = $this->session->userdata('login');
		if($login == 1){
			$where = array('a_id'=> $id);
			$user_info = $this->data->get_data_where('admin', $where, 'a_id')->row();
			$where_group = array('g_id'=> $user_info->a_group);
			$group = $this->data->get_data_where('groups', $where_group, 'g_id')->row();
			$setting = array('s_id'=> 1);
			$setting = $this->data->get_data_where('settings', $setting, 's_id')->row();
			$data['user_info'] = $user_info;
			$data['setting'] = $setting;
			$data['group'] = $group;
			$this->load->view('cmd',$data);
		}

	}
	
	public function index()
	{
		$this->check_login();


		// get all pages number start
		$data['pages'] = $this->data->get_data('pages','p_id')->num_rows();
		// get all pages number end
		
		// get all menus number start
		$data['menus'] = $this->data->get_data('menu','m_id')->num_rows();
		// get all menus number end
		
		// get all orders number start
		// $data['orders'] = $this->data->get_data('orders','o_id')->num_rows();
		// get all orders number end
		
		// get all slider number start
		$data['slider'] = $this->data->get_data('slider','s_id')->num_rows();
		// get all slider number end
		
		// get all articles number start
		$data['articles'] = $this->data->get_data('articles','a_id')->num_rows();
		// get all articles number end

		// get all requests number start
		$data['requests_num'] = $this->data->get_data_limit('request', 10,'r_id')->num_rows();
		$data['requests'] = $this->data->get_data_limit('request', 10,'r_id')->result();
		// get all requests number end

		// get all contact number start
		$data['contact_num'] = $this->data->get_data_limit('contact', 10,'c_id')->num_rows();
		$data['contact'] = $this->data->get_data_limit('contact', 10,'c_id')->result();
		// get all contact number end
		
		$data['page'] = 'index';
		$data['page_title'] = 'index';

		$this->load->view('dash/header',$data);
		$this->load->view('dash/main');
		$this->load->view('dash/footer');
	}
	public function settings()
	{
		$this->check_login();

		$data['page_title'] = 'settings';
		$data['page'] = 'settings';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/settings');
		$this->load->view('dash/footer');
	}
	public function slider()
	{
		$this->check_login();

		// get all slider number start
		$data['slider_num'] = $this->data->get_data('slider','s_order','asc')->num_rows();
		$data['slider'] = $this->data->get_data('slider','s_order','asc')->result();
		// get all slider number end
		$data['page_title'] = 'slider';
		$data['page'] = 'slider';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/slides');
		$this->load->view('dash/footer');
	}
	public function add_slide()
	{
		$this->check_login();
		// get all slider number start
		$data['slider_num'] = $this->data->get_data('slider', 's_order', 'asc')->num_rows();
		// get all slider number end
		$data['page'] = 'slider';
		$data['page_title'] = 'add_slide';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/add_slide');
		$this->load->view('dash/footer');
	}
	public function edit_slide($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('s_id'=> $id);
		$num = $this->data->get_data_where('slider',$where,'s_id')->num_rows();
		if($num == 0){
			redirect(404);
		}
		$row = $this->data->get_data_where('slider',$where,'s_id')->row();
		// get all slider number start
		$data['slider_num'] = $this->data->get_data('slider', 's_order', 'asc')->num_rows();
		// get all slider number end
		$data['page'] = 'slider';
		$data['page_title'] = 'edit_slide';
		$data['row'] = $row;
		$this->load->view('dash/header',$data);
		$this->load->view('dash/edit_slide');
		$this->load->view('dash/footer');
	}
	public function active_slide($id, $status)
	{
		$this->check_login();

		$id = strip_tags($id);
		$status = strip_tags($status);

		if ($status == 'enable') {
			$set['s_status'] = 1;
		} else {
			$set['s_status'] = 0;
		}
		$where = array('s_id' => $id);
		$this->data->update_data('slider', $set, $where);
		redirect('dash/slider');
	}
	public function clients()
	{
		$this->check_login();

		// get all clients number start
		$data['clients_num'] = $this->data->get_data('clients', 'c_id')->num_rows();
		$data['clients'] = $this->data->get_data('clients', 'c_id')->result();
		// get all clients number end
		$data['page_title'] = 'clients';
		$data['page'] = 'clients';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/clients');
		$this->load->view('dash/footer');
	}
	public function add_client()
	{
		$this->check_login();

		$data['page'] = 'clients';
		$data['page_title'] = 'add_client';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_client');
		$this->load->view('dash/footer');
	}
	public function edit_client($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('c_id' => $id);
		$num = $this->data->get_data_where('clients', $where, 'c_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('clients', $where, 'c_id')->row();
		$data['page'] = 'clients';
		$data['page_title'] = 'edit_client';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_client');
		$this->load->view('dash/footer');
	}
	public function partners()
	{
		$this->check_login();

		// get all partners number start
		$data['partners_num'] = $this->data->get_data('partners', 'p_id')->num_rows();
		$data['partners'] = $this->data->get_data('partners', 'p_id')->result();
		// get all partners number end
		$data['page_title'] = 'partners';
		$data['page'] = 'partners';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/partners');
		$this->load->view('dash/footer');
	}
	public function add_partner()
	{
		$this->check_login();

		$data['page'] = 'partners';
		$data['page_title'] = 'add_partner';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_partner');
		$this->load->view('dash/footer');
	}
	public function edit_partner($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('p_id' => $id);
		$num = $this->data->get_data_where('partners', $where, 'p_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('partners', $where, 'p_id')->row();
		$data['page'] = 'partners';
		$data['page_title'] = 'edit_partner';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_partner');
		$this->load->view('dash/footer');
	}
	public function testimonials()
	{
		$this->check_login();

		// get all testimonials number start
		$data['testimonials_num'] = $this->data->get_data('testimonials', 't_id')->num_rows();
		$data['testimonials'] = $this->data->get_data('testimonials', 't_id')->result();
		// get all testimonials number end
		$data['page_title'] = 'testimonials';
		$data['page'] = 'testimonials';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/testimonials');
		$this->load->view('dash/footer');
	}
	public function add_testimonial()
	{
		$this->check_login();

		$data['page'] = 'testimonials';
		$data['page_title'] = 'add_testimonial';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_testimonial');
		$this->load->view('dash/footer');
	}
	public function edit_testimonial($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('t_id' => $id);
		$num = $this->data->get_data_where('testimonials', $where, 't_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('testimonials', $where, 't_id')->row();
		$data['page'] = 'testimonials';
		$data['page_title'] = 'edit_testimonial';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_testimonial');
		$this->load->view('dash/footer');
	}
	public function albom()
	{
		$this->check_login();

		// get all albom number start
		$data['albom_num'] = $this->data->get_data('albom', 'a_id')->num_rows();
		$data['albom'] = $this->data->get_data('albom', 'a_id')->result();
		// get all albom number end
		$data['page_title'] = 'albom';
		$data['page'] = 'media';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/albom');
		$this->load->view('dash/footer');
	}
	public function add_albom()
	{
		$this->check_login();

		$data['page'] = 'media';
		$data['page_title'] = 'add_albom';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_albom');
		$this->load->view('dash/footer');
	}
	public function edit_albom($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('a_id' => $id);
		$num = $this->data->get_data_where('albom', $where, 'a_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('albom', $where, 'a_id')->row();
		$data['page'] = 'media';
		$data['page_title'] = 'edit_albom';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_albom');
		$this->load->view('dash/footer');
	}
	public function videos()
	{
		$this->check_login();

		// get all media number start
		$where = array('m_type' => 1);
		$data['media_num'] = $this->data->get_data_where('media',$where, 'm_id')->num_rows();
		$data['media'] = $this->data->get_data_where('media',$where, 'm_id')->result();
		// get all media number end
		$data['page_title'] = 'media';
		$data['page'] = 'media';
		$data['type'] = 1;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/media');
		$this->load->view('dash/footer');
	}
	public function photos()
	{
		$this->check_login();

		// get all media number start
		$where = array('m_type' => 0);
		$data['media_num'] = $this->data->get_data_where('media',$where, 'm_id')->num_rows();
		$data['media'] = $this->data->get_data_where('media',$where, 'm_id')->result();
		// get all media number end
		$data['page_title'] = 'media';
		$data['page'] = 'media';
		$data['type'] = 0;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/media');
		$this->load->view('dash/footer');
	}
	public function add_media($id)
	{
		$this->check_login();
		$id = strip_tags($id);

		// get all albom number start
		$where = array('a_type' => $id);
		$data['albom_num'] = $this->data->get_data_where('albom', $where, 'a_id')->num_rows();
		$data['albom'] = $this->data->get_data_where('albom', $where, 'a_id')->result();
		// get all albom number end
		$data['page'] = 'media';
		$data['id'] = $id;
		$data['page_title'] = 'add_media';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_media');
		$this->load->view('dash/footer');
	}
	public function edit_media($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('m_id' => $id);
		$num = $this->data->get_data_where('media', $where, 'm_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('media', $where, 'm_id')->row();
		// get all albom number start
		$where = array('a_type' => $row->m_type);
		$data['albom_num'] = $this->data->get_data_where('albom', $where, 'a_id')->num_rows();
		$data['albom'] = $this->data->get_data_where('albom', $where, 'a_id')->result();
		// get all albom number end
		$data['page'] = 'media';
		$data['page_title'] = 'edit_media';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_media');
		$this->load->view('dash/footer');
	}
	public function active_service($id, $status)
	{
		$this->check_login();

		$id = strip_tags($id);
		$status = strip_tags($status);

		if ($status == 'enable') {
			$set['s_status'] = 1;
		} else {
			$set['s_status'] = 0;
		}
		$where = array('s_id' => $id);
		$this->data->update_data('services', $set, $where);
		redirect('dash/services');
	}
	public function services()
	{
		$this->check_login();

		// get all services number start
		$data['services_num'] = $this->data->get_data('services', 's_id')->num_rows();
		$data['services'] = $this->data->get_data('services', 's_order','asc')->result();
		// get all services number end
		$data['page_title'] = 'services';
		$data['page'] = 'services';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/services');
		$this->load->view('dash/footer');
	}
	public function add_service()
	{
		$this->check_login();

		$data['page'] = 'services';
		$data['page_title'] = 'add_service';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_service');
		$this->load->view('dash/footer');
	}
	public function edit_service($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('s_id' => $id);
		$num = $this->data->get_data_where('services', $where, 's_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('services', $where, 's_id')->row();
		$data['services_num'] = $this->data->get_data('services', 's_id')->num_rows();
		$data['page'] = 'services';
		$data['page_title'] = 'edit_service';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_service');
		$this->load->view('dash/footer');
	}
	public function news()
	{
		$this->check_login();

		// get all news number start
		$data['news_num'] = $this->data->get_data('news', 'n_id')->num_rows();
		$data['news'] = $this->data->get_data('news', 'n_id')->result();
		// get all news number end
		$data['page_title'] = 'news';
		$data['page'] = 'news';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/news');
		$this->load->view('dash/footer');
	}
	public function contact()
	{
		$this->check_login();

		// get all contact number start
		$data['contacts_num'] = $this->data->get_data('contact', 'c_id')->num_rows();
		$data['contacts'] = $this->data->get_data('contact', 'c_id')->result();
		// get all contact number end
		$data['page_title'] = 'contact';
		$data['page'] = 'contact';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/contact');
		$this->load->view('dash/footer');
	}
	public function del_msg($id)
	{
		$id = strip_tags($id);
		$where = array('c_id' => $id);
		$this->data->delete_data('contact', $where);
		redirect('dash/contact');
	}
	public function show_msg($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('c_id' => $id);
		$num = $this->data->get_data_where('contact', $where, 'c_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('contact', $where, 'c_id')->row();
		$data['page'] = 'contact';
		$data['page_title'] = 'show';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/show_msg');
		$this->load->view('dash/footer');
	}
	public function send()
	{
		$this->check_login();

		// get all news number start
		$data['news_num'] = $this->data->get_data('news', 'n_id')->num_rows();
		$data['news'] = $this->data->get_data('news', 'n_id')->result();
		// get all request number end
		$data['page_title'] = 'send';
		$data['page'] = 'send';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/send');
		$this->load->view('dash/footer');
	}
	public function request()
	{
		$this->check_login();

		// get all request number start
		$data['requests_num'] = $this->data->get_data('request', 'r_id')->num_rows();
		$data['requests'] = $this->data->get_data('request', 'r_id')->result();
		// get all request number end
		$data['page_title'] = 'request';
		$data['page'] = 'request';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/request');
		$this->load->view('dash/footer');
	}
	public function del_request($id)
	{
		$id = strip_tags($id);
		$where = array('r_id' => $id);
		$this->data->delete_data('request', $where);
		redirect('dash/request');
	}
	public function show_request($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('r_id' => $id);
		$num = $this->data->get_data_where('request', $where, 'r_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('request', $where, 'r_id')->row();
		$data['page'] = 'request';
		$data['page_title'] = 'show';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/show_request');
		$this->load->view('dash/footer');
	}
	public function branchs()
	{
		$this->check_login();

		// get all branchs number start
		$data['branchs_num'] = $this->data->get_data('branch', 'b_id')->num_rows();
		$data['branchs'] = $this->data->get_data('branch', 'b_id')->result();
		// get all branchs number end
		$data['page_title'] = 'branchs';
		$data['page'] = 'branchs';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/branchs');
		$this->load->view('dash/footer');
	}
	public function add_branch()
	{
		$this->check_login();

		$data['page'] = 'branchs';
		$data['page_title'] = 'add_branch';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_branch');
		$this->load->view('dash/footer');
	}
	public function edit_branch($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('b_id' => $id);
		$num = $this->data->get_data_where('branch', $where, 'b_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('branch', $where, 'b_id')->row();
		$data['page'] = 'branchs';
		$data['page_title'] = 'edit_branch';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_branch');
		$this->load->view('dash/footer');
	}
	public function careers()
	{
		$this->check_login();

		// get all careers number start
		$data['careers_num'] = $this->data->get_data('careers', 'c_id')->num_rows();
		$data['careers'] = $this->data->get_data('careers', 'c_id')->result();
		// get all careers number end
		$data['page_title'] = 'careers';
		$data['page'] = 'careers';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/careers');
		$this->load->view('dash/footer');
	}
	public function add_career()
	{
		$this->check_login();

		$data['page'] = 'careers';
		$data['page_title'] = 'add_career';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_career');
		$this->load->view('dash/footer');
	}
	public function edit_career($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('c_id' => $id);
		$num = $this->data->get_data_where('careers', $where, 'c_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('careers', $where, 'c_id')->row();
		$data['page'] = 'careers';
		$data['page_title'] = 'edit_career';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_career');
		$this->load->view('dash/footer');
	}
	public function prices($type= 0)
	{
		$this->check_login();

		// get all citis number start
		$where = array('c_parent'=> $type);
		$data['citis_num'] = $this->data->get_data_where('citis',$where, 'c_id')->num_rows();
		$data['citis'] = $this->data->get_data_where('citis',$where, 'c_id')->result();
		// get all citis number end
		$data['type'] = $type;

		$data['page_title'] = 'prices';
		$data['page'] = 'prices';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/prices');
		$this->load->view('dash/footer');
	}
	public function add_price($type=0)
	{
		$this->check_login();
		$data['type'] = $type;
		$data['page'] = 'prices';
		$data['page_title'] = 'add_price';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_price');
		$this->load->view('dash/footer');
	}
	public function edit_price($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('c_id' => $id);
		$num = $this->data->get_data_where('citis', $where, 'c_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('citis', $where, 'c_id')->row();
		$data['page'] = 'prices';
		$data['page_title'] = 'edit_price';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_price');
		$this->load->view('dash/footer');
	}
	public function faq()
	{
		$this->check_login();

		// get all faqs number start
		$data['faqs_num'] = $this->data->get_data('faqs', 'f_id')->num_rows();
		$data['faqs'] = $this->data->get_data('faqs', 'f_id')->result();
		// get all faqs number end
		$data['page_title'] = 'faq';
		$data['page'] = 'faqs';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/faqs');
		$this->load->view('dash/footer');
	}
	public function add_faq()
	{
		$this->check_login();

		$data['page'] = 'faq';
		$data['page_title'] = 'add_faq';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_faq');
		$this->load->view('dash/footer');
	}
	public function edit_faq($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('f_id' => $id);
		$num = $this->data->get_data_where('faqs', $where, 'f_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('faqs', $where, 'f_id')->row();
		$data['page'] = 'faq';
		$data['page_title'] = 'edit_faq';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_faq');
		$this->load->view('dash/footer');
	}
	public function pages()
	{
		$this->check_login();

		// get all pages number start
		$data['pages_num'] = $this->data->get_data('pages','p_id')->num_rows();
		$data['pages'] = $this->data->get_data('pages','p_id')->result();
		// get all pages number end
		$data['page_title'] = 'pages';
		$data['page'] = 'pages';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/pages');
		$this->load->view('dash/footer');
	}
	public function add_page()
	{
		$this->check_login();

		$data['page'] = 'pages';
		$data['page_title'] = 'add_page';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/add_page');
		$this->load->view('dash/footer');
	}
	public function edit_page($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('p_id'=> $id);
		$num = $this->data->get_data_where('pages',$where,'p_id')->num_rows();
		if($num == 0){
			redirect(404);
		}
		$row = $this->data->get_data_where('pages',$where,'p_id')->row();
		$data['page'] = 'pages';
		$data['page_title'] = 'edit_page';
		$data['row'] = $row;
		$this->load->view('dash/header',$data);
		$this->load->view('dash/edit_page');
		$this->load->view('dash/footer');
	}
	public function active_page($id, $status)
	{
		$this->check_login();

		$id = strip_tags($id);
		$status = strip_tags($status);

		if ($status == 'enable') {
			$set['p_status'] = 1;
		} else {
			$set['p_status'] = 0;
		}
		$where = array('p_id' => $id);
		$this->data->update_data('pages', $set, $where);
		redirect('dash/pages');
	}
	public function blog_sections()
	{
		$this->check_login();

		// get all sections number start
		$data['sections_num'] = $this->data->get_data('blog_catigories','c_id')->num_rows();
		$data['sections'] = $this->data->get_data('blog_catigories','c_id')->result();
		// get all sections number end
		$data['page_title'] = 'sections';
		$data['page'] = 'blog';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/sections');
		$this->load->view('dash/footer');
	}
	public function add_section()
	{
		$this->check_login();

		$data['page'] = 'blog';
		$data['page_title'] = 'add_section';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/add_section');
		$this->load->view('dash/footer');
	}
	public function edit_section($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('c_id'=> $id);
		$num = $this->data->get_data_where('blog_catigories',$where,'c_id')->num_rows();
		if($num == 0){
			redirect(404);
		}
		$row = $this->data->get_data_where('blog_catigories',$where,'c_id')->row();
		$data['page'] = 'blog';
		$data['page_title'] = 'edit_section';
		$data['row'] = $row;
		$this->load->view('dash/header',$data);
		$this->load->view('dash/edit_section');
		$this->load->view('dash/footer');
	}
	public function active_section($id, $status)
	{
		$this->check_login();

		$id = strip_tags($id);
		$status = strip_tags($status);

		if ($status == 'enable') {
			$set['c_status'] = 1;
		} else {
			$set['c_status'] = 0;
		}
		$where = array('c_id' => $id);
		$this->data->update_data('blog_catigories', $set, $where);
		redirect('dash/blog_sections');
	}
	public function articles()
	{
		$this->check_login();

		// get all articles number start
		$data['arts_num'] = $this->data->get_data('articles','a_id')->num_rows();
		$data['arts'] = $this->data->get_data('articles','a_id')->result();
		// get all articles number end

		$data['page_title'] = 'articles';
		$data['page'] = 'blog';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/articles');
		$this->load->view('dash/footer');
	}
	public function add_article()
	{
		$this->check_login();

		// get all sections number start
		$data['sections_num'] = $this->data->get_data('blog_catigories', 'c_id')->num_rows();
		$data['sections'] = $this->data->get_data('blog_catigories', 'c_id')->result();
		// get all sections number end
		$data['page'] = 'blog';
		$data['page_title'] = 'add_article';
		$this->load->view('dash/header',$data);
		$this->load->view('dash/add_article');
		$this->load->view('dash/footer');
	}
	public function edit_article($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('a_id'=> $id);
		$num = $this->data->get_data_where('articles',$where,'a_id')->num_rows();
		if($num == 0){
			redirect(404);
		}
		// get all sections number start
		$data['sections_num'] = $this->data->get_data('blog_catigories', 'c_id')->num_rows();
		$data['sections'] = $this->data->get_data('blog_catigories', 'c_id')->result();
		// get all sections number end
		$row = $this->data->get_data_where('articles',$where,'a_id')->row();
		$data['page'] = 'blog';
		$data['page_title'] = 'edit_article';
		$data['row'] = $row;
		$this->load->view('dash/header',$data);
		$this->load->view('dash/edit_article');
		$this->load->view('dash/footer');
	}
	public function active_art($id, $status)
	{
		$this->check_login();

		$id = strip_tags($id);
		$status = strip_tags($status);

		if ($status == 'enable') {
			$set['a_status'] = 1;
		} else {
			$set['a_status'] = 0;
		}
		$where = array('a_id' => $id);
		$this->data->update_data('articles', $set, $where);
		redirect('dash/articles');
	}
	public function blog_comments()
	{
		$this->check_login();

		// get all articles number start
		$data['comments_num'] = $this->data->get_data('blog_comments', 'c_id')->num_rows();
		$data['comments'] = $this->data->get_data('blog_comments', 'c_id')->result();
		// get all articles number end

		$data['page_title'] = 'blog_comments';
		$data['page'] = 'blog';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/comments');
		$this->load->view('dash/footer');
	}
	public function comment($id)
	{
		$this->check_login();

		// get all articles number start
		$where = array('c_id'=>strip_tags($id));
		$num = $this->data->get_data_where('blog_comments',$where, 'c_id')->num_rows();
		$row = $this->data->get_data_where('blog_comments', $where, 'c_id')->row();
		if($num == 0){
			redirect(404);
		}
		$data['row'] = $row;
		$where = array('a_id' => $row->c_article);
		$art_num = $this->data->get_data_where('articles', $where, 'a_id')->num_rows();
		$art = $this->data->get_data_where('articles', $where, 'a_id')->row();
		$data['article'] = $art;
		$data['article_num'] = $art_num;
		// get all articles number end

		$data['page_title'] = 'comment';
		$data['page'] = 'blog';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/comment');
		$this->load->view('dash/footer');
	}
	public function active_comment($id,$status)
	{
		$this->check_login();

		$id = strip_tags($id);
		$status = strip_tags($status);
		
		if($status == 'enable'){
			$set['c_status'] = 1;
		}else{
			$set['c_status'] = 0;
		}
		$where = array('c_id'=>$id);
		$this->data->update_data('blog_comments',$set,$where);
		redirect('dash/blog_comments');
	}
	public function menu()
	{
		$this->check_login();

		// get all menu number start
		$where = array('m_parent'=>0);
		$data['menus_num'] = $this->data->get_data_where('menu',$where, 'm_id')->num_rows();
		$data['menus'] = $this->data->get_data_where('menu',$where, 'm_order','asc')->result();
		// get all menu number end

		$data['page_title'] = 'menu';
		$data['page'] = 'menu';
		$data['model'] = $this->data;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/menu');
		$this->load->view('dash/footer');
	}
	public function add_menu()
	{
		
		$data['page'] = 'menu';
		$data['page_title'] = 'add_menu';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_menu');
		$this->load->view('dash/footer');
	}
	public function add_link_menu()
	{
		$this->check_login();

		$this->check_login();
		$data['pages_num'] = $this->data->get_data('pages', 'p_id')->num_rows();
		$data['pages'] = $this->data->get_data('pages', 'p_id')->result();
		$data['page'] = 'menu';
		$data['page_title'] = 'add_link_menu';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_link_menu');
		$this->load->view('dash/footer');
	}
	public function edit_menu($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('m_id' => $id);
		$num = $this->data->get_data_where('menu', $where, 'm_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('menu', $where, 'm_id')->row();
		$data['page'] = 'menu';
		$data['page_title'] = 'edit_menu';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_menu');
		$this->load->view('dash/footer');
	}
	public function edit_link_menu($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('m_id' => $id);
		$num = $this->data->get_data_where('menu', $where, 'm_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$this->check_login();
		$data['pages_num'] = $this->data->get_data('pages', 'p_id')->num_rows();
		$data['pages'] = $this->data->get_data('pages', 'p_id')->result();
		$row = $this->data->get_data_where('menu', $where, 'm_id')->row();
		$data['page'] = 'menu';
		$data['page_title'] = 'edit_link_menu';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_link_menu');
		$this->load->view('dash/footer');
	}

	public function groups()
	{
		$this->check_login();

		// get all group number start
		$data['groups_num'] = $this->data->get_data('groups', 'g_id')->num_rows();
		$data['groups'] = $this->data->get_data('groups', 'g_id')->result();
		// get all group number end

		$data['page_title'] = 'groups';
		$data['page'] = 'admin';
		$data['model'] = $this->data;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/groups');
		$this->load->view('dash/footer');
	}
	public function add_group()
	{
		$this->check_login();

		$data['page'] = 'admin';
		$data['page_title'] = 'add_group';
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_group');
		$this->load->view('dash/footer');
	}
	public function edit_group($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('g_id' => $id);
		$num = $this->data->get_data_where('groups', $where, 'g_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('groups', $where, 'g_id')->row();
		$data['page'] = 'admin';
		$data['page_title'] = 'edit_group';
		$data['row'] = $row;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_group');
		$this->load->view('dash/footer');
	}

	public function admin()
	{
		$this->check_login();

		// get all group number start
		$data['admin_num'] = $this->data->get_data('admin', 'a_id')->num_rows();
		$data['admin'] = $this->data->get_data('admin', 'a_id')->result();
		// get all group number end

		$data['page_title'] = 'admin';
		$data['page'] = 'admin';
		$data['model'] = $this->data;
		$this->load->view('dash/header', $data);
		$this->load->view('dash/admin');
		$this->load->view('dash/footer');
	}
	public function add_admin()
	{
		$this->check_login();

		$data['page'] = 'admin';
		$data['page_title'] = 'add_admin';
		// get all group number start
		$data['groups_num'] = $this->data->get_data('groups', 'g_id')->num_rows();
		$data['groups'] = $this->data->get_data('groups', 'g_id')->result();
		// get all group number end
		$this->load->view('dash/header', $data);
		$this->load->view('dash/add_admin');
		$this->load->view('dash/footer');
	}
	public function edit_admin($id)
	{
		$this->check_login();

		$id = strip_tags($id);
		$where = array('a_id' => $id);
		$num = $this->data->get_data_where('admin', $where, 'a_id')->num_rows();
		if ($num == 0) {
			redirect(404);
		}
		$row = $this->data->get_data_where('admin', $where, 'a_id')->row();
		$data['page'] = 'admin';
		$data['page_title'] = 'edit_admin';
		$data['row'] = $row;
		// get all group number start
		$data['groups_num'] = $this->data->get_data('groups', 'g_id')->num_rows();
		$data['groups'] = $this->data->get_data('groups', 'g_id')->result();
		// get all group number end
		$this->load->view('dash/header', $data);
		$this->load->view('dash/edit_admin');
		$this->load->view('dash/footer');
	}
	public function login()
	{
		$login = $this->session->userdata('login');
		if ($login == 1) {
			redirect('dash');
		}
		$this->load->view('dash/login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('dash/login');
	}
	public function check_login()
	{
		$login = $this->session->userdata('login');
		if($login != 1){
			redirect('dash/login');
		}
	}

}
