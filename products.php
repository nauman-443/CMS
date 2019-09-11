<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller 
{

	 public function __construct() 
	 {
            // Call the Model constructor
            parent::__construct();
            $this->load->model('new_products');
     }

	
	public function index()
	{
			//$this->load->model('users');
			$data['user'] = $this->new_products->get();
			//print_r($data);
			//die;

			$this->load->view('view_users',$data);
	}


	public function add_prod()
	{

		if ($this->input->post('submit'))
		{
		
			//$data['name'] = $this->input->post('name');
			//$data['price'] = $this->input->post('price');
			//$data['desp'] = $this->input->post('desp');

		
			//$this->db->insert('products',$data);
			//echo '<b>','yahooooooooooo';
		

			//$this->load->model('new_products');
			//echo 'tmodel calling';
			
			$this->new_products->insert();
			redirect ('products');
		
		}

		else

		{
		$this->load->view('add_products');	
		}

	}


	public function edit()
	{
		  	//$data = array();
          	//$get = $this->uri->uri_to_assoc();
          	//print_r($get);	}
		 	
		 	$id = $_GET['id'];
			$data['result'] = $this->new_products->prod_select($id);
			
			//print_r($data);
			
			$this->load->view('view_edit',$data);

				if ($this->input->post('ok'))
				{

				$date['name'] = $this->input->post('name');
				$date['price'] = $this->input->post('price');
				$date['desp'] = $this->input->post('desp');
				$this->new_products->prod_update($id,$date)	;
				redirect ('products');
				//print_r($date);
				}
	}

}
