<?php

namespace App\Controllers;

use App\Models\HomeModel;

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;


require APPPATH.'TestMail/PHPMailer/src/PHPMailer.php';
require APPPATH.'TestMail/PHPMailer/src/SMTP.php';
require APPPATH.'TestMail/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Payment extends BaseController
{

    public function __construct()
    {
        $this->homeModel = new HomeModel();
        $this->session = \Config\Services::session();
        // Load Razorpay config and SDK
        

    }



public function verifyPayment()
{
    //$keyId = 'rzp_test_szKGxZmIclBulk';
    //$keySecret = 'ZfKYtoCf87RJJC7OS8ADwdso';
    
    $keyId = 'rzp_live_RCH4LhK9GpdeFv';
    $keySecret = 'YN720v471U3CnLB9KqWdgO5h';

    $paymentId = $this->request->getPost('razorpay_payment_id');
    $orderId = $this->request->getPost('razorpay_order_id');
    $signature = $this->request->getPost('razorpay_signature');
    $id = $this->request->getPost('order_id');
    require_once(APPPATH . 'ThirdParty/razorpay/config.php');
    require_once(APPPATH . 'ThirdParty/razorpay/razorpay-php/Razorpay.php');
    $api = new Api($keyId, $keySecret);
    try {
        $attributes = [
            'razorpay_order_id'   => $orderId,
            'razorpay_payment_id' => $paymentId,
            'razorpay_signature'  => $signature
        ];

  $api->utility->verifyPaymentSignature($attributes);

$getLastInvoiceNo = getLastOrderInvoiceNo();
$year = date('Y'); 
$prefix = 'KA' . $year;
if ($getLastInvoiceNo) {
    $lastNumber = (int)substr($getLastInvoiceNo, 6);
    $newNumber = $lastNumber + 1;
    $invoice_no = $prefix . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
} else {
    $invoice_no = $prefix . '1001';
}

$order_data = [
    'transaction_id' => $paymentId,
    'order_id'       => $orderId,
    'payment_status' => 'paid',
    'created_at'     => date('d-m-y,H:i:s'),
    'invoice_no'     => $invoice_no
];

$updateOrder = $this->homeModel->updateOrderInfo($id, $order_data);

        if($updateOrder) {
        $this->session->remove('razorpay_order_id');
        return redirect('thankyou');
        }else{
    return redirect()->back();             

        }

    } catch (SignatureVerificationError $e) {
    return redirect()->back();              
       
    }
}

public function checkout()
{
    $user_id = session()->get('user_id');
    if (!$user_id) {
        return redirect()->to('user-login');
    }
    $cart_id = session()->get('cart_id');
    if (!$cart_id) {
        return redirect()->back();
    }
    $cartdata = checkoutByCartId($cart_id);
    if (!$cartdata) {
        return redirect()->back();
    }
    $productdata = productById($cartdata['product_id']);
    $data = [
        'user_id'         => $user_id,
        'cartdata'        => $cartdata,
        'productdata'     => $productdata,
        'title'           => '',
        'meta_description'=> '',
        'og'              => '',
        'header_script'   => '',
        'body_script'     => ''
    ];

    return $this->frontendLoad('checkout', $data);
}


public function checkoutOrder()
{
    $data['product_id'] = $this->request->getPost('product_id');
    $data['product_price'] = (float) $this->request->getPost('product_price');
    $data['qty'] = (int) $this->request->getPost('qty');
    $data['user_id'] = $this->session->get('user_id'); 
    $data['cart_id'] = session_id(); 
    $this->session->set('cart_id',$data['cart_id']);
    $savedata = $this->homeModel->saveCheckoutData($data);
    if ($savedata) {
        return $this->response->setJSON(['status' => 'success']); 
    } else {
        return $this->response->setJSON(['status' => 'failure']); 
    }
}


public function saveOrder()
{
 $keyId = 'rzp_live_RCH4LhK9GpdeFv';
    $keySecret = 'YN720v471U3CnLB9KqWdgO5h';
    $displayCurrency = 'INR';

    require_once(APPPATH . 'ThirdParty/razorpay/config.php');
    require_once(APPPATH . 'ThirdParty/razorpay/razorpay-php/Razorpay.php');

    $receipt_id   = 'order_rcptid_' . time();
    $amount       = (float)$this->request->getPost('amount');
    $amountInPaise = $amount * 100;

    $data = [
       'product_id'     => $this->request->getPost('product_id'),
        'product_price'  => (float) $this->request->getPost('product_price'),
        'qty'            => (int) $this->request->getPost('qty'),
        'user_id'        => $this->session->get('user_id'),
        'first_name'     => $this->request->getPost('first_name'),
        'last_name'      => $this->request->getPost('last_name'),
        'address'        => $this->request->getPost('address'),
        'city'           => $this->request->getPost('city'),
        'state'          => $this->request->getPost('state'),
        'zip_code'       => $this->request->getPost('zip_code'),
        'email_id'       => $this->request->getPost('email_id'),
        'mobile_number'  => $this->request->getPost('mobile_number'),
        'receipt_id'     => $receipt_id,
        'total_amount'   => $amount
    ];

    $savedata = $this->homeModel->saveOrderInfo($data);
    if ($savedata) {
        $data['user_id'] = $this->session->get('user_id');
        $data['cart_id'] = $this->session->get('cart_id');
        $deletecartData = $this->homeModel->deleteCart($data['cart_id'],$data['user_id']);
        $this->session->set('order_id', $savedata);

        $api = new Api($keyId, $keySecret);
        $razorpayOrder = $api->order->create([
            'receipt'         => $receipt_id,
            'amount'          => $amountInPaise,
            'currency'        => 'INR',
            'payment_capture' => 1
        ]);
        $razorpayOrderId = $razorpayOrder['id'];
        $this->session->set('razorpay_order_id',$razorpayOrderId);
        return redirect()->to('payment');
    } else {
        return redirect()->to('checkout');
    }
}

public function payment(){
$data['order_id'] = session('order_id');
$data['razorpay_order_id'] = session('razorpay_order_id');
$data['keyid'] = 'rzp_live_RCH4LhK9GpdeFv';
$data['orderdata'] = orderById($data['order_id']);
$data["title"] = "";
$data["meta_description"] ="";
$data["og"] = "";
$data["header_script"] = "";
$data["body_script"] = "";
if($data['razorpay_order_id']){
return $this->frontendLoad('payment',$data);	
}else{
 return redirect()->back();
}

}


}
