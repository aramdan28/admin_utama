<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $allowedFields    = ['nik', 'email', 'nama', 'slug', 'jk', 'tanggal_lahir', 'tempat_lahir', 'npwp', 'nip', 'Agama', 'nuptk', 'ukg', 'hp', 'pend_terakhir', 'jurusan', 'jabatan', 'golongan', 'status', 'alamat', 'kec', 'kota', 'provinsi', 'komp_keahlian', 'instansi', 'npsn', 'ajar', 'majar', 'password'];
}
