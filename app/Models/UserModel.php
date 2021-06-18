<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getUser(){
        return $this->db->table('tbl_user')->get()->getResultArray();
    }

    public function getUserBy($username){
        return $this->db->table('tbl_user')->getWhere(['username' => $username])->getRow();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_user')->insert($data);  
    }

    public function edit_data($data,$id_siswa)
    {
        return $this->db->table('tbl_user')->update($data,array('id_siswa'=>  $id_siswa));
    }

    public function delete_data($id_siswa)
    {
        return $this->db->table('tbl_user')->delete(array('id_siswa'=>  $id_siswa));
    }

}