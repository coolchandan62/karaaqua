<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Admin\ProductModel;

class Product extends BaseController{
    protected $validation;
    public function __construct(){
        $this->productModel = new ProductModel();
    }
    public function index(){
    $data['productList'] = $this->productModel->productList();
        return $this->adminFrontendLoad('product/index',$data);		
    }
    public function createProduct(){
        return $this->adminFrontendLoad("product/add-product");
    }
    
    public function saveProduct(){
        $data['type'] = $this->request->getPost('type');
        $data['heading'] = $this->request->getPost('heading');
        $data['heading_slug'] = $this->request->getPost('heading_slug');
        $data['description'] = $this->request->getPost('description');
        $data['feature'] = $this->request->getPost('feature');

        $data['short_description'] = $this->request->getPost('short_description');
        $data['meta_title'] = $this->request->getPost('meta_title');
        $data['meta_description'] = $this->request->getPost('meta_description');
        $data['mrp'] = $this->request->getPost('mrp');
        $data['price'] = $this->request->getPost('price');
        
        $data['content'] = $this->request->getPost('content');
        $data['additional_information'] = $this->request->getPost('additional_information');

        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
		$data['date'] = date("Y-m-d H:i:s");

        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('thumb_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["thumb_image"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image1')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image1"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image2')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image2"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image3')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image3"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image4')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image4"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('og_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["og_image"] = $originalName;
            }
        }
       
 
        $checkproduct = $this->productModel->checkProduct($data['heading_slug']);
        if($checkproduct){
            echo "1";
        }else{
            $saveproduct = $this->productModel->saveProduct($data);
            if($saveproduct){
                echo "2";
            }else{
                echo "3";
            }
        }
    }

    public function editProduct($id){
        $data['product'] = $this->productModel->editProductById($id);
        return $this->adminFrontendLoad("product/edit-product",$data);
    }

    public function updateProduct(){
        $id= $this->request->getPost('id');
        $data['type'] = $this->request->getPost('type');
        $data['heading'] = $this->request->getPost('heading');
        $data['heading_slug'] = $this->request->getPost('heading_slug');
        $data['description'] = $this->request->getPost('description');
        $data['feature'] = $this->request->getPost('feature');
        $data['short_description'] = $this->request->getPost('short_description');
        $data['meta_title'] = $this->request->getPost('meta_title');
        $data['meta_description'] = $this->request->getPost('meta_description');
        $data['mrp'] = $this->request->getPost('mrp');
        $data['price'] = $this->request->getPost('price');
        $data['content'] = $this->request->getPost('content');
        $data['additional_information'] = $this->request->getPost('additional_information');
        $data["header_script"] = base64_decode($this->request->getpost("header_script"));
        $data["body_script"] = base64_decode($this->request->getpost("body_script"));

        $chars = array ("!", "\"", "#", "$", "%", "&", "/", "(", ")", "?", "*", "+", "-", ".", ",", ";", ":", "_", " ", "--", "---", "----", "-----", "=", "'", "-", "’s", "'s" );
    	$urlValue = str_replace ( $chars, "-", $data['heading_slug']);
    	$data['heading_slug'] = strtolower(str_replace ( $chars, "-", rtrim($urlValue,"-") ));	
		$data['date'] = date("Y-m-d H:i:s");

        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('thumb_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["thumb_image"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image1')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image1"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image2')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image2"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image3')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image3"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('image4')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["image4"] = $originalName;
            }
        }
        if ($img = $this->request->getFile('og_image')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $originalName = $img->getClientName();
                $img->move(ROOTPATH . 'assets/uploads/product/', $originalName);
                $data["og_image"] = $originalName;
            }
        }

        $checkproduct = $this->productModel->checkProductById($id,$data['heading_slug']);
        if($checkproduct){
            echo "1";
        }else{
            $updateProduct = $this->productModel->updateProduct($id,$data);
            if($updateProduct){
                echo "2";
            }else{
                echo "3";
            }
        }
    }
    public function updateProductStatus($id,$status){
        $data['status'] = $status;
        $this->productModel->updateProductStatus($id,$data);
        return redirect()->to('admin/product');
    }
    public function productDelete($id){
        $this->productModel->productDelete($id);
        return redirect()->to('admin/product');
    }


   public function updateHomeProductStatus($id,$home_page_product){
        $data['home_page_product'] = $home_page_product;
        $this->productModel->updateProductStatus($id,$data);
        return redirect()->to('admin/product');
    }


}