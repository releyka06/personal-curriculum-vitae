<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table      = 'education';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'biodata_id',
        'nama_sekolah',
        'tahun',
        'logo',
    ];
}
