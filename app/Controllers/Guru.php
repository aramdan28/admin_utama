<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Guru extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $selectedInstansi = $this->request->getVar('inputDataGuru');

        $query = $this->UserModel->where('jabatan', 'Guru');
        if (!empty($selectedInstansi) && $selectedInstansi != 'Pilih Asal Sekolah') {
            $query = $query->where('instansi', $selectedInstansi);
        }

        $data['users'] = $query->findAll();
        return view('guru/index', $data);
    }
    public function create()
    {
        return view('guru/add');
    }
    public function store()
    {
        $data = [
            'nik'                   => $this->request->getPost('nik'),
            'email'                 => $this->request->getPost('email'),
            'nama'                  => $this->request->getPost('nama'),
            'slug'                  => $this->request->getPost('slug'),
            'jk'                    => $this->request->getPost('jk'),
            'tanggal_lahir'         => $this->request->getPost('tanggal_lahir'),
            'tempat_lahir'          => $this->request->getPost('tempat_lahir'),
            'password'              => password_hash('12345678', PASSWORD_BCRYPT),
            'npwp'                  => $this->request->getPost('npwp'),
            'nip'                   => $this->request->getPost('nip'),
            'Agama'                 => $this->request->getPost('Agama'),
            'nuptk'                 => $this->request->getPost('nuptk'),
            'ukg'                   => $this->request->getPost('ukg'),
            'hp'                    => $this->request->getPost('hp'),
            'pend_terakhir'         => $this->request->getPost('pend_terakhir'),
            'jurusan'               => $this->request->getPost('jurusan'),
            'jabatan'               => 'Guru',
            'golongan'              => $this->request->getPost('golongan'),
            'status'                => $this->request->getPost('status'),
            'alamat'                => $this->request->getPost('alamat'),
            'kec'                   => $this->request->getPost('kec'),
            'kota'                  => $this->request->getPost('nik'),
            'provinsi'              => $this->request->getPost('provinsi'),
            'komp_keahlian'         => $this->request->getPost('komp_keahlian'),
            'instansi'              => $this->request->getPost('instansi'),
            'npsn'                  => $this->request->getPost('npsn'),
            'ajar'                  => $this->request->getPost('ajar'),
            'majar'                 => $this->request->getPost('majar')
        ];
        $this->UserModel->insert($data);
        return redirect()->to('guru');
    }

    public function edit($id)
    {
        $data['guru'] = $this->UserModel->find($id);
        return view('guru/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nik'                   => $this->request->getPost('nik'),
            'email'                 => $this->request->getPost('email'),
            'nama'                  => $this->request->getPost('nama'),
            'slug'                  => $this->request->getPost('slug'),
            'jk'                    => $this->request->getPost('jk'),
            'tanggal_lahir'         => $this->request->getPost('tanggal_lahir'),
            'tempat_lahir'          => $this->request->getPost('tempat_lahir'),
            'password'              => password_hash('12345678', PASSWORD_BCRYPT),
            'npwp'                  => $this->request->getPost('npwp'),
            'nip'                   => $this->request->getPost('nip'),
            'Agama'                 => $this->request->getPost('Agama'),
            'nuptk'                 => $this->request->getPost('nuptk'),
            'ukg'                   => $this->request->getPost('ukg'),
            'hp'                    => $this->request->getPost('hp'),
            'pend_terakhir'         => $this->request->getPost('pend_terakhir'),
            'jurusan'               => $this->request->getPost('jurusan'),
            'jabatan'               => $this->request->getPost('jabatan'),
            'golongan'              => $this->request->getPost('golongan'),
            'status'                => $this->request->getPost('status'),
            'alamat'                => $this->request->getPost('alamat'),
            'kec'                   => $this->request->getPost('kec'),
            'kota'                  => $this->request->getPost('nik'),
            'provinsi'              => $this->request->getPost('provinsi'),
            'komp_keahlian'         => $this->request->getPost('komp_keahlian'),
            'instansi'              => $this->request->getPost('instansi'),
            'npsn'                  => $this->request->getPost('npsn'),
            'ajar'                  => $this->request->getPost('ajar'),
            'majar'                 => $this->request->getPost('majar')
        ];

        $this->UserModel->update($id, $data);
        return redirect()->to('guru');
    }

    public function destroy($id)
    {
        $this->UserModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');
        return redirect()->to(base_url('guru'));
    }
}
