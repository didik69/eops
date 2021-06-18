<?php

namespace App\Models;

use CodeIgniter\Model;

class BeasiswaModel extends Model
{
    public function getBeasiswa(){
        return $this->db->table('tbl_beasiswa')->get()->getResultArray();
    }

    public function getBeasiswaBySiswa($id_siswa){
        return $this->db->table('tbl_beasiswa')->getWhere(['id_siswa' => $id_siswa])->getResultArray();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_beasiswa')->insert($data);  
    }

    public function edit_data($data,$id_siswa,$id_beasiswa)
    {
        return $this->db->table('tbl_beasiswa')->update($data,array('id_siswa'=>  $id_siswa, 'id' => $id_beasiswa));
    }

    public function delete_data($id_beasiswa)
    {
        return $this->db->table('tbl_beasiswa')->delete(array('id'=>  $id_beasiswa));
    }
}