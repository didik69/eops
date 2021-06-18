<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    public function getDataSekolah(){
        return $this->db->table('tbl_guru')->get()->getResultArray();
    }

    public function getDataSekolahBy_id(){
        return $this->db->table('tbl_datasekolah')->getWhere(['id' => 1])->getRow();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_guru')->insert($data);  
    }

    public function edit_data($data,$id)
    {
        return $this->db->table('tbl_datasekolah')->update($data, array('id' =>  $id));
    }

    public function delete_data($id)
    {
        return $this->db->table('tbl_guru')->delete(array('id'=>  $id));
    }
}