<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiModel extends Model
{
    public function getPrestasi(){
        return $this->db->table('tbl_prestasi')->get()->getResultArray();
    }

    public function getPrestasiBySiswa($id_siswa){
        return $this->db->table('tbl_prestasi')->getWhere(['id_siswa' => $id_siswa])->getResultArray();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_prestasi')->insert($data);  
    }

    public function edit_data($data,$id_siswa,$id_prestasi)
    {
        return $this->db->table('tbl_prestasi')->update($data,array('id_siswa'=>  $id_siswa, 'id' => $id_prestasi));
    }

    public function delete_data($id_prestasi)
    {
        return $this->db->table('tbl_prestasi')->delete(array('id'=>  $id_prestasi));
    }
}