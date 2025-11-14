<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectSkillModel extends Model
{
    protected $table      = 'project_skills';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'project_id',
        'skill',
    ];
}
