<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\BannerModel;

class Banner extends BaseController{
    protected $validation;
    protected $bannerModel;
    public function __construct(){
        $this->bannerModel = new BannerModel();
    }
    public function index(){
       $data['bannerList'] = $this->bannerModel->banner();
        return $this->adminFrontendLoad('banner/index',$data);
    }
    public function createBanner(){
        return $this->adminFrontendLoad('banner/create-banner');
    }
    public function saveBanner(){
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/banner/', $originalName);
                $data["image"] = $originalName;
            }
        }
        $saveBanner = $this->bannerModel->saveBanner($data);
        if($saveBanner){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function editBanner($id){
        $data['banner'] = $this->bannerModel->editBannerById($id);
        return $this->adminFrontendLoad('banner/edit-banner',$data);
    }
    public function updateBanner(){
        $id = $this->request->getpost('id');
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/banner/', $originalName);
                $data["image"] = $originalName;
            }
        }
        $updateBanner = $this->bannerModel->updateBanner($id,$data);
        if($updateBanner){
            echo "1";
        }else{
            echo "2";
        }
    }
    public function updateBannerStatus($id,$status){
        $data['status'] = $status;
        $this->bannerModel->updateBanner($id,$data);
        return redirect()->to('admin/banner');

    }
    public function deleteBanner($id){
        $this->bannerModel->deleteBanner($id);
        return redirect()->to('admin/banner');

    }
}