<?php

namespace App\Models;

use CodeIgniter\Model;

class TechModel extends Model
{
    protected $table      = 'tech';
    protected $primaryKey = 'id';

    protected $returnType    = 'array';
    protected $allowedFields = [
        'biodata_id',
        'icon',
        'nama',
    ];
}
