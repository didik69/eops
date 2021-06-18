<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    public function getKelas(){
        return $this->db->table('tbl_datakelas')
        ->join('tbl_jurusan', 'tbl_jurusan.id_jurusan = tbl_datakelas.id_jurusan')
        ->join('tbl_guru', 'tbl_guru.id_guru = tbl_datakelas.id_guru')
        ->get()->getResultArray();
    }

    public function getKelasById($id_kelas){
        return $this->db->table('tbl_datakelas')->getWhere(['id_kelas' => $id_kelas])->getRow();
    }

    public function getKelasBy($username){
        return $this->db->table('tbl_datakelas')->getWhere(['slug' => $username])->getRow();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_datakelas')->insert($data);  
    }

    public function edit_data($data,$id_kelas)
    {
        return $this->db->table('tbl_datakelas')->update($data,array('id_kelas'=>  $id_kelas));
    }

    public function delete_data($id_kelas)
    {
        return $this->db->table('tbl_datakelas')->delete(array('id_kelas'=>  $id_kelas));
    }

}