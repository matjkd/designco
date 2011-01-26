<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
		$this->load->model('content_model');
	}
	
	function index()
	{
		redirect('welcome/home', 'refresh');
	}

	function home()
	{
		$data['menu'] = 'home';	
		$data['content'] = $this->content_model->get_content($data['menu']);
		$data['slideshow'] = 'header/frontpage';
		$data['background'] = 'images/icons/homepage_background.jpg';	
		$this->load->vars($data);
		$this->load->view('template');
	}
	
	
	function main()
	{
		$segment_active = $this->uri->segment(3);
		if ($segment_active!=NULL)
			{
				$data['menu'] = $this->uri->segment(3);
			}
		else
			{
				$data['menu'] = 'home';	
			}
		
		$data['content'] = $this->content_model->get_content($data['menu']);
		
		if($data['menu'] == 'services')
			{
				$data['service_groups'] = $this->content_model->get_service_groups();
				$data['services'] = $this->content_model->get_services();
			} 
		$data['slideshow'] = 'header/slideshow';	
		$this->load->vars($data);
		$this->load->view('template');
	}
	function gallery()
	{
		$segment_active = $this->uri->segment(3);
		if ($segment_active!=NULL)
			{
				$data['menu'] = 'work';
			}
		else
			{
				$data['menu'] = 'work';	
			}
		
		$data['gallery'] = $segment_active;
		$data['slideshow'] = 'header/slideshow';	
				
		$this->load->vars($data);
		$this->load->view('template');
	}
	
	function clients()
	{
		$segment_active = $this->uri->segment(3);
		if ($segment_active!=NULL)
			{
				$data['menu'] = 'clients';
			}
		else
			{
				$data['menu'] = 'clients';	
			}
		
		$data['gallery'] = $segment_active;
		
		$data['slideshow'] = 'header/slideshow';			
		$this->load->vars($data);
		$this->load->view('template');
	}
	
function login()
	{
		
		$id = 'login';
		$data['content'] =	$this->content_model->get_content($id);
		$data['main_content'] = "user/login_form";
		
		
		$data['page'] = "login";
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */