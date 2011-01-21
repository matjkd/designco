<?php

class Email extends My_Controller {

	function __Construct()
	{
		parent::__Construct();
	

	
	}

	function index()
	{
		
	}
	
	function send()
	{
					$this->form_validation->set_rules('email', 'email', 'trim|required');
					$this->form_validation->set_rules('subject', 'subject', 'trim|required');
					$this->form_validation->set_rules('message', 'message', 'trim|required');
						
						$data['email'] = $this->input->post('email');
						$data['subject'] = $this->input->post('subject');
	    				$data['message'] = $this->input->post('message');
						
    
			if($this->form_validation->run() == FALSE)
				{
					
					
					$this->session->set_flashdata('message',validation_errors());
					redirect('welcome/main/contact', 'refresh');
					
				}
			else
				{
		
					$this->email->from('info@designco.org.uk', 'DesignCo Website');
					$this->email->to('mat@redstudio.co.uk'); 
					
					$this->email->subject('DesignCo Contact Form');
					$this->email->message("The contact form has been filled in
					
					
					email: ".$data['email']."
					subject: ".$data['subject']."
				
					Message: ".$data['message']." 
    			
					");	
					$this->email->send();
					$this->session->set_flashdata('message', 'Your message has been sent');
					redirect('welcome/main/contact', 'refresh');
				}	
	}

}
