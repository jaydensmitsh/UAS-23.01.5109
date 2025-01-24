<?php

namespace App\Controllers;

use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    protected $model;

    public function __construct()
    {

        $this->model = new ModelMahasiswa();
    }


    public function index()
    {
        $data['mahasiswa'] = $this->model->findAll();
        return view('mahasiswa_view', $data);
    }



    public function simpan()
    {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');
        $nilai = $this->request->getPost('nilai');


        if (!$nim || !$nama || !$email || !$alamat || !$nilai) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data tidak lengkap!']);
        }


        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'nilai' => $nilai,
        ];

        try {

            if ($this->model->save($data)) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil disimpan!']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menyimpan data ke database!']);
            }
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => 'Kesalahan server: ' . $e->getMessage()]);
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');
        $nilai = $this->request->getPost('nilai');

        log_message('debug', "Data diterima: id={$id}, nim={$nim}, nama={$nama}, email={$email}, alamat={$alamat}, nilai={$nilai}");

        if (!$id) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'ID tidak ditemukan.']);
        }

        // Update data ke database
        $model = new ModelMahasiswa();
        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'nilai' => $nilai
        ];

        if ($model->update($id, $data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil diperbarui.']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal memperbarui data.']);
        }
    }


    public function delete($id)
    {
        if ($this->model->delete($id)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menghapus data']);
        }
    }

    public function cari()
    {
        $kataKunci = $this->request->getVar('katakunci'); // Ambil input dari form atau AJAX
        if (!$kataKunci) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Kata kunci tidak boleh kosong.']);
        }

        // Gunakan model yang benar
        $model = new ModelMahasiswa();

        // Cari data berdasarkan kolom yang relevan
        $data = $model->like('nim', $kataKunci)
            ->orLike('nama', $kataKunci)
            ->first(); // Ambil hanya satu data

        // Periksa apakah data ditemukan
        if ($data) {
            return $this->response->setJSON(['status' => 'success', 'data' => $data]);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data tidak ditemukan.']);
        }
    }
}
