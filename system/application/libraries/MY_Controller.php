<?php

class MY_Controller extends Controller {

	function __construct() {
	parent::Controller();
	
	$config_data['config_company_name'] = "DesignCo";
	$config_data['config_address'] = "address";
	$config_data['config_version'] = "0.0.5";
	$config_data['config_email'] = "info@thedesigncompany.com";
	
	$this->config_email = 'info@thedesigncompany.com';
	$this->config_company_name = 'DesignCo';
	$this->load->vars($config_data);

	}
	

}