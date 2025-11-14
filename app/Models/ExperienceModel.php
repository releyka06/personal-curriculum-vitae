<?php

namespace App\Models;

use CodeIgniter\Model;

class ExperienceModel extends Model
{
    protected $table      = 'experience';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'biodata_id',
        'posisi',
        'perusahaan',
        'deskripsi',
        'durasi',
    ];
}
