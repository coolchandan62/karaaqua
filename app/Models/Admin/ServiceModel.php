<?php 

namespace App\Models\Admin;

use CodeIgniter\Model;
class ServiceModel extends Model{
    protected $table = 'service';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
    public function serviceList(){
        return $this->db->table($this->table)
        ->orderBy('status','1')
        ->get()
        ->getResultArray();
    }
    public function checkService($heading_slug){
        return $this->db->table($this->table)
        ->where('heading_slug',$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function saveService($data){
        return $this->db->table($this->table)
        ->insert($data);
    }
    public function editServiceById($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->get()
        ->getRowArray();
    }
    public function checkServiceBySlug($id,$heading_slug){
        return $this->db->table($this->table)
        ->where('id!=',$id)
        ->where('heading_slug',$heading_slug)
        ->get()
        ->getRowArray();
    }
    public function updateService($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function updateServiceStatus($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }
    public function deleteService($id){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->delete();
    }
}