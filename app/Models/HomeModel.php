<?php

namespace App\Models;

use CodeIgniter\Model;
class HomeModel extends Model{
    protected $table = 'product';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function faqListByType($service_id,$type){		
		$result = $this->db->table("faq")
        ->where("service_id",$service_id)
        ->where("type",$type)
        
        ->get()
        ->getResultArray();

        
        return $result;
	}
	
	public function schemaFaqList($service_id, $type) {
        $builder = $this->db->table('faq');
    
        $builder->select('*')
                ->where('service_id', $service_id)
                ->where('type', $type);
    
        $builder->where('schema_description!=NULL');
        
    
    
        $query = $builder->get();
    
        return $query->getResultArray();
    }


    public function productList($limit){
        return $this->db->table($this->table)
        ->limit($limit)
        ->where('status','1')
        ->get()
        ->getResultArray();
    }
   
    public function productBySlug($heading_slug){
        return $this->db->table($this->table)
        ->where("heading_slug",$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function testimonialList(){
        return $this->db->table("testimonial")
        ->get()
        ->getResultArray();
    }
    public function saveContact($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function saveProductEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }


    public function saveServiceEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }

    public function saveApointmentEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function saveSubscribeEnquiry($data){
        return $this->db->table("enquiry")
        ->insert($data);
    }
    public function bannerList(){
        return $this->db->table("banner")
        ->get()
        ->getResultArray();
    }
    public function home(){
        return $this->db->table("home")
        ->get()
        ->getRowArray();
    }
    public function about(){
        return $this->db->table("about")
        ->get()
        ->getRowArray();
    }
    public function logoList(){
        return $this->db->table("client_logo")
        ->where('status','1')
        ->get()
        ->getResultArray();
    }
    public function blogList(){
        return $this->db->table("blog")
        ->where('status','1')
        ->orderby('id',"DESC")
        ->get()
        ->getResultArray();
    }


 public function latestBlogList(){
        return $this->db->table("blog")
        ->where('status','1')
        ->orderby('id',"DESC")
        ->limit(4)
        ->get()
        ->getResultArray();
    }

    
    public function blogBySlug($heading_slug){
        return $this->db->table("blog")
        ->where('heading_slug',$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function blogCommentList($blog_id){
        return $this->db->table("enquiry")
        ->where('blog_id',$blog_id)
        ->get()
        ->getResultArray();
    }
    public function domesticProducts(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->where('type','2')
        ->get()
        ->getResultArray();
    }
      public function commercialProducts(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->where('type','1')
        ->get()
        ->getResultArray();
    }

    public function domesticProducthome(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->where('home_page_product','1')
        ->where('type','2')
        ->get()
        ->getResultArray();
    }
     public function commercialProducthome(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->where('home_page_product','1')
        ->where('type','1')
        ->get()
        ->getResultArray();
    }


    public function contactData(){
        return $this->db->table("contact_detail")
        ->get()
        ->getRowArray();

    }
    public function addressList(){
        return $this->db->table("address")
        ->get()
        ->getResultArray();

    }
    public function serviceList(){
        return $this->db->table('service')
        ->where('status','1')
        ->get()
        ->getResultArray();
    }
    
    public function homeServiceList(){
        return $this->db->table('service')
        ->where('status','1')
        ->limit('7')
        ->get()
        ->getResultArray();
        
    }
    public function serviceDataBySlug($heading_slug){
        return $this->db->table('service')
        ->where('heading_slug',$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function siteMapProductList(){
        return $this->db->table($this->table)
        ->where('status','1')
        ->get()
        ->getResultArray();
    }
    public function serviceDataList(){
        return $this->db->table("service")
        ->limit(4)
        ->get()
        ->getResultArray();
    }
    public function productDataList(){
        return $this->db->table("product")
        ->limit(4)
        ->get()
        ->getResultArray();
    }
    
    public function recentProductList() {
        return $this->db->table('product')
            ->where('type', '2')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get()
            ->getResultArray();
    }
    
    public function saveRoEnquiry($data){
        return $this->db->table("ro_enquiry")
        ->insert($data);
    }
    
     public function checkUser($user_email){
        return $this->db->table("register")
        ->where("user_email",$user_email)
        ->get()
        ->getRowArray();
    }
      public function saveRegister($data){
        $this->db->table("register")->insert($data);
        return $this->db->insertID();
    }

 public function loginVerify($email)
{
    return $this->db->table('register')
                    ->where('user_email', $email)
                    ->get()
                    ->getRowArray(); 
}


public function saveOrderInfo($data){
      $this->db->table("order_info")->insert($data);
        return $this->db->insertID();
}
    
public function updateOrderInfo($id, $data)
{
    return $this->db->table('order_info')
                    ->where('id', $id)
                    ->update($data);
}


    public function findOrderId(){
        $builder = $this->db->table('order_info');
        $builder->orderBy('id', 'DESC'); 
        $builder->limit(1); 
        $query = $builder->get();
        return $query->getRowArray();
    }
    
public function saveCheckoutData($data){
      $this->db->table("checkout")->insert($data);
      return $this->db->insertID();
}

public function deleteCart($cart_id, $user_id)
{
    $builder =$this->db->table('checkout');
    $builder->where('cart_id', $cart_id)
            ->where('user_id', $user_id)
            ->delete(); 
}


}
