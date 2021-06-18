<?php

namespace App\Models;

use CodeIgniter\Model;

class RombelModel extends Model
{
    public function getRombel(){
        return $this->db->table('tbl_rombel')->get()->getResultArray();
    }

    public function getRombelByKelas($id_kelas){
        return $this->db->table('tbl_rombel')->getWhere(['id_kelas' => $id_kelas])->getResultArray();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_rombel')->insert($data);  
    }

    public function edit_data($data,$id_siswa,$id_prestasi)
    {
        return $this->db->table('tbl_rombel')->update($data,array('id_siswa'=>  $id_siswa, 'id' => $id_prestasi));
    }

    public function delete_data($id_prestasi)
    {
        return $this->db->table('tbl_rombel')->delete(array('id'=>  $id_prestasi));
    }
}