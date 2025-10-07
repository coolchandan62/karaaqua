<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\HomeModel;


require APPPATH.'TestMail/PHPMailer/src/PHPMailer.php';
require APPPATH.'TestMail/PHPMailer/src/SMTP.php';
require APPPATH.'TestMail/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Enquiry extends BaseController{
    protected $homeModel;
    protected $validation;
    public function __construct(){
		$this->homeModel = new HomeModel();
    }
	
    public function saveRoEnquiry(){
        $data['page_name'] = $this->request->getpost('page_name');
        $data['comment'] = $this->request->getpost('comment');
		$data['name'] = $this->request->getpost('name');
// 		$data['email'] = $this->request->getpost('email');
		$data['mobile'] = $this->request->getpost('mobile');
		$data['address'] = $this->request->getpost('address');
        $data['date'] = date("Y-m-d H:i:s");
		$saveRoEnquiry = $this->homeModel->saveRoEnquiry($data);
		if($saveRoEnquiry){
		    
		    $mail = new PHPMailer(true); // Passing `true` enables exceptions
 
            try {
                // Server settings
                $mail->SMTPDebug = false; // Enable verbose debug output
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.zoho.in'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'noreply@karaaqua.com'; // SMTP username
                $mail->Password = 'noreply@123#'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to
             
                // Recipients
                $mail->setFrom('noreply@karaaqua.com', 'noreply');
                $mail->addAddress('akshaycwltechnology@gmail.com'); // Add a recipient
                $mail->addAddress('coderworldlabs@gmail.com'); // Add a recipient
                $mail->addAddress('info@karaaqua.com'); // Add a recipient
                $mail->addReplyTo('noreply@karaaqua.com', 'noreply');
                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = "Kara Aqua Enquiry";
                $message = "
                    <html>
                        <head>
                            <style>
                                table {
                                    width: 100%;
                                    border-collapse: collapse;
                                    font-family: Arial, sans-serif;
                                }
                                th, td {
                                    border: 1px solid #dddddd;
                                    padding: 8px;
                                    text-align: left;
                                }
                                th {
                                    background-color: #f2f2f2;
                                }
                            </style>
                        </head>
                        <body>
                            <h2>User Information</h2>
                            <table>
                                 <tr>
                                    <th>Page Name</th>
                                    <td>".$data['page_name']."</td>
                                </tr>
                                
                                <tr>
                                    <th>Name</th>
                                    <td>".$data['name']."</td>
                                </tr>
                               
                                <tr>
                                    <th>Mobile</th>
                                    <td>".$data['mobile']."</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>".$data['address']."</td>
                                </tr>
                                
                                <tr>
                                    <th>Comment</th>
                                    <td>".$data['comment']."</td>
                                </tr>
                            </table>
                        </body>
                        </html>";
                $mail->Body = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
             
                // Send the email
                $mail->send();
                
            } catch (Exception $e) {
            }
			echo "1";
		}else{
			echo "2";
		}
	}
}
