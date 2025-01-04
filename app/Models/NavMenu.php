<?php
namespace App\Models;

use CodeIgniter\Model;

class NavMenu extends Model
{
    protected $table = 'navigation_menu_item_settings';
    protected $primaryKey = 'navigation_menu_item_setting_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [];
    protected $useTimestamps = false;
}