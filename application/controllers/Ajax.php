<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{

	public function prices()
	{
		$result = array();
		$res = '';
		$this->form_validation->set_rules("num", "num", "required");
		$this->form_validation->set_rules("city", "city", "required");
		if ($this->form_validation->run() == FALSE) {
			$result = array("msg" => validation_errors("<div class='error'>", "</div>"), "success" => false);
		} else {
			$where = array('c_parent'=>$this->input->post('city'));
			$citis = $this->data->get_data_where('citis',$where,'c_id')->result();
			$num = $this->data->get_data_where('citis',$where,'c_id')->num_rows();

			if($num > 0){
				foreach($citis as $c){
					$res .= '<div class="col-md-2" style="font-size:20px; text-transform:uppercase">
						<b> '.$c->c_title.' </b>
						<br>
						<span style="color:#000">'.($c->c_price * $this->input->post('num') ). '  EGP</span>
					</div>'; 
				}
				$head = rlang('* Prices vary according to no. of shipments/month ** Prices are VAT exclusive
', '* تختلف الأسعار وفقًا للرقم. الشحنات / الشهر ** الأسعار لا تشمل ضريبة القيمة المضافة');
				$html = '
					<p style="border-bottom:3px solid #000;padding-bottom:20px">'.$head.'</p>
					<div class="row">
						'.$res.'
					</div>
				';
				$result = array("msg" => $html, "success" => true);
			}else{
				$result = array("msg" => "Sorry :(", "success" => false);
			}

		}
		$data["result"] = json_encode($result);
		$this->load->view("ajax", $data);
	}
	public function career()
	{
		$result = array();
		
		$this->form_validation->set_rules("job", "Job Title", "required");
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		if ($this->form_validation->run() == FALSE) {
			$result = array("msg" => validation_errors("<div class='error'>", "</div>"), "success" => false);
		} else {
			$cv = myup("cv",'','pdf');
			if ($cv["status"] != false) {
				$cv = $cv["imgs"];
				$job = $this->input->post('job');
				$name = $this->input->post('name');
				$email = $this->input->post('email');

				$this->load->library('email');
				$config['mailtype'] = 'html';
				$config['wordwrap'] = TRUE;

				$this->email->initialize($config);
				$setting = $this->data->get_data('settings','s_id')->row();
				$this->email->from($email, $name);
				$this->email->to($setting->s_email);
				$this->email->attach($cv);
				$this->email->subject('Job Application'.$setting->s_sender_name);
				$message = "
				<html>
					<head>
						<title>HTML email</title>
					</head>
					<body>
						<p>This email contains HTML Tags!</p>
						<table>
							<tr>
								<td>Job TItle : </td>
								<td> $job </td>
							</tr>
							<tr>
								<td>Name</td>
								<td>$name</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>$email</td>
							</tr>
						</table>
					</body>
				</html>
				";
				$this->email->message('Testing the email class.');

				$this->email->send();

				$result = array("msg" => "Data has been added", "success" => true);
			}else{
				$result = array("msg" => $cv["imgs"], "success" => false);
			}
		}
		$data["result"] = json_encode($result);
		$this->load->view("ajax", $data);
	}
	public function qout()
	{
		$result = array();
		$this->form_validation->set_rules('company', 'company', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('pstreet', 'pstreet', 'required');
		$this->form_validation->set_rules('pcountry', 'pcountry', 'required');
		$this->form_validation->set_rules('pcity', 'pcity', 'required');
		$this->form_validation->set_rules('pzip', 'pzip', 'required');
		$this->form_validation->set_rules('lift', 'lift', 'required');
		$this->form_validation->set_rules('dstreet', 'dstreet', 'required');
		$this->form_validation->set_rules('dcountry', 'dcountry', 'required');
		$this->form_validation->set_rules('dcity', 'dcity', 'required');
		$this->form_validation->set_rules('dzip', 'dzip', 'required');
		$this->form_validation->set_rules('call', 'call', 'required');
		$this->form_validation->set_rules('weight', 'weight', 'required');
		$this->form_validation->set_rules('qty', 'qty', 'required');
		$this->form_validation->set_rules('height', 'height', 'required');
		$this->form_validation->set_rules('width', 'width', 'required');
		$this->form_validation->set_rules('height', 'height', 'required');
		$this->form_validation->set_rules('stack', 'stack', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['r_email'] = strip_tags($this->input->post('email'));
			$set['r_name'] = strip_tags($this->input->post('name'));
			$set['r_company'] = strip_tags($this->input->post('company'));
			$set['r_phone'] = strip_tags($this->input->post('phone'));
			$set['r_street'] = strip_tags($this->input->post('pstreet'));
			$set['r_country'] = strip_tags($this->input->post('pcountry'));
			$set['r_city'] = strip_tags($this->input->post('pcity'));
			$set['r_zip'] = strip_tags($this->input->post('pzip'));
			$set['r_lift'] = strip_tags($this->input->post('lift'));
			$set['r_d_street'] = strip_tags($this->input->post('dstreet'));
			$set['r_d_country'] = strip_tags($this->input->post('dcountry'));
			$set['r_d_city'] = strip_tags($this->input->post('dcity'));
			$set['r_d_zip'] = strip_tags($this->input->post('dzip'));
			$set['r_d_call'] = strip_tags($this->input->post('call'));
			$set['r_weight'] = strip_tags($this->input->post('weight'));
			$set['r_qty'] = strip_tags($this->input->post('qty'));
			$set['r_length'] = strip_tags($this->input->post('length'));
			$set['r_width'] = strip_tags($this->input->post('width'));
			$set['r_height'] = strip_tags($this->input->post('height'));
			$set['r_stack'] = strip_tags($this->input->post('stack'));
			$this->data->insert_data('request', $set);
			$result = array('msg' => 'Your Request Has Been Submited', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function contact()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('company', 'Company', 'required');
		$this->form_validation->set_rules('msg', 'Comment', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_email'] = strip_tags($this->input->post('email'));
			$set['c_name'] = strip_tags($this->input->post('name'));
			$set['c_msg'] = strip_tags($this->input->post('msg'));
			$set['c_phone'] = strip_tags($this->input->post('phone'));
			$set['c_company'] = strip_tags($this->input->post('company'));
			$this->data->insert_data('contact', $set);
			$result = array('msg' => 'Your Message Has Been Submited', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function search()
	{
		$result = '';
		$val = strip_tags($this->input->post('val'));
		if($val == ''){
			$result = '';
			
		}else{
			$res = $this->data->get_search($val)->result();
			$res_num = $this->data->get_search($val)->num_rows();
			if($res_num > 0){
			foreach ($res as $r) {
				$result .= '<a href="'.base_url('service/'.$r->s_id).'"> '.rlang($r->s_title, $r->s_ar_title).' </a>';
			}
			}else{
				$result .= '<p class="alert alert-danger"> No Results </p>';
			}
		}
		
		$data['result'] = $result;
		$this->load->view('ajax', $data);
	}
	public function settings()
	{
		$result = array();
		$this->form_validation->set_rules('s_title_1', 'title_1', 'required');
		$this->form_validation->set_rules('s_title_2', 'title_2', 'required');
		$this->form_validation->set_rules('s_title_3', 'title_3', 'required');
		$this->form_validation->set_rules('s_title_4', 'title_4', 'required');
		$this->form_validation->set_rules('s_title_5', 'title_5', 'required');
		$this->form_validation->set_rules('s_title_6', 'title_6', 'required');
		$this->form_validation->set_rules('s_title_7', 'title_7', 'required');
		$this->form_validation->set_rules('s_title_8', 'title_8', 'required');
		$this->form_validation->set_rules('s_title_9', 'title_9', 'required');
		$this->form_validation->set_rules('s_title_10', 'title_10', 'required');
		$this->form_validation->set_rules('s_title_11', 'title_11', 'required');
		$this->form_validation->set_rules('s_title_12', 'title_12', 'required');
		$this->form_validation->set_rules('s_title_13', 'title_13', 'required');
		$this->form_validation->set_rules('s_title_14', 'title_14', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('s_sender_name', 'mail from', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		// $this->form_validation->set_rules('fb', 'facebook', 'required');
		// $this->form_validation->set_rules('tw', 'twetter', 'required');
		// $this->form_validation->set_rules('insta', 'instagram', 'required');
		// $this->form_validation->set_rules('in', 'linked in', 'required');
		$this->form_validation->set_rules('video_link', 'video link', 'required');
		$this->form_validation->set_rules('km', 'Km Driven', 'required');
		$this->form_validation->set_rules('dlev', 'Delivered Goods ', 'required');
		$this->form_validation->set_rules('clients', 'clients', 'required');
		$this->form_validation->set_rules('s_who', 'Who We Are?', 'required');
		$this->form_validation->set_rules('s_ar_who', 'arabic Who We Are?', 'required');
		$this->form_validation->set_rules('s_vision', 'Our Vision', 'required');
		$this->form_validation->set_rules('s_ar_vision', 'arabic Our Vision', 'required');
		$this->form_validation->set_rules('s_mission', 'Our Mission', 'required');
		$this->form_validation->set_rules('s_ar_mission', 'arabic Our Mission', 'required');
		$this->form_validation->set_rules('s_desc', 'discription', 'required');
		$this->form_validation->set_rules('s_ar_desc', 'arabic discription', 'required');
		$this->form_validation->set_rules('s_keys', 'keywords', 'required');
		$this->form_validation->set_rules('s_ar_keys', 'arabic keywords', 'required');
		$this->form_validation->set_rules('s_short_about', 'footer about', 'required');
		$this->form_validation->set_rules('s_ar_short_about', 'arabic footer about', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['s_title_1'] = strip_tags($this->input->post('s_title_1'));
			$set['s_title_2'] = strip_tags($this->input->post('s_title_2'));
			$set['s_title_3'] = strip_tags($this->input->post('s_title_3'));
			$set['s_title_4'] = strip_tags($this->input->post('s_title_4'));
			$set['s_title_5'] = strip_tags($this->input->post('s_title_5'));
			$set['s_title_6'] = strip_tags($this->input->post('s_title_6'));
			$set['s_title_7'] = strip_tags($this->input->post('s_title_7'));
			$set['s_title_8'] = strip_tags($this->input->post('s_title_8'));
			$set['s_title_9'] = strip_tags($this->input->post('s_title_9'));
			$set['s_title_10'] = strip_tags($this->input->post('s_title_10'));
			$set['s_title_11'] = strip_tags($this->input->post('s_title_11'));
			$set['s_title_12'] = strip_tags($this->input->post('s_title_12'));
			$set['s_title_13'] = strip_tags($this->input->post('s_title_13'));
			$set['s_title_14'] = strip_tags($this->input->post('s_title_14'));
			$set['s_email'] = strip_tags($this->input->post('email'));
			$set['s_sender_name'] = strip_tags($this->input->post('s_sender_name'));
			$set['s_phone'] = strip_tags($this->input->post('phone'));
			$set['s_fb'] = strip_tags($this->input->post('fb'));
			$set['s_tw'] = strip_tags($this->input->post('tw'));
			$set['s_insta'] = strip_tags($this->input->post('insta'));
			$set['s_in'] = strip_tags($this->input->post('in'));
			$set['s_video_link'] = strip_tags($this->input->post('video_link'));
			$set['s_km'] = strip_tags($this->input->post('km'));
			$set['s_dlev'] = strip_tags($this->input->post('dlev'));
			$set['s_clients'] = strip_tags($this->input->post('clients'));
			$set['s_who'] = ($this->input->post('s_who'));
			$set['s_ar_who'] = ($this->input->post('s_ar_who'));
			$set['s_vision'] = ($this->input->post('s_vision'));
			$set['s_ar_vision'] = ($this->input->post('s_ar_vision'));
			$set['s_desc'] = strip_tags($this->input->post('s_desc'));
			$set['s_ar_desc'] = strip_tags($this->input->post('s_ar_desc'));
			$set['s_mission'] = ($this->input->post('s_mission'));
			$set['s_ar_mission'] = ($this->input->post('s_ar_mission'));
			$set['s_keys'] = strip_tags($this->input->post('s_keys'));
			$set['s_ar_keys'] = strip_tags($this->input->post('s_ar_keys'));
			$set['s_short_about'] = strip_tags($this->input->post('s_short_about'));
			$set['s_ar_short_about'] = strip_tags($this->input->post('s_ar_short_about'));
			$setting = $this->data->get_data('settings','s_id')->row();
			$pdf = myup('pdf', $setting->s_pdf, 'pdf');
			if ($pdf['status'] != false) {

				$set['s_pdf'] = $pdf['imgs'];
			}
			$pdf1 = myup('pdf1', $setting->s_pdf, 'pdf');
			if ($pdf1['status'] != false) {

				$set['s_pdf1'] = $pdf1['imgs'];
			}
			$s_cover_1 = myup('s_cover_1', $setting->s_cover_1);
			if ($s_cover_1['status'] != false) {

				$set['s_cover_1'] = $s_cover_1['imgs'];
			}
			$s_cover_2 = myup('s_cover_2', $setting->s_cover_2);
			if ($s_cover_2['status'] != false) {

				$set['s_cover_2'] = $s_cover_2['imgs'];
			}
			$s_cover_3 = myup('s_cover_3', $setting->s_cover_3);
			if ($s_cover_3['status'] != false) {

				$set['s_cover_3'] = $s_cover_3['imgs'];
			}
			$s_cover_4 = myup('s_cover_4', $setting->s_cover_4);
			if ($s_cover_4['status'] != false) {

				$set['s_cover_4'] = $s_cover_4['imgs'];
			}
			$s_cover_5 = myup('s_cover_5', $setting->s_cover_5);
			if ($s_cover_5['status'] != false) {

				$set['s_cover_5'] = $s_cover_5['imgs'];
			}
			$s_cover_6 = myup('s_cover_6', $setting->s_cover_6);
			if ($s_cover_6['status'] != false) {

				$set['s_cover_6'] = $s_cover_6['imgs'];
			}
			$s_cover_7 = myup('s_cover_7', $setting->s_cover_7);
			if ($s_cover_7['status'] != false) {

				$set['s_cover_7'] = $s_cover_7['imgs'];
			}
			$s_cover_8 = myup('s_cover_8', $setting->s_cover_8);
			if ($s_cover_8['status'] != false) {

				$set['s_cover_8'] = $s_cover_8['imgs'];
			}
			$s_cover_9 = myup('s_cover_9', $setting->s_cover_9);
			if ($s_cover_9['status'] != false) {

				$set['s_cover_9'] = $s_cover_9['imgs'];
			}
			$s_cover_10 = myup('s_cover_10', $setting->s_cover_10);
			if ($s_cover_10['status'] != false) {

				$set['s_cover_10'] = $s_cover_10['imgs'];
			}
			$this->data->update_data('settings', $set,array('s_id'=>1));
			$result = array('msg' => 'Your Comment Has Been Submited', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function add_client()
	{
		$result = array();

		$img = myup('img');
		if ($img['status'] != false) {

			$set['c_img'] = $img['imgs'];
			$result = array('msg' => 'Data has been added', 'success' => true);
			$this->data->insert_data('clients', $set);
		}else{
			$result = array('msg' => $img['imgs'], 'success' => false);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_client()
	{
		$result = array();
		$where = array('c_id'=> $this->input->post('id'));
		$num = $this->data->get_data_where('clients', $where, 'c_id')->num_rows();
		if($num > 0){
			$row = $this->data->get_data_where('clients', $where, 'c_id')->row();
			$img = myup('img', $row->c_img);
			if ($img['status'] != false) {
				$set['c_img'] = $img['imgs'];
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->update_data('clients', $set, array('c_id'=> $this->input->post('id')));
			} else {
				$result = array('msg' => $img['imgs'], 'success' => false);
			}
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_client()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('c_id' => $id);
		$row = $this->data->get_data_where('clients', $where, 'c_id')->row();
		@unlink($row->c_img);
		$this->data->delete_data('clients', $where);
	}
	public function add_partner()
	{
		$result = array();

		$img = myup('img');
		if ($img['status'] != false) {

			$set['p_img'] = $img['imgs'];
			$result = array('msg' => 'Data has been added', 'success' => true);
			$this->data->insert_data('partners', $set);
		}else{
			$result = array('msg' => $img['imgs'], 'success' => false);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_partner()
	{
		$result = array();
		$where = array('p_id'=> $this->input->post('id'));
		$num = $this->data->get_data_where('partners', $where, 'p_id')->num_rows();
		if($num > 0){
			$row = $this->data->get_data_where('partners', $where, 'p_id')->row();
			$img = myup('img', $row->p_img);
			if ($img['status'] != false) {
				$set['p_img'] = $img['imgs'];
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->update_data('partners', $set, array('p_id'=> $this->input->post('id')));
			} else {
				$result = array('msg' => $img['imgs'], 'success' => false);
			}
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_partner()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('p_id' => $id);
		$row = $this->data->get_data_where('partners', $where, 'p_id')->row();
		@unlink($row->p_img);
		$this->data->delete_data('partners', $where);
	}
	public function add_testimonial()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'name', 'required');
		$this->form_validation->set_rules('company', 'company', 'required');
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$img = myup('img');
			if ($img['status'] != false) {
				$set['t_name'] = strip_tags($this->input->post('title'));
				$set['t_company'] = strip_tags($this->input->post('company'));
				$set['t_comment'] = strip_tags($this->input->post('comment'));
				$set['t_img'] = $img['imgs'];
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->insert_data('testimonials', $set);
			} else {
				$result = array('msg' => $img['imgs'], 'success' => false);
			}
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_testimonial()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'name', 'required');
		$this->form_validation->set_rules('company', 'company', 'required');
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$where = array('t_id' => $this->input->post('id'));
			$num = $this->data->get_data_where('testimonials', $where, 't_id')->num_rows();
			if ($num > 0) {
				$row = $this->data->get_data_where('testimonials', $where, 't_id')->row();
				$img = myup('img', $row->t_img);
				if ($img['status'] != false) {
					$set['t_img'] = $img['imgs'];
					
				}
				$set['t_name'] = strip_tags($this->input->post('title'));
				$set['t_company'] = strip_tags($this->input->post('company'));
				$set['t_comment'] = strip_tags($this->input->post('comment'));
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->update_data('testimonials', $set, array('t_id' => $this->input->post('id')));
			}
		}
		

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_testimonial()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('t_id' => $id);
		$row = $this->data->get_data_where('testimonials', $where, 't_id')->row();
		@unlink($row->p_img);
		$this->data->delete_data('testimonials', $where);
	}
	public function add_media()
	{
		$result = array();
		$type = $this->input->post('type');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('ar_title', 'arabic title', 'required');
		if($type == 1){
			$this->form_validation->set_rules('video', 'video', 'required');
		}
		$this->form_validation->set_rules('albom', 'albom', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$img = myup('img');
			if ($img['status'] != false) {
				$set['m_title'] = strip_tags($this->input->post('title'));
				$set['m_ar_title'] = strip_tags($this->input->post('ar_title'));
				$set['m_albom'] = strip_tags($this->input->post('albom'));
				if ($type == 1) {
					$set['m_video'] = strip_tags($this->input->post('video'));
				}
				$set['m_type'] = strip_tags($this->input->post('type'));
				$set['m_img'] = $img['imgs'];
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->insert_data('media', $set);
			} else {
				$result = array('msg' => $img['imgs'], 'success' => false);
			}
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_media()
	{
		$result = array();
		$type = $this->input->post('type');

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('ar_title', 'arabic title', 'required');
		if($type == 1){
			$this->form_validation->set_rules('video', 'video', 'required');
		}
		$this->form_validation->set_rules('albom', 'albom', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$where = array('m_id' => $this->input->post('id'));
			$num = $this->data->get_data_where('media', $where, 'm_id')->num_rows();
			if ($num > 0) {
				$row = $this->data->get_data_where('media', $where, 'm_id')->row();
				$img = myup('img', $row->m_img);
				if ($img['status'] != false) {
					$set['m_img'] = $img['imgs'];
					
				}
				$set['m_title'] = strip_tags($this->input->post('title'));
				$set['m_ar_title'] = strip_tags($this->input->post('ar_title'));
				if ($type == 1) {
					$set['m_video'] = strip_tags($this->input->post('video'));
				}
				$set['m_albom'] = strip_tags($this->input->post('albom'));
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->update_data('media', $set, array('m_id' => $this->input->post('id')));
			}
		}
		

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_media()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('m_id' => $id);
		$row = $this->data->get_data_where('media', $where, 'm_id')->row();
		@unlink($row->m_img);
		$this->data->delete_data('media', $where);
	}
	public function add_service()
	{
		$result = array();
		$this->form_validation->set_rules('video', 'video', 'required');
		$this->form_validation->set_rules('on', 'on', 'required');
		$this->form_validation->set_rules('tags', 'tags', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('over', 'over', 'required');
		$this->form_validation->set_rules('how', 'how', 'required');
		$this->form_validation->set_rules('desc', 'desc', 'required');
		$this->form_validation->set_rules('key', 'keys', 'required');
		$this->form_validation->set_rules('ar_title', 'arabic title', 'required');
		$this->form_validation->set_rules('ar_over', 'arabic over', 'required');
		$this->form_validation->set_rules('ar_how', 'arabic how', 'required');
		$this->form_validation->set_rules('ar_desc', 'arabic desc', 'required');
		$this->form_validation->set_rules('ar_key', 'arabic keys', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$img = myup('img');
			if ($img['status'] != false) {
				$icon = myup('icon');
				if($icon['status'] != false){
					$set['s_video_link'] = strip_tags($this->input->post('video'));
					$set['s_on_index'] = strip_tags($this->input->post('on'));
					$set['s_tags'] = strip_tags($this->input->post('tags'));
					$set['s_title'] = strip_tags($this->input->post('title'));
					$set['s_over'] = strip_tags($this->input->post('over'));
					$set['s_how'] = strip_tags($this->input->post('how'));
					$set['s_desc'] = strip_tags($this->input->post('desc'));
					$set['s_keys'] = strip_tags($this->input->post('key'));
					$set['s_ar_title'] = strip_tags($this->input->post('ar_title'));
					$set['s_ar_over'] = strip_tags($this->input->post('ar_over'));
					$set['s_ar_how'] = strip_tags($this->input->post('ar_how'));
					$set['s_ar_desc'] = strip_tags($this->input->post('ar_desc'));
					$set['s_ar_keys'] = strip_tags($this->input->post('ar_key'));
					$set['s_cover'] = $img['imgs'];
					$set['s_icon'] = $icon['imgs'];
					$set['s_status'] = 1;

					$result = array('msg' => 'Data has been added', 'success' => true);
					$this->data->insert_data('services', $set);
				}else{
					$result = array('msg' => $icon['imgs'], 'success' => false);
				}
			} else {
				$result = array('msg' => $img['imgs'], 'success' => false);
			}
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_service()
	{
		$result = array();
		$this->form_validation->set_rules('video', 'video', 'required');
		$this->form_validation->set_rules('on', 'on', 'required');
		$this->form_validation->set_rules('tags', 'tags', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('over', 'over', 'required');
		$this->form_validation->set_rules('how', 'how', 'required');
		$this->form_validation->set_rules('desc', 'desc', 'required');
		$this->form_validation->set_rules('key', 'keys', 'required');
		$this->form_validation->set_rules('ar_title', 'arabic title', 'required');
		$this->form_validation->set_rules('ar_over', 'arabic over', 'required');
		$this->form_validation->set_rules('ar_how', 'arabic how', 'required');
		$this->form_validation->set_rules('ar_desc', 'arabic desc', 'required');
		$this->form_validation->set_rules('ar_key', 'arabic keys', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$where = array('s_id' => $this->input->post('id'));
			$num = $this->data->get_data_where('services', $where, 's_id')->num_rows();
			if ($num > 0) {
				$row = $this->data->get_data_where('services', $where, 's_id')->row();
				$img = myup('img', $row->s_cover);
				if ($img['status'] != false) {
					$set['s_cover'] = $img['imgs'];
					
				}
				$icon = myup('icon', $row->s_icon);
				if ($icon['status'] != false) {
					$set['s_icon'] = $icon['imgs'];
					
				}
				$order = $this->input->post('order');
				$where_order = array('s_order' => $order);
				$order_num = $this->data->get_data_where('services', $where_order, 's_id')->num_rows();
				if ($order_num > 0) {
					$setorder['s_order'] = $row->s_order;
					$this->data->update_data('services', $setorder, $where_order);
				} else {
					$set['s_order'] = $order;
				}
				$set['s_video_link'] = strip_tags($this->input->post('video'));
				$set['s_on_index'] = strip_tags($this->input->post('on'));
				$set['s_tags'] = strip_tags($this->input->post('tags'));
				$set['s_title'] = strip_tags($this->input->post('title'));
				$set['s_over'] = strip_tags($this->input->post('over'));
				$set['s_how'] = strip_tags($this->input->post('how'));
				$set['s_desc'] = strip_tags($this->input->post('desc'));
				$set['s_keys'] = strip_tags($this->input->post('key'));
				$set['s_ar_title'] = strip_tags($this->input->post('ar_title'));
				$set['s_ar_over'] = strip_tags($this->input->post('ar_over'));
				$set['s_ar_how'] = strip_tags($this->input->post('ar_how'));
				$set['s_ar_desc'] = strip_tags($this->input->post('ar_desc'));
				$set['s_ar_keys'] = strip_tags($this->input->post('ar_key'));
				$result = array('msg' => 'Data has been added', 'success' => true);
				$this->data->update_data('services', $set, array('s_id' => $this->input->post('id')));
			}
		}
		

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_service()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('s_id' => $id);
		$row = $this->data->get_data_where('services', $where, 's_id')->row();
		@unlink($row->p_img);
		$this->data->delete_data('services', $where);
	}
	public function send()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Subject', 'required');
		$this->form_validation->set_rules('content', 'Comment', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$setting = $this->data->get_data('settings','s_id')->row();
			$emails = [];
			$info = $this->data->get_data('news', 'n_id')->result();
			$num = $this->data->get_data('news', 'n_id')->num_rows();
			if ($num != 0) {
				foreach ($info as $i) {
					$emails[] = $i->n_email;
				}
				$email = implode(',', $emails);
				$result = array('msg' => 'Message Has Been Sent', 'success' => true);
				$to = $email;
				$subject = $this->input->post('title');

				$message = "
			<html>
			<head>
			<title>" . $this->input->post('title') . "</title>
			</head>
			<body>
			" . $this->input->post('content') . "
			</body>
			</html>
			";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: '. $setting->s_sender_name . "\r\n";


				@mail($to, $subject, $message, $headers);
			} else {
				$result = array('msg' => 'Newsletter is empty', 'success' => false);
			}
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function add_comment()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('msg', 'Comment', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_email'] = strip_tags($this->input->post('email'));
			$set['c_writer'] = strip_tags($this->input->post('name'));
			$set['c_comment'] = strip_tags($this->input->post('msg'));
			$set['c_article'] = strip_tags($this->input->post('id'));
			$set['c_status'] = 0;
			$this->data->insert_data('blog_comments', $set);
			$result = array('msg' => 'Your Comment Has Been Submited', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function add_branch()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('ar_name', 'arabic Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('ar_address', 'arabic address', 'required');
		$this->form_validation->set_rules('hours', 'hours', 'required');
		$this->form_validation->set_rules('location', 'location', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['b_email'] = strip_tags($this->input->post('email'));
			$set['b_name'] = strip_tags($this->input->post('name'));
			$set['b_ar_name'] = strip_tags($this->input->post('ar_name'));
			$set['b_phone'] = strip_tags($this->input->post('phone'));
			$set['b_address'] = strip_tags($this->input->post('address'));
			$set['b_ar_address'] = strip_tags($this->input->post('ar_address'));
			$set['b_hours'] = strip_tags($this->input->post('hours'));
			$set['b_location'] = strip_tags($this->input->post('location'));
			$this->data->insert_data('branch', $set);
			$result = array('msg' => 'Data Has Been Added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_branch()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('ar_name', 'arabic Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('ar_address', 'arabic address', 'required');
		$this->form_validation->set_rules('hours', 'hours', 'required');
		$this->form_validation->set_rules('location', 'location', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['b_email'] = strip_tags($this->input->post('email'));
			$set['b_name'] = strip_tags($this->input->post('name'));
			$set['b_ar_name'] = strip_tags($this->input->post('ar_name'));
			$set['b_phone'] = strip_tags($this->input->post('phone'));
			$set['b_address'] = strip_tags($this->input->post('address'));
			$set['b_ar_address'] = strip_tags($this->input->post('ar_address'));
			$set['b_hours'] = strip_tags($this->input->post('hours'));
			$set['b_location'] = strip_tags($this->input->post('location'));
			$this->data->update_data('branch', $set, array('b_id' => $this->input->post('id')));
			$result = array('msg' => 'Data Has Been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_branch()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('b_id' => $id);
		$row = $this->data->get_data_where('branch', $where, 'b_id')->row();
		$this->data->delete_data('branch', $where);
	}
	public function add_career()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_content'] = strip_tags($this->input->post('content'));
			$set['c_title'] = strip_tags($this->input->post('title'));
			$this->data->insert_data('careers', $set);
			$result = array('msg' => 'Data Has Been Added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_career()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('content', 'content', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_content'] = strip_tags($this->input->post('content'));
			$set['c_title'] = strip_tags($this->input->post('title'));
			$this->data->update_data('careers', $set, array('c_id' => $this->input->post('id')));
			$result = array('msg' => 'Data Has Been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_career()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('c_id' => $id);
		$row = $this->data->get_data_where('careers', $where, 'c_id')->row();
		$this->data->delete_data('careers', $where);
	}
	public function add_price()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_parent'] = strip_tags($this->input->post('parent'));
			$set['c_price'] = strip_tags($this->input->post('price'));
			$set['c_title'] = strip_tags($this->input->post('title'));
			$this->data->insert_data('citis', $set);
			$result = array('msg' => 'Data Has Been Added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_price()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_price'] = strip_tags($this->input->post('price'));
			$set['c_title'] = strip_tags($this->input->post('title'));
			$this->data->update_data('citis', $set, array('c_id' => $this->input->post('id')));
			$result = array('msg' => 'Data Has Been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_price()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('c_id' => $id);
		$row = $this->data->get_data_where('citis', $where, 'c_id')->row();
		$this->data->delete_data('citis', $where);
	}
	public function add_albom()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('ar_name', 'arabic Name', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['a_type'] = strip_tags($this->input->post('type'));
			$set['a_title'] = strip_tags($this->input->post('name'));
			$set['a_ar_title'] = strip_tags($this->input->post('ar_name'));
			$this->data->insert_data('albom', $set);
			$result = array('msg' => 'Data Has Been Added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_albom()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('ar_name', 'arabic Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['a_type'] = strip_tags($this->input->post('type'));
			$set['a_title'] = strip_tags($this->input->post('name'));
			$set['a_ar_title'] = strip_tags($this->input->post('ar_name'));
			$this->data->update_data('albom', $set, array('a_id' => $this->input->post('id')));
			$result = array('msg' => 'Data Has Been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_albom()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('a_id' => $id);
		$row = $this->data->get_data_where('albom', $where, 'a_id')->row();
		$this->data->delete_data('albom', $where);
	}
	public function add_faq()
	{
		$result = array();
		$this->form_validation->set_rules('q', 'title', 'required');
		$this->form_validation->set_rules('ar_q', 'arabic title', 'required');
		$this->form_validation->set_rules('a', 'answer', 'required');
		$this->form_validation->set_rules('ar_a', 'arabic answer', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['f_q'] = strip_tags($this->input->post('q'));
			$set['f_ar_q'] = strip_tags($this->input->post('ar_q'));
			$set['f_a'] = strip_tags($this->input->post('a'));
			$set['f_ar_a'] = strip_tags($this->input->post('ar_a'));
			$this->data->insert_data('faqs', $set);
		
			$result = array('msg' => 'Data Has Been Added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_faq()
	{
		$result = array();
		$this->form_validation->set_rules('q', 'title', 'required');
		$this->form_validation->set_rules('ar_q', 'arabic title', 'required');
		$this->form_validation->set_rules('a', 'answer', 'required');
		$this->form_validation->set_rules('ar_a', 'arabic answer', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['f_q'] = strip_tags($this->input->post('q'));
			$set['f_ar_q'] = strip_tags($this->input->post('ar_q'));
			$set['f_a'] = strip_tags($this->input->post('a'));
			$set['f_ar_a'] = strip_tags($this->input->post('ar_a'));
			$this->data->update_data('faqs', $set, array('f_id' => $this->input->post('id')));
			$result = array('msg' => 'Data Has Been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_faq()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('f_id' => $id);
		$row = $this->data->get_data_where('faqs', $where, 'f_id')->row();
		$this->data->delete_data('faqs', $where);
	}
	public function del_news()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('n_id' => $id);
		$this->data->delete_data('news', $where);
	}
	public function news()
	{
		$result = array();
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['n_email'] = strip_tags($this->input->post('email'));
			$this->data->insert_data('news', $set);
			$result = array('msg' => 'Thanks', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function requestq()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('city_from', 'city from', 'required');
		$this->form_validation->set_rules('city_to', 'city to', 'required');
		$this->form_validation->set_rules('weight', 'weight', 'required');
		$this->form_validation->set_rules('height', 'height', 'required');
		$this->form_validation->set_rules('width', 'width', 'required');
		$this->form_validation->set_rules('length', 'length', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['r_name'] = strip_tags($this->input->post('name'));
			$set['r_email'] = strip_tags($this->input->post('email'));
			$set['r_phone'] = strip_tags($this->input->post('phone'));
			$set['r_city'] = strip_tags($this->input->post('city_from'));
			$set['r_d_city'] = strip_tags($this->input->post('city_to'));
			$set['r_weight'] = strip_tags($this->input->post('weight'));
			$set['r_height'] = strip_tags($this->input->post('height'));
			$set['r_width'] = strip_tags($this->input->post('width'));
			$set['r_length'] = strip_tags($this->input->post('length'));
			$this->data->insert_data('request', $set);
			$result = array('msg' => 'Your Request Has Been Submited', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	// slider start
	public function add_slide()
	{
		$result = [];
		$images = [];
		$countfiles = count($_FILES['slide_img']['name']);
		if (empty($_FILES['slide_img']['name'][0])) {
			$result = array('msg' => 'Please Select Image', 'success' => false);
		} else {
			for ($i = 0; $i < $countfiles; $i++) {
				
				if (!empty($_FILES['slide_img']['name'][$i])) {

					// Define new $_FILES array - $_FILES['file']
					$_FILES['file']['name'] = $_FILES['slide_img']['name'][$i];
					$_FILES['file']['type'] = $_FILES['slide_img']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['slide_img']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['slide_img']['error'][$i];
					$_FILES['file']['size'] = $_FILES['slide_img']['size'][$i];

					// Set preference
					$config['upload_path'] = './upload/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['max_size'] = '1111111111111111111'; // max_size in kb
					$config['encrypt_name'] = true;

					//Load upload library
					$this->load->library('upload', $config);
					// File upload
					if ($this->upload->do_upload('file')) {
						
						$data = $this->upload->data();
						$images[] = 'upload/' . $data['file_name'];
					} else {
						$result = array('msg' => $this->upload->display_errors(), 'success' => false);
					}
				}
			}
			$icon = myup('tab_icon','','jpg|jpeg|png|gif');
			if($icon['status'] != false){
				$insert['s_tab_icon'] = $icon['imgs'];
			}
			$insert['s_en_img'] = $images[0];
			$insert['s_title'] = $this->input->post('title');
			$insert['s_content'] = $this->input->post('content');
			$insert['s_link'] = $this->input->post('link');
			$insert['s_ar_title'] = $this->input->post('ar_title');
			$insert['s_ar_content'] = $this->input->post('ar_content');
			$insert['s_video_link'] = $this->input->post('video_link');
			$insert['s_tab_title'] = $this->input->post('tab_title');
			$insert['s_ar_tab_title'] = $this->input->post('ar_tab_title');
			$insert['s_status'] = 1;
			$this->data->insert_data('slider', $insert);
			// $get = $this->db->insert_id();
			$result = array('msg' => 'Data has been added', 'success' => true);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_slide()
	{
		$result = [];
		$images = [];
		$countfiles = count($_FILES['slide_img']['name']);
		if (empty($_FILES['slide_img']['name'][0])) {
			$result = array('msg' => 'Please Select Image', 'success' => false);
		} else {
			for ($i = 0; $i < $countfiles; $i++) {
				if (empty($_FILES['slide_img']['name'][$i])) {
					$images[$i] = null;
					continue;
				}
				if (!empty($_FILES['slide_img']['name'][$i])) {

					// Define new $_FILES array - $_FILES['file']
					$_FILES['file']['name'] = $_FILES['slide_img']['name'][$i];
					$_FILES['file']['type'] = $_FILES['slide_img']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['slide_img']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['slide_img']['error'][$i];
					$_FILES['file']['size'] = $_FILES['slide_img']['size'][$i];

					// Set preference
					$config['upload_path'] = './upload/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['max_size'] = '1111111111111111111'; // max_size in kb
					$config['encrypt_name'] = true;

					//Load upload library
					$this->load->library('upload', $config);
					// File upload
					if ($this->upload->do_upload('file')) {

						$data = $this->upload->data();
						$images[] = 'upload/' . $data['file_name'];
					} else {
						$result = array('msg' => $this->upload->display_errors(), 'success' => false);
					}
				}
			}
			$id = strip_tags($this->input->post('id'));
			$where = array('s_id' => $id);
			$row = $this->data->get_data_where('slider', $where, 's_id')->row();
			if ($images[0] != null) {
				// echo 'hooooy en'; 
				$set['s_en_img'] = $images[0];
				@unlink($row->s_en_img);
			}
		}
		$id = strip_tags($this->input->post('id'));
		$where = array('s_id' => $id);
		$row = $this->data->get_data_where('slider', $where, 's_id')->row();
		$icon = myup('tab_icon', $row->s_tab_icon, 'jpg|jpeg|png|gif');
		if ($icon['status'] != false) {
			$set['s_tab_icon'] = $icon['imgs'];
		}

		$order = $this->input->post('order');
		$where_order = array('s_order' => $order);
		$order_num = $this->data->get_data_where('slider', $where_order, 's_id')->num_rows();
		if ($order_num > 0) {
			$setorder['s_order'] = $row->s_order;
			$this->data->update_data('slider', $setorder, $where_order);
		}else{
			$set['s_order'] = $order;
		}
		$set['s_title'] = $this->input->post('title');
		$set['s_link'] = $this->input->post('link');
		$set['s_content'] = $this->input->post('content');
		$set['s_ar_title'] = $this->input->post('ar_title');
		$set['s_ar_content'] = $this->input->post('ar_content');
		$set['s_video_link'] = $this->input->post('video_link');
		$set['s_tab_title'] = $this->input->post('tab_title');
		$set['s_ar_tab_title'] = $this->input->post('ar_tab_title');
		$this->data->update_data('slider', $set, $where);
		$result = array('msg' => 'Data has been updated', 'success' => true);

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function del_slide()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('s_id' => $id);
		$row = $this->data->get_data_where('slider', $where, 's_id')->row();
		@unlink($row->s_ar_img);
		@unlink($row->s_en_img);
		$this->data->delete_data('slider', $where);
	}
	// slider end

	// pages start
	public function add_page()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('key', 'Keywords', 'required');
		$this->form_validation->set_rules('ar_title', 'Arabic Title', 'required');
		$this->form_validation->set_rules('ar_content', 'Arabic Content', 'required');
		$this->form_validation->set_rules('ar_desc', 'Arabic Description', 'required');
		$this->form_validation->set_rules('ar_key', 'Arabic Keywords', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('pos', 'Position', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '1111111111111111111'; // max_size in kb
			$config['encrypt_name'] = true;

			//Load upload library
			$this->load->library('upload', $config);
			// File upload
			if ($this->upload->do_upload('img')) {

				$data = $this->upload->data();
				$set['p_img'] = 'upload/' . $data['file_name'];
				$set['p_title'] = strip_tags($this->input->post('title'));
				$set['p_desc'] = $this->input->post('content');
				$set['p_seo_desc'] = strip_tags($this->input->post('desc'));
				$set['p_seo_keys'] = strip_tags($this->input->post('key'));
				$set['p_ar_title'] = strip_tags($this->input->post('ar_title'));
				$set['p_ar_desc'] = $this->input->post('ar_content');
				$set['p_ar_seo_desc'] = strip_tags($this->input->post('ar_desc'));
				$set['p_ar_seo_keys'] = strip_tags($this->input->post('ar_key'));
				$set['p_link'] = strip_tags($this->input->post('link'));
				$set['p_nav_footer'] = strip_tags($this->input->post('pos'));
				$set['p_tags'] = strip_tags($this->input->post('tags'));
				$set['p_status'] = 1;
				$this->data->insert_data('pages', $set);
				$result = array('msg' => 'Data has been added', 'success' => true);
			} else {
				$result = array('msg' => $this->upload->display_errors(), 'success' => false);
			}
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function edit_page()
	{
		$id = $this->input->post('page_id');
		$where = array('p_id' => $id);
		$row = $this->data->get_data_where('pages', $where, 'p_id')->row();
		$result = array();
		$this->form_validation->set_rules('page_id', 'ID', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('key', 'Keywords', 'required');
		$this->form_validation->set_rules('ar_title', 'Arabic Title', 'required');
		$this->form_validation->set_rules('ar_content', 'Arabic Content', 'required');
		$this->form_validation->set_rules('ar_desc', 'Arabic Description', 'required');
		$this->form_validation->set_rules('ar_key', 'Arabic Keywords', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('pos', 'Position', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');


		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			if (!empty($_FILES['img']['name'])) {
				$config['upload_path'] = './upload/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '1111111111111111111'; // max_size in kb
				$config['encrypt_name'] = true;

				//Load upload library
				$this->load->library('upload', $config);
				// File upload
				if ($this->upload->do_upload('img')) {
					$data = $this->upload->data();
					$set['p_img'] = 'upload/' . $data['file_name'];
					// remove old img
					unlink($row->p_img);
				} else {
					$result = array('msg' => $this->upload->display_errors(), 'success' => false);
				}
			}
			$set['p_title'] = strip_tags($this->input->post('title'));
			$set['p_desc'] = $this->input->post('content');
			$set['p_seo_desc'] = strip_tags($this->input->post('desc'));
			$set['p_seo_keys'] = strip_tags($this->input->post('key'));
			$set['p_ar_title'] = strip_tags($this->input->post('ar_title'));
			$set['p_ar_desc'] = $this->input->post('ar_content');
			$set['p_ar_seo_desc'] = strip_tags($this->input->post('ar_desc'));
			$set['p_ar_seo_keys'] = strip_tags($this->input->post('ar_key'));
			$set['p_link'] = strip_tags($this->input->post('link'));
			$set['p_nav_footer'] = strip_tags($this->input->post('pos'));
			$set['p_tags'] = strip_tags($this->input->post('tags'));

			$where = array('p_id' => $id);
			$this->data->update_data('pages', $set, $where);
			$result = array('msg' => 'Data has been Updated', 'success' => true);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function del_page()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('p_id' => $id);
		$row = $this->data->get_data_where('pages', $where, 'p_id')->row();
		@unlink($row->p_img);
		$this->data->delete_data('pages', $where);
	}
	// pages end

	// blog sections start
	public function add_section()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('key', 'Keywords', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_title'] = strip_tags($this->input->post('title'));
			$set['c_link'] = strip_tags($this->input->post('link'));
			$set['c_tags'] = strip_tags($this->input->post('tags'));
			$set['c_desc'] = strip_tags($this->input->post('desc'));
			$set['c_keys'] = strip_tags($this->input->post('key'));
			$set['c_status'] = 1;

			$this->data->insert_data('blog_catigories', $set);
			$result = array('msg' => 'Data has been added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function edit_section()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('id', 'ID', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('key', 'Keywords', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['c_title'] = strip_tags($this->input->post('title'));
			$set['c_link'] = strip_tags($this->input->post('link'));
			$set['c_tags'] = strip_tags($this->input->post('tags'));
			$set['c_desc'] = strip_tags($this->input->post('desc'));
			$set['c_keys'] = strip_tags($this->input->post('key'));
			$where = array('c_id' => strip_tags($this->input->post('id')));
			$this->data->update_data('blog_catigories', $set, $where);
			$result = array('msg' => 'Data has been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function del_section()
	{
		echo $id = strip_tags($this->input->post('id'));
		$where = array('c_id' => $id);
		$this->data->delete_data('blog_catigories', $where);
	}
	// blog sections end

	// blog articles start
	public function add_article()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('key', 'Keywords', 'required');
		$this->form_validation->set_rules('ar_title', 'Arabic Title', 'required');
		$this->form_validation->set_rules('ar_content', 'Arabic Content', 'required');
		$this->form_validation->set_rules('ar_desc', 'Arabic Description', 'required');
		$this->form_validation->set_rules('ar_key', 'Arabic Keywords', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');


		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			if (!empty($_FILES['img']['name'])) {
				$config['upload_path'] = './upload/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '1111111111111111111'; // max_size in kb
				$config['encrypt_name'] = true;

				//Load upload library
				$this->load->library('upload', $config);
				// File upload
				if ($this->upload->do_upload('img')) {
					$data = $this->upload->data();
					$set['a_img'] = 'upload/' . $data['file_name'];
					$set['a_writer'] = $this->session->userdata('id');
					$set['a_link'] = strip_tags($this->input->post('link'));
					$set['a_tags'] = strip_tags($this->input->post('tags'));
					$set['a_date'] = date('Y-m-d h:i a');
					$set['a_cat'] = strip_tags($this->input->post('cat'));
					$set['a_title'] = strip_tags($this->input->post('title'));
					$set['a_desc'] = $this->input->post('content');
					$set['a_seo_desc'] = strip_tags($this->input->post('desc'));
					$set['a_seo_keys'] = strip_tags($this->input->post('key'));
					$set['a_ar_title'] = strip_tags($this->input->post('ar_title'));
					$set['a_ar_desc'] = $this->input->post('ar_content');
					$set['a_ar_seo_desc'] = strip_tags($this->input->post('ar_desc'));
					$set['a_ar_seo_keys'] = strip_tags($this->input->post('ar_key'));
					$set['a_status'] = 1;
					$this->data->insert_data('articles', $set);
					$result = array('msg' => 'Data has been added', 'success' => true);
				} else {
					$result = array('msg' => $this->upload->display_errors(), 'success' => false);
				}
			}
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function edit_article()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('key', 'Keywords', 'required');
		$this->form_validation->set_rules('ar_title', 'Arabic Title', 'required');
		$this->form_validation->set_rules('ar_content', 'Arabic Content', 'required');
		$this->form_validation->set_rules('ar_desc', 'Arabic Description', 'required');
		$this->form_validation->set_rules('ar_key', 'Arabic Keywords', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$id = $this->input->post('id');
			$where = array('a_id' => $id);
			$row = $this->data->get_data_where('articles', $where, 'a_id')->row();
			if (!empty($_FILES['img']['name'])) {
				$config['upload_path'] = './upload/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '1111111111111111111'; // max_size in kb
				$config['encrypt_name'] = true;

				//Load upload library
				$this->load->library('upload', $config);
				// File upload
				if ($this->upload->do_upload('img')) {
					$data = $this->upload->data();
					$set['a_img'] = 'upload/' . $data['file_name'];
					// remove old img
					unlink($row->a_img);
				} else {
					$result = array('msg' => $this->upload->display_errors(), 'success' => false);
				}
			}
			$set['a_writer'] = $this->session->userdata('id');
			$set['a_link'] = strip_tags($this->input->post('link'));
			$set['a_tags'] = strip_tags($this->input->post('tags'));
			$set['a_date'] = date('Y-m-d h:i a');
			$set['a_cat'] = strip_tags($this->input->post('cat'));
			$set['a_title'] = strip_tags($this->input->post('title'));
			$set['a_desc'] = $this->input->post('content');
			$set['a_seo_desc'] = strip_tags($this->input->post('desc'));
			$set['a_seo_keys'] = strip_tags($this->input->post('key'));
			$set['a_ar_title'] = strip_tags($this->input->post('ar_title'));
			$set['a_ar_desc'] = $this->input->post('ar_content');
			$set['a_ar_seo_desc'] = strip_tags($this->input->post('ar_desc'));
			$set['a_ar_seo_keys'] = strip_tags($this->input->post('ar_key'));

			$where = array('a_id' => strip_tags($this->input->post('id')));
			$this->data->update_data('articles', $set, $where);
			$result = array('msg' => 'Data has been Updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function del_article()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('a_id' => $id);
		$this->data->delete_data('articles', $where);
	}
	// blog articles end

	// comments start
	public function del_comment()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('c_id' => $id);
		$this->data->delete_data('blog_comments', $where);
	}
	// comments end


	// menu start

	public function add_link_menu()
	{
		$result = array();
		$type = $this->input->post('type');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if($type < 2){
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('ar_title', 'Arabic Title', 'required');
		}
		$for = $this->input->post('for');
		if($type == 0 and $for == 0){
			$this->form_validation->set_rules('link', 'Link', 'required');
		}
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['m_title'] = strip_tags($this->input->post('title'));
			$set['m_ar_title'] = strip_tags($this->input->post('ar_title'));
			$set['m_link'] = strip_tags($this->input->post('link'));
			$set['m_link_type'] = strip_tags($this->input->post('type'));
			$set['m_parent_for'] = strip_tags($this->input->post('for'));
			$set['m_type'] = 1;
			$set['m_parent'] = 0;
			$this->data->insert_data('menu', $set);
			$result = array('msg' => 'Data has been added', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function edit_link_menu()
	{
		$result = array();
		$type = $this->input->post('type');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if ($type < 2) {
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('ar_title', 'Arabic Title', 'required');
		}
		$for = $this->input->post('for');
		if ($type == 0 and $for == 0) {
			$this->form_validation->set_rules('link', 'Link', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set['m_ar_title'] = strip_tags($this->input->post('ar_title'));
			$set['m_title'] = strip_tags($this->input->post('title'));
			$set['m_link_type'] = strip_tags($this->input->post('type'));
			$set['m_parent_for'] = strip_tags($this->input->post('for'));
			$set['m_link'] = strip_tags($this->input->post('link'));
			$where = array('m_id' => $this->input->post('id'));
			$this->data->update_data('menu', $set, $where);
			$result = array('msg' => 'Data has been updated', 'success' => true);
		}

		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function del_menu()
	{
		$result = array();
		$id = strip_tags($this->input->post('id'));

		$where = array('m_parent' => $id);
		$num = $this->data->get_data_where('menu', $where, 'm_id')->num_rows();
		$child = $this->data->get_data_where('menu', $where, 'm_id')->result();
		if ($num > 0) {
			$result = array('msg' => 'You mast remove childerns of menu', 'success' => false);
		} else {

			$where = array('m_id' => $id);
			$this->data->delete_data('menu', $where);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	// save menu


	public function save_menu()
	{
		$this->saveList($this->input->post('list'));
	}

	public function saveList($list, $parent_id = 0, &$m_order = 0)
	{
		foreach ($list as $item) {
			$m_order++;

			$where = array('m_id' => $item["id"]);
			$set['m_parent'] = $parent_id;
			$set['m_order'] = $m_order;
			$this->data->update_data('menu', $set, $where);

			if (array_key_exists("children", $item)) {
				$this->saveList($item["children"], $item["id"], $m_order);
			}
		}
	}
	// save menu
	// menu end

	// admin & groups
	public function add_group()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Group Title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$slider =  strip_tags($this->input->post('slider'));
			$pages =  strip_tags($this->input->post('pages'));
			$blog =  strip_tags($this->input->post('blog'));
			$menu =  strip_tags($this->input->post('menu'));
			$clients =  strip_tags($this->input->post('clients'));
			$services =  strip_tags($this->input->post('services'));
			$settings =  strip_tags($this->input->post('settings'));
			$media =  strip_tags($this->input->post('media'));
			$branch =  strip_tags($this->input->post('branch'));
			$contact =  strip_tags($this->input->post('contact'));
			$news =  strip_tags($this->input->post('news'));
			$faq =  strip_tags($this->input->post('faq'));
			$partners =  strip_tags($this->input->post('partners'));
			$testimonials =  strip_tags($this->input->post('testimonials'));
			$request =  strip_tags($this->input->post('request'));
			$send =  strip_tags($this->input->post('send'));
			$admin =  strip_tags($this->input->post('admin'));
			$prices =  strip_tags($this->input->post('prices'));
			$careers =  strip_tags($this->input->post('careers'));
			$set4['g_title'] = strip_tags($this->input->post('title'));
			$set4['g_slider'] = ($slider == 'on')?1:0;
			$set4['g_pages'] = ($pages == 'on')?1:0;
			$set4['g_blog'] = ($blog == 'on')?1:0;
			$set4['g_menu'] = ($menu == 'on')?1:0;
			$set4['g_clients'] = ($clients == 'on')?1:0;
			$set4['g_services'] = ($services == 'on')?1:0;
			$set4['g_settings'] = ($settings == 'on')?1:0;
			$set4['g_media'] = ($media == 'on')?1:0;
			$set4['g_branchs'] = ($branch == 'on')?1:0;
			$set4['g_contact'] = ($contact == 'on')?1:0;
			$set4['g_news'] = ($news == 'on')?1:0;
			$set4['g_faq'] = ($faq == 'on')?1:0;
			$set4['g_partners'] = ($partners == 'on')?1:0;
			$set4['g_testimonials'] = ($testimonials == 'on')?1:0;
			$set4['g_request'] = ($request == 'on')?1:0;
			$set4['g_send'] = ($send == 'on')?1:0;
			$set4['g_admin'] = ($admin == 'on')?1:0;
			$set4['g_prices'] = ($prices == 'on')?1:0;
			$set4['g_careers'] = ($careers == 'on')?1:0;
			$this->data->insert_data('groups', $set4);
			$result = array('msg' => 'Data has been inserted', 'success' => true);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_group()
	{
		$result = array();
		$this->form_validation->set_rules('title', 'Group Title', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$slider =  strip_tags($this->input->post('slider'));
			$pages =  strip_tags($this->input->post('pages'));
			$blog =  strip_tags($this->input->post('blog'));
			$menu =  strip_tags($this->input->post('menu'));
			$clients =  strip_tags($this->input->post('clients'));
			$services =  strip_tags($this->input->post('services'));
			$settings =  strip_tags($this->input->post('settings'));
			$media =  strip_tags($this->input->post('media'));
			$branch =  strip_tags($this->input->post('branch'));
			$contact =  strip_tags($this->input->post('contact'));
			$news =  strip_tags($this->input->post('news'));
			$faq =  strip_tags($this->input->post('faq'));
			$partners =  strip_tags($this->input->post('partners'));
			$testimonials =  strip_tags($this->input->post('testimonials'));
			$request =  strip_tags($this->input->post('request'));
			$send =  strip_tags($this->input->post('send'));
			$admin =  strip_tags($this->input->post('admin'));
			$set4['g_title'] = strip_tags($this->input->post('title'));
			$prices =  strip_tags($this->input->post('prices'));
			$careers =  strip_tags($this->input->post('careers'));
			$set4['g_slider'] = ($slider == 'on') ? 1 : 0;
			$set4['g_pages'] = ($pages == 'on') ? 1 : 0;
			$set4['g_blog'] = ($blog == 'on') ? 1 : 0;
			$set4['g_menu'] = ($menu == 'on') ? 1 : 0;
			$set4['g_clients'] = ($clients == 'on') ? 1 : 0;
			$set4['g_services'] = ($services == 'on') ? 1 : 0;
			$set4['g_settings'] = ($settings == 'on') ? 1 : 0;
			$set4['g_media'] = ($media == 'on') ? 1 : 0;
			$set4['g_branchs'] = ($branch == 'on') ? 1 : 0;
			$set4['g_contact'] = ($contact == 'on') ? 1 : 0;
			$set4['g_news'] = ($news == 'on') ? 1 : 0;
			$set4['g_faq'] = ($faq == 'on') ? 1 : 0;
			$set4['g_partners'] = ($partners == 'on') ? 1 : 0;
			$set4['g_testimonials'] = ($testimonials == 'on') ? 1 : 0;
			$set4['g_request'] = ($request == 'on') ? 1 : 0;
			$set4['g_send'] = ($send == 'on') ? 1 : 0;
			$set4['g_admin'] = ($admin == 'on') ? 1 : 0;
			$set4['g_prices'] = ($prices == 'on') ? 1 : 0;
			$set4['g_careers'] = ($careers == 'on') ? 1 : 0;
			$where = array('g_id'=>$this->input->post('id'));
			$this->data->update_data('groups', $set4,$where);
			$result = array('msg' => 'Data has been updated', 'success' => true);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function del_group()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('g_id' => $id);
		$this->data->delete_data('groups', $where);
	}
	public function add_admin()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Admin Name', 'required');
		$this->form_validation->set_rules('email', 'Admin Email', 'required');
		$this->form_validation->set_rules('password', 'Admin Password', 'required');
		$this->form_validation->set_rules('group', 'Admin Group', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set4['a_name'] = strip_tags($this->input->post('name'));
			$set4['a_email'] = strip_tags($this->input->post('email'));
			$set4['a_password'] = sha1(strip_tags($this->input->post('password')));
			$set4['a_group'] = strip_tags($this->input->post('group'));
			$this->data->insert_data('admin', $set4);
			$result = array('msg' => 'Data has been inserted', 'success' => true);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function edit_admin()
	{
		$result = array();
		$id = $this->input->post('id');
		$where = array('a_id'=>$id);
		$password = $this->input->post('password');
		$this->form_validation->set_rules('name', 'Admin Name', 'required');
		$this->form_validation->set_rules('email', 'Admin Email', 'required');
		if($password != ''){
			$this->form_validation->set_rules('password', 'Admin Password', 'required');
		}
		$this->form_validation->set_rules('group', 'Admin Group', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$set4['a_name'] = strip_tags($this->input->post('name'));
			$set4['a_email'] = strip_tags($this->input->post('email'));
			if ($password != '') {
				$set4['a_password'] = sha1(strip_tags($this->input->post('password')));
			}
			$set4['a_group'] = strip_tags($this->input->post('group'));

			$this->data->update_data('admin', $set4,$where);
			$result = array('msg' => 'Data has been Updated', 'success' => true);
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function del_admin()
	{
		$id = strip_tags($this->input->post('id'));
		$where = array('a_id' => $id);
		$this->data->delete_data('admin', $where);
	}
	// admin & groups

	public function login()
	{
		$result = array();
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$name = strip_tags($this->input->post('email'));
			$password = sha1(strip_tags($this->input->post('password')));
			$where = array('a_email'=>$name,'a_password'=>$password);
			$num = $this->data->get_data_where('admin',$where,'a_id')->num_rows();
			if($num == 1){
				$user = $this->data->get_data_where('admin',$where,'a_id')->row();
				$newdata = array(
					'login'  => 1,
					'id'     => $user->a_id,
				);
				$this->session->set_userdata($newdata);
				$result = array('msg' => 'Login successfuly', 'success' => true);
			}else{
				$result = array('msg' => 'Error in your data', 'success' => false);
			}
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}

	public function login_client()
	{
		$result = array();
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$result = array('msg' => validation_errors('<div class="error">', '</div>'), 'success' => false);
		} else {
			$name = strip_tags($this->input->post('name'));
			$password = strip_tags($this->input->post('password'));
			$params = array(
				"UserName" => "$name",
				"Password" => "$password"
			);
			$params = json_encode($params);
			$login = $this->session->userdata('login');
			if($login == 1){
				$result = array('msg' => 'Login Successfully', 'success' => true);
				
			}else{


		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/Login');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

		$call = curl_exec($ch);

				

				if ($call != 'null') {
					$call = json_decode($call);

					$params2 = array(
						"AccessToken" => "$call->AccessToken",
					);
					$params2 = json_encode($params2);
					$info = callAPI('GET', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/GetClientUserInfo', $params2, $call->AccessToken);
					$info = json_decode($info);
				
					$newdata = array(
						'login'  => 1,
						'auth' => $call->AccessToken,
						'name' => $info[0]->DisplayName,
					);
					$this->session->set_userdata($newdata);
					$result = array('msg' => 'Login Successfully', 'success' => true);
				} else {
					$result = array('msg' => 'Error in your data', 'success' => false);
				}
			}
			
		}
		$data['result'] = json_encode($result);
		$this->load->view('ajax', $data);
	}
	public function new_pickup()
	{
		$result = array();
		
		$this->form_validation->set_rules("awb", "Number of awbs", "required");

		$this->form_validation->set_rules("address", "Pickup address", "required");

		$this->form_validation->set_rules("phone", "Phone", "required");

		$this->form_validation->set_rules("contact", "Contact Person", "required");

		$this->form_validation->set_rules("date", "Pickup Date ", "required");

		$this->form_validation->set_rules("id", "Product", "required");

		$this->form_validation->set_rules("city", "City", "required");

		$this->form_validation->set_rules("notes", "Notes", "required");


		if ($this->form_validation->run() == FALSE) {
			$result = array("msg" => validation_errors("<div class='error'>", "</div>"), "success" => false);
		} else {
			
			$awb = strip_tags($this->input->post("awb"));

			$address = strip_tags($this->input->post("address"));

			$phone = strip_tags($this->input->post("phone"));

			$contact = strip_tags($this->input->post("contact"));

			$date = strip_tags($this->input->post("date"));

			$id = strip_tags($this->input->post("id"));

			$city = strip_tags($this->input->post("city"));

			$notes = strip_tags($this->input->post("notes"));

			$auth = $this->session->userdata('auth');
			$params = array(
				"NumberOfAWBs" => $awb,
				"PickupAddress" => $address,
				"Phone" => $phone,
				"ContactPerson" => $contact,
				"PickupDate" => $date,
				"ProductID" => $id,
				"CityID" => $city,
				"Notes" => $notes,
			);
			$params = json_encode($params);
			$call = callAPI('POST', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/SavePickup', $params, $auth);
			$call = json_decode($call);
			if($call > 0){
				$result = array("msg" => "Pickup has been added", "success" => true);
			}else{
				$result = array("msg" => "Error", "success" => false);
			}

		}
		$data["result"] = json_encode($result);
		$this->load->view("ajax", $data);
	}
	public function add_shipment()
	{
		$result = array();
		
		$this->form_validation->set_rules("FromCityID", "From City", "required");
		$this->form_validation->set_rules("FromAddress", "From Address", "required");
		$this->form_validation->set_rules("FromPhone", "From Phone", "required");
		$this->form_validation->set_rules("FromContactPerson", "From Contact Person", "required");
		$this->form_validation->set_rules("ToCityID", "To City", "required");
		$this->form_validation->set_rules("ToConsigneeName", "To Consignee Name", "required");
		$this->form_validation->set_rules("ToAddress", "To Address", "required");
		$this->form_validation->set_rules("ToPhone", "To Phone", "required");
		$this->form_validation->set_rules("ToMobile", "To Mobile", "required");
		$this->form_validation->set_rules("ToContactPerson", "To Contact Person", "required");
		$this->form_validation->set_rules("COD", "Cash on delivery", "required");
		$this->form_validation->set_rules("Weight", "Weight", "required");
		$this->form_validation->set_rules("Contents", "Contents", "required");
		$this->form_validation->set_rules("SpecialInstuctions", "Special Instuctions", "required");
		$this->form_validation->set_rules("ProductID", "Product", "required");


		if ($this->form_validation->run() == FALSE) {
			$result = array("msg" => validation_errors("<div class='error'>", "</div>"), "success" => false);
		} else {
			
			$FromCityID = strip_tags($this->input->post("FromCityID"));
			$FromAddress = strip_tags($this->input->post("FromAddress"));
			$FromPhone = strip_tags($this->input->post("FromPhone"));
			$FromContactPerson = strip_tags($this->input->post("FromContactPerson"));
			$ToCityID = strip_tags($this->input->post("ToCityID"));
			$ToConsigneeName = strip_tags($this->input->post("ToConsigneeName"));
			$ToAddress = strip_tags($this->input->post("ToAddress"));
			$ToPhone = strip_tags($this->input->post("ToPhone"));
			$ToMobile = strip_tags($this->input->post("ToMobile"));
			$ToContactPerson = strip_tags($this->input->post("ToContactPerson"));
			$COD = strip_tags($this->input->post("COD"));
			$Weight = strip_tags($this->input->post("Weight"));
			$Contents = strip_tags($this->input->post("Contents"));
			$SpecialInstuctions = strip_tags($this->input->post("SpecialInstuctions"));
			$ProductID = strip_tags($this->input->post("ProductID"));

			$auth = $this->session->userdata('auth');
			$params = array(
				"FromCityID" => $FromCityID,
				"FromAddress" => $FromAddress,
				"FromPhone" => $FromPhone,
				"FromContactPerson" => $FromContactPerson,
				"ToCityID" => $ToCityID,
				"ToConsigneeName" => $ToConsigneeName,
				"ToAddress" => $ToAddress,
				"ToPhone" => $ToPhone,
				"ToMobile" => $ToMobile,
				"ToContactPerson" => $ToContactPerson,
				"COD" => $COD,
				"Weight" => $Weight,
				"Contents" => $Contents,
				"SpecialInstuctions" => $SpecialInstuctions,
				"ProductID" => $ProductID,
			);
			$params = json_encode($params);
			$call = callAPI('POST', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/SaveShipment', $params, $auth);
			$call = json_decode($call);
			if($call > 0){
				$result = array("msg" => "Pickup has been added", "success" => true);
			}else{
				$result = array("msg" => "Error", "success" => false);
			}

		}
		$data["result"] = json_encode($result);
		$this->load->view("ajax", $data);
	}
	public function fees()
	{
		$result = array();
		

		$this->form_validation->set_rules("id", "Product", "required");
		$this->form_validation->set_rules("w", "Weight", "required");
		$this->form_validation->set_rules("cod", "Cash On delivery ", "required");
		$this->form_validation->set_rules("city", "City", "required");


		if ($this->form_validation->run() == FALSE) {
			$result = array("msg" => validation_errors("<div class='error'>", "</div>"), "success" => false);
		} else {
			

			$cod = strip_tags($this->input->post("cod"));

			$id = strip_tags($this->input->post("id"));

			$city = strip_tags($this->input->post("city"));

			$w = strip_tags($this->input->post("w"));

			$auth = $this->session->userdata('auth');
			$params = array(
				"COD" => $cod,
				"ProductID" => $id,
				"CityID" => $city,
				"Weight" => $w,
			);
			$params = json_encode($params);
			$call = callAPI('POST', 'http://41.39.207.120:30001/DispatchAPI/api/ClientUsers/CalcFees', $params, $auth);
			$call = json_decode($call);
			$result = array("msg" => "Pickup has been added", "success" => true,'km'=>$call->FreeKilos,'df'=>$call->DeliveryFees,'ewf'=>$call->ExtraWeightFees,'codf'=>$call->CODFees,'total'=>$call->TotalFees);

		}
		$data["result"] = json_encode($result);
		$this->load->view("ajax", $data);
	}
}
