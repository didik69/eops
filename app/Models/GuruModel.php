<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    public function getGuru(){
        return $this->db->table('tbl_guru')->get()->getResultArray();
    }

    public function getGuruBy_id($id_guru){
        return $this->db->table('tbl_guru')->getWhere(['id_guru' => $id_guru])->getRow();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_guru')->insert($data);  
    }

    public function edit_data($data,$id_guru)
    {
        return $this->db->table('tbl_guru')->update($data, array('id_guru' =>  $id_guru));
    }

    public function delete_data($id_guru)
    {
        return $this->db->table('tbl_guru')->delete(array('id_guru'=>  $id_guru));
    }
}