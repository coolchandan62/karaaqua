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

class Home extends BaseController{
    protected $homeModel;
    protected $validation;
    public function __construct(){
		$this->homeModel = new HomeModel();
    }
	
	public function index(){
		$data['productList'] = $this->homeModel->productList(3);
		$data['domesticproductList'] = $this->homeModel->domesticProducthome();
        $data['commercialproductList'] = $this->homeModel->commercialProducthome();
        // print_r(count($data['commercialproductList']));die;
		$data['testimonialList'] = $this->homeModel->testimonialList();
        $data['blogList'] = $this->homeModel->blogList();

		$data['bannerList'] = $this->homeModel->bannerList();
		$data['home'] = $this->homeModel->home();
		$data['logoList'] = $this->homeModel->logoList();
		$data['serviceList'] = $this->homeModel->homeServiceList();
		$page = pageTitle(1);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url() . "'/>
        <link href='" . base_url("") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url() . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url() . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

		return $this->frontendLoad('index',$data);		
	}

	public function service(){
        $data['serviceList'] = $this->homeModel->serviceList();
        $data['home'] = $this->homeModel->home();
		$page = pageTitle(11);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("service") . "'/>
        <link href='" . base_url("service") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("service") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("service") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

		return $this->frontendLoad('service',$data);		
	}

    public function serviceDetail($heading_slug){
        $data['serviceData'] = $this->homeModel->serviceDataBySlug($heading_slug);
        $data['serviceList'] = $this->homeModel->serviceDataList();
        $data['productList'] = $this->homeModel->productDataList();
        $data["title"] = $data['serviceData']['meta_title'];
        $data["header_script"] = $data['serviceData']['header_script'];
        $data["meta_description"] = $data['serviceData']['meta_description'];
        $data["og"] = "<link rel='canonical' href='" . base_url("service/") . $data['serviceData']['heading_slug'] . "'/>
        <link href='" . base_url("service/") . $data['serviceData']['heading_slug'] . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("service/") . $data['serviceData']['heading_slug'] . "'/>
        <meta property='og:title' content='" . $data["serviceData"]['meta_title'] . "'/>
        <meta property='og:description' content='" . $data["serviceData"]['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/service/') . $data["serviceData"]['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("service/") . $data['serviceData']['heading_slug'] . "'/>
        <meta property='twitter:title' content='" . $data["serviceData"]['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $data["serviceData"]['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/service/') . $data["serviceData"]['og_image'] . "'/>";
        $data["header_script"] = $data['serviceData']["header_script"];
        $data["body_script"] = $data['serviceData']["body_script"];
        $data["faqList"] = $this->homeModel->faqListByType($data["serviceData"]['id'],2);
        $data["schemaFaqList"] = $this->homeModel->schemaFaqList($data["serviceData"]['id'],2);
        
        return $this->frontendLoad('service-detail',$data);
    }
    public function about(){
		$data['about'] = $this->homeModel->about();
        $data['logoList'] = $this->homeModel->logoList();
		$page = pageTitle(5);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("about-us") . "'/>
        <link href='" . base_url("about-us") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("about-us") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("about-us") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

		return $this->frontendLoad('about',$data);		
	}
    public function contact(){
        $data['contactData'] = $this->homeModel->contactData();
        $data['addressList'] = $this->homeModel->addressList();
		$page = pageTitle(4);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("contact-us") . "'/>
        <link href='" . base_url("contact-us") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("contact-us") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("contact-us") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

		return $this->frontendLoad('contact',$data);		
	}
    public function blogs(){
        $data['blogList'] = $this->homeModel->blogList();
		$page = pageTitle(12);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("blogs") . "'/>
        <link href='" . base_url("blogs") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("blogs") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("blogs") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

		return $this->frontendLoad('blogs',$data);		
		
	}
    public function blog($heading_slug){
        $data['blog'] = $this->homeModel->blogBySlug($heading_slug);
        $data['blogCommentList'] = $this->homeModel->blogCommentList($data['blog']['id']);
        $data['blogList'] = $this->homeModel->latestBlogList();
        $data["title"] = $data['blog']['meta_title'];
        $data["meta_description"] = $data['blog']['meta_description'];
        $data["og"] = "<link rel='canonical' href='" . base_url("blog/") . $data['blog']['heading_slug'] . "'/>
        <link href='" . base_url("blog/") . $data['blog']['heading_slug'] . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("blog/") . $data['blog']['heading_slug'] . "'/>
        <meta property='og:title' content='" . $data["blog"]['meta_title'] . "'/>
        <meta property='og:description' content='" . $data["blog"]['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/blog/') . $data["blog"]['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("blog/") . $data['blog']['heading_slug'] . "'/>
        <meta property='twitter:title' content='" . $data["blog"]['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $data["blog"]['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/blog/') . $data["blog"]['og_image'] . "'/>";
        $data["faqList"] = $this->homeModel->faqListByType($data["blog"]['id'],1);
        $data["schemaFaqList"] = $this->homeModel->schemaFaqList($data["blog"]['id'],1);
        $data["header_script"] = $data['blog']["header_script"];
        $data["body_script"] = $data['blog']["body_script"];

        return $this->frontendLoad('blog-detail',$data);	
    }

    public function saveContact(){
		$data['name'] = $this->request->getpost('name');
		$data['type'] = $this->request->getpost('type');
		$data['email'] = $this->request->getpost('email');
		$data['phone'] = $this->request->getpost('phone');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveContact($data);
		if($save){
       $mail = new PHPMailer(true); // Passing `true` enables exceptions
         $service_page = "Contact US Page";
            try {
                $mail->SMTPDebug = false; // Enable verbose debug output
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.zoho.in'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'noreply@karaaqua.com'; // SMTP username
                $mail->Password = 'noreply@123#'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to
             
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
                                    <td>". $service_page."</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>".$data['name']."</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>".$data['email']."</td>
                                </tr>
                                <tr>
                                    <th>Mobile No.</th>
                                    <td>".$data['phone']."</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>".$data['message']."</td>
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

    public function saveProductEnquiry(){
		
		$data['product_id'] = $this->request->getpost('productId');
		$data['name'] = $this->request->getpost('name');
		$data['type'] = $this->request->getpost('type');
		$data['email'] = $this->request->getpost('email');
		$data['phone'] = $this->request->getpost('phone');
		$data['state'] = $this->request->getpost('p_state');
		$data['city'] = $this->request->getpost('p_city');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveProductEnquiry($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}

 public function saveServiceEnquiry(){
		$data['service'] = $this->request->getpost('service');
		$data['name'] = $this->request->getpost('name');
		$data['type'] = $this->request->getpost('type');
		$data['email'] = $this->request->getpost('email');
		$data['phone'] = $this->request->getpost('phone');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveServiceEnquiry($data);
		if($save){
        $mail = new PHPMailer(true); // Passing `true` enables exceptions
         $service_page = "Service Detail Page";
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
                                    <td>". $service_page."</td>
                                </tr>
                              <tr>
                                    <th>Service Name</th>
                                    <td>".$data['service']."</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>".$data['name']."</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>".$data['email']."</td>
                                </tr>
                                <tr>
                                    <th>Mobile No.</th>
                                    <td>".$data['phone']."</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>".$data['message']."</td>
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

	public function thankYou(){
        $page = pageTitle(6);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("thankyou") . "'/>
        <link href='" . base_url("thankyou") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("thankyou") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("thankyou") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
         $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

		return $this->frontendLoad('thankyou',$data);		
	}
	
    public function productDetails($heading_slug){
       	$data['product'] = $this->homeModel->productBySlug($heading_slug);
		$data['recentProductList'] = $this->homeModel->recentProductList();
		$data["title"] = $data['product']['meta_title'];
        $data["meta_description"] = $data['product']['meta_description'];
        $data["og"] = '<link rel="canonical" href="' . base_url("product/") . $data['product']['heading_slug'] . '"/>
        <link href="' . base_url("product/") . $data['product']['heading_slug'] . '" hreflang="en-in" rel="alternet"/>
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="' . base_url("product/") . $data['product']['heading_slug'] . '"/>
        <meta property="og:title" content="' . $data["product"]['meta_title'] . '"/>
        <meta property="og:description" content="' . $data["product"]['meta_description'] . '"/>
        <meta property="og:image" content="' . base_url('assets/uploads/product/') . $data["product"]['og_image'] . '"/>
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="twitter:card" content="summary_large_image"/>
        <meta property="twitter:url" content="' . base_url("product/") . $data['product']['heading_slug'] . '"/>
        <meta property="twitter:title" content="' . $data["product"]['meta_title'] . '"/>
        <meta property="twitter:description" content="' . $data["product"]['meta_description'] . '"/>
        <meta property="twitter:image" content="' . base_url('assets/uploads/product/') . $data["product"]['og_image'] . '"/>';
        $data["header_script"] = $data['product']["header_script"];
        $data["body_script"] = $data['product']["body_script"];
        $data["faqList"] = $this->homeModel->faqListByType($data['product']['id'],3);
        $data["schemaFaqList"] = $this->homeModel->schemaFaqList($data['product']['id'],3);
        return $this->frontendLoad('product-details',$data);
    }


    public function products(){
        $data['productList'] = $this->homeModel->domesticProducts();
        $page = pageTitle(13);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("products") . "'/>
        <link href='" . base_url("products") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("products") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("products") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

        return $this->frontendLoad('product-list',$data);		
    }


    public function comproducts(){
        $data['productList'] = $this->homeModel->commercialProducts();
        $page = pageTitle(13);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("commercial-products") . "'/>
        <link href='" . base_url("commercial-products") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("commercial-products") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("commercial-products") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

        return $this->frontendLoad('commercial-product',$data);		
    }


    // public function productNew(){
    //     $data["title"] = "";
    //     $data["meta_description"] = "";
    //     $data["og"] = "";
    //     return $this->frontendLoad('product-new',$data);		
    // }
    
    public function saveApointmentEnquiry(){
		
		$data['type'] = $this->request->getpost('type');
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveApointmentEnquiry($data);

        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host = 'bh-in-15.webhostbox.net';
            $mail->SMTPAuth = true; 
            $mail->Username = 'testsupport@detectivesanjeev.com'; 
            $mail->Password = 'x+nu4fiXa;fr';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587; 
        
            $mail->setFrom('testsupport@detectivesanjeev.com', 'Mailer');
            $mail->addAddress('jai.12go@gmail.com');
            $mail->addReplyTo('testsupport@detectivesanjeev.com', 'Information');
            $mail->isHTML(true); 
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}
    public function saveBlogEnquiry(){
		
        $data['type'] = $this->request->getpost('type');
		$data['blog_id'] = $this->request->getpost('blog_id');
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
		$data['message'] = $this->request->getpost('message');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveApointmentEnquiry($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}
    public function saveSubscribeEnquiry(){
		
		$data['type'] = $this->request->getpost('type');
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
        $data['date'] = date("Y-m-d H:s:i");
		$save = $this->homeModel->saveSubscribeEnquiry($data);
		if($save){
			echo "1";
		}else{
			echo "2";
		}
	}

    public function sitemapXml(){
        $this->response->setHeader('Content-Type', 'application/xml');
        $data['serviceList'] = $this->homeModel->serviceList();
        $data['blogList'] = $this->homeModel->blogList();
        $data['productList'] = $this->homeModel->siteMapProductList();
        return view('home/sitemap-xml',$data);
    }
    public function sitemap(){
        $page = pageTitle(14);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("sitemap") . "'/>
        <link href='" . base_url("sitemap") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("sitemap") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("sitemap") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data['serviceList'] = $this->homeModel->serviceList();
        $data['blogList'] = $this->homeModel->blogList();
        $data['productList'] = $this->homeModel->siteMapProductList();
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

        return $this->frontendLoad('sitemap',$data);
    }
    
    public function roService(){
        $page = pageTitle(15);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("ro-service") . "'/>
        <link href='" . base_url("ro-service") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("ro-service") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("ro-service") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

        return view('home/ro-service',$data);		
    }
    

    public function roInstallation(){
        $page = pageTitle(16);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("ro-installation-service") . "'/>
        <link href='" . base_url("ro-installation-service") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("ro-installation-service") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("ro-installation-service") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

        return view('home/ro-installation-services',$data);		
    }

    public function roRepairing(){
        $page = pageTitle(17);
        $data["title"] = $page["meta_title"];
        $data["meta_description"] = $page["meta_description"];
        $data["og"] = "<link rel='canonical' href='" . base_url("ro-repairing-service") . "'/>
        <link href='" . base_url("ro-repairing-service") . "' hreflang='en-in' rel='alternet'/>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <meta property='og:type' content='website'/>
        <meta property='og:url' content='" . base_url("ro-repairing-service") . "'/>
        <meta property='og:title' content='" . $page['meta_title'] . "'/>
        <meta property='og:description' content='" . $page['meta_description'] . "'/>
        <meta property='og:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>
        <meta property='og:image:width' content='1200' />
        <meta property='og:image:height' content='630' />
        <meta property='twitter:card' content='summary_large_image'/>
        <meta property='twitter:url' content='" . base_url("ro-repairing-service") . "'/>
        <meta property='twitter:title' content='" . $page['meta_title'] . "'/>
        <meta property='twitter:description' content='" . $page['meta_description'] . "'/>
        <meta property='twitter:image' content='" . base_url('assets/uploads/page/') . $page['og_image'] . "'/>";
        $data["header_script"] = $page["header_script"];
        $data["body_script"] = $page["body_script"];

        return view('home/ro-repairing-services',$data);		
    }
    

    public function thanks(){
        $data["title"] = "Thanks | Kara Aqua";
        $data["meta_description"] = "Thanks | Kara Aqua";

        return view('home/thanks',$data);	
    }
    
    public function saveRoEnquiry(){
		
		$data['name'] = $this->request->getpost('name');
		$data['email'] = $this->request->getpost('email');
		$data['mobile'] = $this->request->getpost('mobile');
		$data['address'] = $this->request->getpost('address');
        $data['date'] = date("Y-m-d H:i:s");

		$saveRoEnquiry = $this->homeModel->saveRoEnquiry($data);
		if($saveRoEnquiry){
			echo "1";
		}else{
			echo "2";
		}
	}


     public function loginPage(){
      $data['preUrl'] = previous_url();
    
    $data["title"] = "";
        $data["meta_description"] ="";
        $data["og"] = "";
        $data["header_script"] = "";
        $data["body_script"] = "";
	return $this->frontendLoad('login',$data);		
    }
        public function registerPage(){
        $data["title"] = "";
        $data["meta_description"] ="";
        $data["og"] = "";
        $data["header_script"] = "";
        $data["body_script"] = "";
	return $this->frontendLoad('signup',$data);		

    }

 public function userRegistration()
    {
        $data['user_name']  = $this->request->getPost('user_name');
        $data['user_email'] = $this->request->getPost('user_email');
        $data['user_phone'] = $this->request->getPost('user_phone');
        $data['password']   = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $data['created_at'] = date('Y-m-d H:i:s');
		$checkUser = $this->homeModel->checkUser($data['user_email']);
            if($checkUser){
                echo "1";
            }else{
            $saveUser = $this->homeModel->saveRegister($data);
            if ($saveUser) {
                $this->session->set('user_id',$saveUser);
                $this->session->set('isUserLoggedIn',true);
            echo "2"; 
            } else {
            echo "3"; 
         }

        }

    }

public function userLogin()
{
    $email = $this->request->getPost('user_email');
    $password = $this->request->getPost('password');
    $userlogin = $this->homeModel->loginVerify($email);

    if ($userlogin && password_verify($password, $userlogin['password'])) {
        $this->session->set([
            'user_id' => $userlogin['id'],
            'isUserLoggedIn' => true
        ]);

    

      echo "1";
    } else {
       echo "2";
    }
}



public function createOrder()
{
    $amount = $this->request->getPost('amount');
    $product_id = $this->request->getPost('product_id');
    $product_price = $this->request->getPost('product_price');
    $qty = $this->request->getPost('qty');
    $key_id = "rzp_live_RCH4LhK9GpdeFv";
    $key_secret = "YN720v471U3CnLB9KqWdgO5h";
    $receipt_id = 'order_rcptid_' . time();
    $order_data = [
        'product_id' => $product_id,
        'product_price' => $product_price,
        'qty' => $qty,
        'total_amount' => $amount,
        'receipt_id' => $receipt_id,
        'status' => 'created', 
        'created_at' => date('Y-m-d H:i:s')
    ];
     $saveOrder = $this->homeModel->saveOrderInfo($order_data);
    $ch = curl_init('https://api.razorpay.com/v1/orders');
    curl_setopt($ch, CURLOPT_USERPWD, "$key_id:$key_secret");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'amount' => $amount * 100,
        'currency' => 'INR',
        'receipt' => $receipt_id,
        'payment_capture' => 1
    ]));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        return $this->response->setJSON(['error' => curl_error($ch)]);
    }

    curl_close($ch);
    $order = json_decode($response, true);

    return $this->response->setJSON([
        'order_id' => $order['id'],
        'key' => $key_id
    ]);
}

public function createRazorpayOrder() {
  $amount = $_POST['amount']; 
  $apiKey = 'rzp_live_RCH4LhK9GpdeFv';
  $apiSecret = 'YN720v471U3CnLB9KqWdgO5h';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/orders');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':' . $apiSecret);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'amount' => $amount * 100, 
    'currency' => 'INR',
    'payment_capture' => 1
  ]));
  $response = curl_exec($ch);
  curl_close($ch);
  $order = json_decode($response);
  return $order->id;
}


}
