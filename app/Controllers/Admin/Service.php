<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\ServiceModel;

class Service extends BaseController{
    protected $validation;
    protected $serviceModel;
    public function __construct(){
        $this->serviceModel = new ServiceModel();
    }
    public function index(){
       $data['serviceList'] = $this->serviceModel->serviceList();
       return $this->adminFrontendLoad("service/index",$data);
    }
    public function createService(){
        return $this->adminFrontendLoad("service/add-service");
    }
    public function saveService(){
        $data['heading'] = $this->request->getpost('heading');
		$data['description'] = $this->request->getpost('description');
		$data['short_description'] = $this->request->getpost('short_description');
		$data['meta_title'] = $this->request->getpost('meta_title');
		$data['meta_description'] = $this->request->getpost('meta_description');
		$data['heading_slug'] = $this->request->getpost('heading_slug');
        $data['date'] = date("Y-m-d H:i:s");
        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));
        
		if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/service/', $originalName);
                $data["image"] = $originalName;
            }
        }
		if ($img = $this->request->getFile('thumb_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/service/', $originalName);
                $data["thumb_image"] = $originalName;
            }
        }
		if ($img = $this->request->getFile('og_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/service/', $originalName);
                $data["og_image"] = $originalName;
            }
        }
        
		$checkService = $this->serviceModel->checkService($data['heading_slug']);
		if($checkService){
			echo "1";
		}else{
			$save = $this->serviceModel->saveService( $data );
			if($save){				
				echo "2";
			}else{
				echo "3";
			}		
		}	
    }
    public function editService($id){
        
        $data['serviceData'] = $this->serviceModel->editServiceById($id);
        return $this->adminFrontendLoad('service/edit-service',$data);
    }
    public function updateService(){
        $id = $this->request->getpost('id');
        $data['heading'] = $this->request->getpost('heading');
		$data['description'] = $this->request->getpost('description');
		$data['short_description'] = $this->request->getpost('short_description');
		$data['meta_title'] = $this->request->getpost('meta_title');
		$data['meta_description'] = $this->request->getpost('meta_description');
		$data['heading_slug'] = $this->request->getpost('heading_slug');
        $data['date'] = date("Y-m-d H:i:s");
        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));
        
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/service/', $originalName);
                $data["image"] = $originalName;
            }
        }
		if ($img = $this->request->getFile('thumb_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/service/', $originalName);
                $data["thumb_image"] = $originalName;
            }
        }
		if ($img = $this->request->getFile('og_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/service/', $originalName);
                $data["og_image"] = $originalName;
            }
        }
        
        $data["header_script"] = base64_decode($this->request->getpost("header_script"));
        $data["body_script"] = base64_decode($this->request->getpost("body_script"));
		
        $checkService = $this->serviceModel->checkServiceBySlug($id,$data['heading_slug']);
        if($checkService){
            echo "1";
        }else{
            $updateService = $this->serviceModel->updateService($id,$data);
            if($updateService){
                echo "2";
            }else{
                echo "3";
            }
        }
    }
    public function updateServiceStatus($id,$status){
        $data['status'] = $status;
        $this->serviceModel->updateServiceStatus($id,$data);
        return redirect()->to("admin/service");
    }
    public function deleteService($id){
        $this->serviceModel->deleteService($id);
        return redirect()->to("admin/service");
    }
}


?>
