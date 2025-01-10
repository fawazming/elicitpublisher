<?php
namespace App\Models;

use CodeIgniter\Model;

class Journals extends Model
{
    protected $table = 'journals';
    protected $primaryKey = 'journal_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [];
    protected $useTimestamps = false;
}
// 