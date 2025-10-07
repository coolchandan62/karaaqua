<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\ContactDetailModel;

class ContactDetail extends BaseController{
    protected $contactDetailModel;
    protected $validation;
    function __construct(){

        $this->contactDetailModel = new ContactDetailModel();
    }
    public function index(){
        $data['contactData'] = $this->contactDetailModel->contactData();
        return $this->adminFrontendLoad("contact-detail/index",$data);
    }
    public function editContactDetail($id){
        $data['contactData'] = $this->contactDetailModel->contactDataById($id);
        return $this->adminFrontendLoad("contact-detail/edit-contact-detail",$data);
    }
    public function updateContactDetail(){
        $id = $this->request->getpost("id");
        $data['phone1'] = $this->request->getpost("phone1");
        $data['phone2'] = $this->request->getpost("phone2");
        $data['phone3'] = $this->request->getpost("phone3");
        $data['email1'] = $this->request->getpost("email1");
        $data['email2'] = $this->request->getpost("email2");
        $data['facebook_url'] = $this->request->getpost("facebook_url");
        $data['twitter_url'] = $this->request->getpost("twitter_url");
        $data['instagram_url'] = $this->request->getpost("instagram_url");
        $data['youtube_url'] = $this->request->getpost("youtube_url");
        $data['linkedin_url'] = $this->request->getpost("linkedin_url");
      
        if ($img = $this->request->getFile('footer_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/footer/', $originalName);
                $data["footer_image"] = $originalName;
            }
        }
        
        $updatecontact = $this->contactDetailModel->updateContactDetail($id,$data);
        if($updatecontact){
            echo "1";
        }else{
            echo "2";
        }
    }

}