<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    /**
     * Simpan data
     *
     * Menyimpan data ke tabel user
     *
     * @param array $data Data yang akan disimpan
     * @return void
     */
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    /**
     * Cek data
     *
     * Memeriksa apakah data ada di tabel user
     *
     * @param array $where Kondisi where
     * @return object
     */
    public function cekData($where = null)
    {
         return $this->db->get_where('user', $where);
    }

    /**
     * Get user where
     *
     * Mendapatkan data user berdasarkan kondisi where
     *
     * @param array $where Kondisi where
     * @return object
     */
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    /**
     * Cek user access
     *
     * Memeriksa apakah user memiliki akses ke menu tertentu
     *
     * @param array $where Kondisi where
     * @return object
     */
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    /**
     * Get user limit
     *
     * Mendapatkan data user dengan batasan jumlah dan offset
     *
     * @return object
     */
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

}