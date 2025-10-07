<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
class FaqModel extends Model{
    protected $table = 'faq';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

	
    public function faqList(){		
		return $this->db->table("faq")
        ->get()
        ->getResultArray();	
	}
	
	public function faqListByType($type,$service_id){		
		return $this->db->table("faq")
		->where('type',$type)
		->where('service_id',$service_id)
        ->get()
        ->getResultArray();	
	}
	
	public function categoryList(){		
		return $this->db->table("category")
		->where('status','1')
        ->get()
        ->getResultArray();	
	}
	
	public function serviceList(){		
		return $this->db->table("service")
		->where('status','1')
        ->get()
        ->getResultArray();	
	}
	
	public function blogList(){		
		return $this->db->table("blog")
		->where('status','1')
        ->get()
        ->getResultArray();	
	}
	
	public function saveFaq( $data ){
        return $this->db->table("faq")
        ->insert($data);
    }
    
    public function faqById( $id ){		
		return $this->db->table("faq")
            ->where('id',$id)
            ->get()
            ->getRowArray();		
	}
	
	public function updateFaq($data,$id){
		return $this->db->table("faq")
            ->where('id',$id)
            ->update($data);
    }
	

    
	public function deleteFaq($id){
		return $this->db->table("faq")
        ->where('id',$id)
        ->delete();
	}
	
    
}
