<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalInfoModel extends Model
{
    protected $table      = 'personal_info';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'biodata_id',
        'label',
        'value',
    ];
}
