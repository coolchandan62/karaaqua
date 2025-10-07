<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\PageModel;
class Page extends BaseController{
    protected $pageModel;
    protected $validation;
    public function __construct(){
        $this->pageModel = new PageModel();
    }
    public function index(){
        $data["pageList"] = $this->pageModel->get();
        return $this->adminFrontendLoad('page/index',$data);
    }

    public function editpage($id){
        $data["page"] = $this->pageModel->edit($id);
        return $this->adminFrontendLoad('page/editpage',$data);
    }
    public function update(){
        $id = $this->request->getpost("id");
        $data["meta_title"] = $this->request->getpost("meta_title");
        $data["meta_description"] = $this->request->getpost("meta_description");
        
        $data["header_script"] = base64_decode($this->request->getpost("header_script"));
        $data["body_script"] = base64_decode($this->request->getpost("body_script"));
        
        $data['date'] = date("Y-m-d H:i:s");
        if ($img = $this->request->getFile('og_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/page/', $originalName);
                $data["og_image"] = $originalName;
            }
        }
        $update = $this->pageModel->updateabout($id,$data);
        if($update){
           echo 1;
        }else{
        echo 2;
        }
    }
}