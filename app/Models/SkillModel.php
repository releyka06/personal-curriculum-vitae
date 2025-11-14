<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table      = 'skills';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'biodata_id',
        'kategori',
        'skill',
        'persentase',
    ];
}
