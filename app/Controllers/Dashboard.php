<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DashboardModel;


require APPPATH.'TestMail/PHPMailer/src/PHPMailer.php';
require APPPATH.'TestMail/PHPMailer/src/SMTP.php';
require APPPATH.'TestMail/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Dashboard extends BaseController{
    protected $dashboardModel;
    protected $validation;
    public function __construct(){
		$this->dashboardModel = new DashboardModel();
    }
	
	public function userDashboard()
{
    if (!empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $data['userData'] = registerUserById($user_id);
        $data['title'] = 'User Dashboard';
        $data['meta_description'] = '';
        $data['og'] = '';
        $data['header_script'] = '';
        $data['body_script'] = '';
        return $this->dashboardLoad('user-dashboard', $data);
    } else {
        return redirect()->to('user-login');
    }
}


    public function userOrderList(){
        $user_id = $_SESSION['user_id'];
        $data['userdData'] = registerUserById($user_id);
        $data['orderData'] = orderByUserId($user_id);
		$data["title"] = "User Dashboard";
        $data["meta_description"] = "";
        $data["og"] = "";
        $data["header_script"] = "";
        $data["body_script"] = "";
		return $this->dashboardLoad('order',$data);		
	}

   public function userlogout() {
    $this->session->remove('user_id');
    $this->session->remove('isUserLoggedIn');
    return redirect()->to('user-login');
}


public function changePassword(){
        $data["title"] = "User Dashboard";
        $data["meta_description"] = "";
        $data["og"] = "";
        $data["header_script"] = "";
        $data["body_script"] = "";
    	return $this->dashboardLoad('change-password',$data);		
 
}

public function editProfile(){
        $user_id = $_SESSION['user_id'];
        $data['userdData'] = registerUserById($user_id);
        $data["title"] = "User Dashboard";
        $data["meta_description"] = "";
        $data["og"] = "";
        $data["header_script"] = "";
        $data["body_script"] = "";
    	return $this->dashboardLoad('user-dashboard-edit',$data);		
 
}

  public function updateUserData(){
        $id= $this->request->getpost('id');
        $data['user_name'] = $this->request->getpost('user_name');
        $data['city'] = $this->request->getpost('city');
		$data['state'] = $this->request->getpost('state');
		$data['pincode'] = $this->request->getpost('pincode');
		$data['address'] = $this->request->getpost('address');
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/user/', $originalName);
                $data["image"] = $originalName;
            }
        }
        $updateUser = $this->dashboardModel->updateUser($id,$data);
        if($updateUser){
            echo "1";
        }else{
            echo "2";
        }
}

   public function updatePassword()
{
    $id = $this->request->getPost('id');
    $oldPasswordInput = $this->request->getPost('old_password');
    $newPassword = $this->request->getPost('new_password');
    $user = registerUserById($id);

    if (!$user) {
        echo "3"; 
        return;
    }

    if (!password_verify($oldPasswordInput, $user['password'])) {
        echo "2"; 
        return;
    }

    $data['password'] = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateUser = $this->dashboardModel->updateUser($id, $data);

    if ($updateUser) {
        echo "1"; 
    } else {
        echo "3"; 
    }
}


}
