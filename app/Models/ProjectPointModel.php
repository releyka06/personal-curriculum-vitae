<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectPointModel extends Model
{
    protected $table      = 'project_points';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'project_id',
        'isi',
    ];
}
