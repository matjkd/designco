<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
		$this->load->model('content_model');
	}
	
	function index()
	{
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
		$data['main_content'] = "content/main";
		$data['content'] = $this->content_model->get_content($data['menu']);
		
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */