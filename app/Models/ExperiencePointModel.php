<?php

namespace App\Models;

use CodeIgniter\Model;

class ExperiencePointModel extends Model
{
    protected $table      = 'experience_points';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'experience_id',
        'isi',
    ];
}
