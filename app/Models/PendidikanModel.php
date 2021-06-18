<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    public function getPendidikan(){
        return $this->db->table('tbl_Pendidikan')->get()->getResultArray();
    }

    public function getPendidikanById($id_pendidikan){
        return $this->db->table('tbl_pendidikan')->getWhere(['id_pendidikan' => $id_pendidikan])->getRow();
    }

    public function getPendidikanByGuru($id_guru){
        return $this->db->table('tbl_pendidikan')->getWhere(['id_guru' => $id_guru])->getResultArray();
    }

    public function getGuruByPendidikan($id_pendidikan){
        return $this->db->table('tbl_pendidikan')->getWhere(['id_pendidikan' => $id_pendidikan])->getRow();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_Pendidikan')->insert($data);  
    }

    public function edit_data($data,$id_pendidikan)
    {
        return $this->db->table('tbl_Pendidikan')->update($data,array('id_pendidikan'=>  $id_pendidikan));
    }
    
    public function delete_data($id_pendidikan)
    {
        return $this->db->table('tbl_Pendidikan')->delete(array('id_pendidikan'=>  $id_pendidikan));
    }

}