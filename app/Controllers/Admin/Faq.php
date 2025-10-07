<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\FaqModel;

class Faq extends BaseController{
    protected $faqModel;
    protected $validation;
    public function __construct(){ 
        $this->faqModel = new FaqModel();
    }
	
	public function index(){		 	
	    $data['title'] = "Faq List";
		$data['faqList'] = $this->faqModel->faqList();
		return $this->adminFrontendLoad('faq/index', $data);		
	}

	public function createFaq($service_id,$type){	
	    $data['title'] = "Create Faq";
	    $data['service_id'] = $service_id;
	    $data['type'] = $type;
	    $data['faqList'] = $this->faqModel->faqListByType($type, $service_id);
		return $this->adminFrontendLoad('faq/create-faq',$data);		
	}
	
	
	public function saveFaq(){	
	    $data['type'] = $this->request->getpost('type');
	    $data['service_id'] = $this->request->getpost('service_id');
	    $data['heading'] = $this->request->getpost('heading');
	    $data['schema_description'] = $this->request->getpost('schema_description');
	    $data['description'] = $this->request->getpost('description');
	    $data['date'] = date("Y-m-d H:i:s");
	    $saveFaq = $this->faqModel->saveFaq($data);
	    if($saveFaq){
	        echo "1";
	    }else{
	        echo "2";
	    }
	    
	}

	public function editFaq($id){	
	    $data['title'] = "Edit Faq";
		$data['faqData'] = $this->faqModel->faqById( $id );
		$data['faqList'] = $this->faqModel->faqListByType($data['faqData']['type'], $data['faqData']['service_id']);
		return $this->adminFrontendLoad('faq/edit-faq', $data);		
	}
	
	public function deleteFaq($id,$service_id,$type){	
		$this->faqModel->deleteFaq( $id );
		return redirect()->to('admin/faq/create-faq/'.$service_id."/".$type);		
	}
	
	public function updateFaq(){	
	    $id = $this->request->getpost('id');
	    $data['type'] = $this->request->getpost('type');
	    $data['service_id'] = $this->request->getpost('service_id');
	    $data['heading'] = $this->request->getpost('heading');
	    $data['schema_description'] = $this->request->getpost('schema_description');
	    $data['description'] = $this->request->getpost('description');
	    $data['date'] = date("Y-m-d H:i:s");
	    
	    $updateFaq = $this->faqModel->updateFaq($data,$id);
	    if($updateFaq){
	        echo "1";
	    }else{
	        echo "2";
	    }
	    
	}
}
