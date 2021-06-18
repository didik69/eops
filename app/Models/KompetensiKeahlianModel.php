<?php

namespace App\Models;

use CodeIgniter\Model;

class kompetensikeahlianModel extends Model
{
    public function getJurusan(){
        return $this->db->table('tbl_jurusan')->get()->getResultArray();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_jurusan')->insert($data);  
    }

    public function edit_data($data,$id_jurusan)
    {
        return $this->db->table('tbl_jurusan')->update($data,array('id_jurusan'=>  $id_jurusan));
    }
    
    public function delete_data($id_jurusan)
    {
        return $this->db->table('tbl_jurusan')->delete(array('id_jurusan'=>  $id_jurusan));
    }

}