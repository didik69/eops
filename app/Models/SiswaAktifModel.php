<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaAktifModel extends Model
{
    public function getSiswaaktif(){
        return $this->db->table('tbl_siswa')->get()->getResultArray();
    }

    public function getSiswaAktifByKelas($rombel){
        return $this->db->table('tbl_siswa')->join('tbl_datakelas', 'tbl_siswa.slug_kelas=tbl_datakelas.slug')->getWhere(['id_kelas' => $rombel])->getResultArray();
    }

    public function getSiswaById($id_siswa){
        return $this->db->table('tbl_siswa')->getWhere(['id_siswa' => $id_siswa])->getRow();
    }

    public function add_data($data)
    {
	    return $this->db->table('tbl_siswa')->insert($data);  
    }

    public function edit_data($data,$id_siswa)
    {
        return $this->db->table('tbl_siswa')->update($data,array('id_siswa'=>  $id_siswa));
    }

    public function update_data_import($data,$nisn)
    {
        return $this->db->table('tbl_siswa')->update($data,array('nisn'=>  $nisn));
    }

    public function delete_data($id_siswa)
    {
        return $this->db->table('tbl_siswa')->delete(array('id_siswa'=>  $id_siswa));
    }

    public function cek_data($nisn){
        return $this->db->table('tbl_siswa')->getWhere(['nisn' => $nisn])->getRowArray();
    }
    public function cek_dataa(){
        return $this->db->table('tbl_siswa')->get()->getResultArray();
    }

    public function add($data){
        $this->db->table('tbl_siswa')->insert($data);
    }

}