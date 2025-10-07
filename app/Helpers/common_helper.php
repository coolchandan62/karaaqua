<?php

use CodeIgniter\Database\Database;

function marqueeBlogList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('blog');
    $builder->where('status', '1');
    $result = $builder->get();
    return $result->getResultArray();
}

function marqueeServiceList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('service');
    $builder->where('status', '1');
    $result = $builder->get();
    return $result->getResultArray();
}

function footerServiceList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('service');
    $builder->where('status', '1');
    $builder->limit(4);
    $result = $builder->get();
    return $result->getResultArray();
}
function headerproductList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->where('status', '1');
    $builder->where('type', '1');
    $result = $builder->get();
    return $result->getResultArray();
}
function productList($limit)
{
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->limit($limit);
    $builder->where('status', '1');
    $result = $builder->get();
    return $result->getResultArray();
}

function pageTitle($id)
{
    $db = \Config\Database::connect();
    $builder = $db->table('page_title');
    $builder->where('id', $id);   
    $result = $builder->get();
    return $result->getRowArray();
}

function footerproductList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->where('status', '1');
    $builder->limit(5);
    $result = $builder->get();
    return $result->getResultArray();
}
function stateList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('state');
    $builder->where('country', '101');
    $result = $builder->get();
    return $result->getResultArray();
}
function stateById($stateId)
{
    $db = \Config\Database::connect();
    $builder = $db->table('state');
    $builder->where('id', $stateId);
    $result = $builder->get();
    return $result->getRowArray();
}
function cityById($cityId)
{
    $db = \Config\Database::connect();
    $builder = $db->table('city');
    $builder->where('id', $cityId);
    $result = $builder->get();
    return $result->getRowArray();
}
function contactDetail()
{
    $db = \Config\Database::connect();
    $builder = $db->table('contact_detail');
    $result = $builder->get();
    return $result->getRowArray();
}


function registerUserById($Id)
{
    $db = \Config\Database::connect();
    $builder = $db->table('register');
    $builder->where('id', $Id);
    $result = $builder->get();
    return $result->getRowArray();
}

function checkoutByCartId($id){
   $db = \Config\Database::connect();
    $builder = $db->table('checkout');
    $builder->where('cart_id', $id);
    $result = $builder->get();
    return $result->getRowArray();
}

function productById($id){
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->where('id', $id);
    $result = $builder->get();
    return $result->getRowArray();
}

function orderById($id){
    $db = \Config\Database::connect();
    $builder = $db->table('order_info');
    $builder->where('id', $id);
    $result = $builder->get();
    return $result->getRowArray();
}


function orderByUserId($user_id) {
    $db = \Config\Database::connect();
    $builder = $db->table('order_info');
    $builder->where('user_id', $user_id);
    $builder->where('payment_status', 'paid');
    $builder->orderBy('created_at', 'DESC');

    $result = $builder->get();
    return $result->getResultArray();
}


function getLastOrderInvoiceNo() {
    $db = \Config\Database::connect();
    $builder = $db->table('order_info');
    $builder->select('invoice_no');
    $builder->where('payment_status', 'paid');
    $builder->orderBy('created_at', 'DESC');
    $result = $builder->get(1)->getRowArray();
    return $result ? $result['invoice_no'] : null;
}
