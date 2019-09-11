<?php
class new_products extends CI_Model
{

	public function insert()
	{

		$data['name'] = $this->input->post('name');
		$data['price'] = $this->input->post('price');
		$data['desp'] = $this->input->post('desp');
		$this->db->insert('products',$data);
	
	}

	public function get()

	{

		$query = $this->db->get('products');
		$results = $query->result();
		return $results;
	
	}

	public function prod_select($id)
	
	{

		$this->db->select('*');
        $this->db->from('products');
        $this->db->where('id',$id );
        $query = $this->db->get();
        return $result = $query->row_array();
    
    }

    public function prod_update($id,$data)
    
    {
    	
    	$this->db->where('id', $id);
    	$updata = $this->db->update('products', $data);
    
    }
}