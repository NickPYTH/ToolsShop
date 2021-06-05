<?php namespace App\Models;
use CodeIgniter\Model;

class ToolsClaimModel extends Model
{
    protected $table = 'ToolsClaim';
    protected $primaryKey = 'id';

    protected $allowedFields = ['orderGroupId', 'clientEmail', 'price'];


}
