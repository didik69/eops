<?php

namespace App\Models;

use CodeIgniter\Model;

class KesejahteraanModel extends Model
{
    public function getKesejahteraan(){
        return $this->db->table('tbl_kesejahteraan')->get()->getResultArray();
    }

    public function getKesejahteraanBySiswa($id_siswa){
        return $this->db->table('tbl_kesejahteraan')->getWhere(['id_siswa' => $id_siswa])->getResultArray();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_kesejahteraan')->insert($data);  
    }

    public function edit_data($data,$id_siswa,$id_kesejahteraan)
    {
        return $this->db->table('tbl_kesejahteraan')->update($data,array('id_siswa'=>  $id_siswa, 'id' => $id_kesejahteraan));
    }

    public function delete_data($id_kesejahteraan)
    {
        return $this->db->table('tbl_kesejahteraan')->delete(array('id'=>  $id_kesejahteraan));
    }
}