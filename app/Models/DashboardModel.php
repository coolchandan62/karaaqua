<?php

namespace App\Models;

use CodeIgniter\Model;
class DashboardModel extends Model{
    protected $table = 'register';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    
     public function updateUser($id,$data){
        return $this->db->table($this->table)
        ->where('id',$id)
        ->update($data);
    }

    public function checkPassword($id, $old_password) {
    $user = $this->db->table($this->table)
        ->where('id', $id)
        ->get()
        ->getRow();
    if ($user && password_verify($old_password, $user->password)) {
        return true;
    }
    return false;
}


}
